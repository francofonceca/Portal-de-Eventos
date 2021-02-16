<?php
function clean($dato)
{
    return $GLOBALS['db']->quote(trim($dato));
}
function redirect($page)
{
    header("Location:$page.php");
}
function verify($value){
    $verificar = isset($value) && !is_null($value);
    if (is_array($value)) {
        $verificar = count($value)>0 && $verificar;
    }else{
        $verificar = (strlen($value)>0) && $verificar;
    }
    return $verificar;
}

function getSomething($table, $IDColumn = null, $id = null, $OrderColumn = null, $Order = null)
{
    $where = isset($id) && !is_null($id) ? ' where ' . $IDColumn . ' = ' . $id : '';
    $order = isset($Order) && !is_null($Order) ? ' ORDER BY ' . $OrderColumn . ' ' . $Order : '';
    $sql = 'SELECT * FROM ' . $table . '
            ' . $where . $order;
    return Consulta($sql);
}

function getCategoriesFilters($id = null)
{
    $where = isset($id) ? ' where CategoryFilterID = ' . $id : '';
    $sql = 'SELECT * FROM ' . $GLOBALS['tables']['categories'] . '
            LEFT JOIN ' . $GLOBALS['tables']['category_filter'] . ' ON categories.CategoryID = category_filter.CategoryID
            INNER JOIN ' . $GLOBALS['tables']['filters'] . ' ON filters.FilterID = category_filter.FilterID
            ' . $where;
    return Consulta($sql);
}

//** COMIENZO DE GET SELECT*/
function getSelect($table,$orderColumn=null,$order=null,$selectValue,$selectShow,$selectSelected = null, $selectClass = '',$selectTitle=null,$selectArray = null,$selectName = 'selectSearch'){
    
    $html = '<select name="'.$selectName.'" class="'.$selectClass.'">';
    $html.= verify($selectTitle)?'<option>'.$selectTitle.'</option>':'';
    if (is_array($selectArray)) {
        $data = $selectArray;
    }else{
        $data = getSomething($table, null, null, $orderColumn, $order);
    }
    foreach ($data as $key => $item) {
        $selected = '';
        if (verify($selectSelected) && $item[$selectValue] == $selectSelected) {
            $selected = 'selected';
        }
        $html .= '<option value="' . $item[$selectValue] . '" ' . $selected . '>';
        $html .= $item[$selectShow];
        $html .= '</option>';
    }
    $html .= '</select>';
    return $html;
}
//** FIN DE GET SELECT*/

function getPost($id = null, $ZoneID = null, $Title = null, $LoungeID = null,$EventID = null)
{
    $where = '';
    if (verify($id)) {
        $where = ' posts.PostID = ' . $id;
    } else {
        $whereVec[] = verify($ZoneID) ? ' posts.ZoneID = ' . $ZoneID . ' ' : null;
        $whereVec[] = verify($Title) ? ' posts.Title LIKE "%' . $Title . '%" ' : null;
        $whereVec[] = verify($LoungeID) ? ' post_lounge.LoungeID = ' . $LoungeID . ' ' : null;
        $whereVec[] = verify($EventID) ? ' post_events.EventID = ' . $EventID . ' ' : null;
    }
    foreach ($whereVec as $key => $item) {
        if (isset($whereVec[$key + 1])) {
            $where .=  $item . ' AND ';
        }else if(verify($item)){
            $where .= ' ' . $item;
        }
    }

    $where = strlen($where) > 0 ? 'WHERE ' . $where : '';
    $sql = 'SELECT posts.*,zones.Zone
            FROM ' . $GLOBALS['tables']['posts'] . '
            INNER JOIN ' . $GLOBALS['tables']['zones'] . ' ON zones.ZoneID = posts.ZoneID

            LEFT JOIN ' . $GLOBALS['tables']['post_lounge'] . ' ON posts.PostID = post_lounge.PostID

            LEFT JOIN ' . $GLOBALS['tables']['post_category'] . ' ON posts.PostID = post_category.PostID

            LEFT JOIN ' . $GLOBALS['tables']['post_filter'] . ' ON posts.PostID = post_filter.PostID

            LEFT JOIN ' . $GLOBALS['tables']['post_events'] . ' ON posts.PostID = post_events.PostID
            
            ' . $where.'
            GROUP BY PostID
            ';
    $posts = Consulta($sql);

    $whereID = '';
    if (verify($posts)) {
        foreach ($posts as $key => $post) {
            $whereID .= 'posts.PostID = '.$post['PostID'];
            if ($key<count($posts)-1) {
                $whereID .=' OR ';
            }  
        }
    }
    $whereID = strlen($whereID)>0?" WHERE ".$whereID:'';
    
    if (strlen($whereID)>0) {
        $sql = 'SELECT posts.PostID,post_events.*
                FROM ' . $GLOBALS['tables']['posts'] . '
                LEFT JOIN ' . $GLOBALS['tables']['post_events'] . ' ON posts.PostID = post_events.PostID
                LEFT JOIN ' . $GLOBALS['tables']['events'] . ' ON events.EventID = post_events.EventID
                
                ' . $whereID;
        $events = Consulta($sql);
        
        $sql = 'SELECT posts.PostID,lounges.*
                FROM ' . $GLOBALS['tables']['posts'] . '
    
                LEFT JOIN ' . $GLOBALS['tables']['post_lounge'] . ' ON posts.PostID = post_lounge.PostID
                LEFT JOIN ' . $GLOBALS['tables']['lounges'] . ' ON lounges.LoungeID = post_lounge.LoungeID
                
                ' . $whereID;
        $lounges = Consulta($sql);
        
        $sql = 'SELECT posts.PostID,categories.*
                FROM ' . $GLOBALS['tables']['posts'] . '
                LEFT JOIN ' . $GLOBALS['tables']['post_category'] . ' ON posts.PostID = post_category.PostID
                LEFT JOIN ' . $GLOBALS['tables']['categories'] . ' ON categories.CategoryID = post_category.CategoryID
                
                ' . $whereID;
        $categories = Consulta($sql);
        
        $sql = 'SELECT posts.PostID,filters.*
                FROM ' . $GLOBALS['tables']['posts'] . '
                LEFT JOIN ' . $GLOBALS['tables']['post_filter'] . ' ON posts.PostID = post_filter.PostID
                LEFT JOIN ' . $GLOBALS['tables']['filters'] . ' ON filters.FilterID = post_filter.FilterID
                
                ' . $whereID;
        $filters = Consulta($sql);
    
        $sql = 'SELECT posts.PostID,post_images.*
                FROM ' . $GLOBALS['tables']['posts'] . '
                LEFT JOIN ' . $GLOBALS['tables']['post_images'] . ' ON posts.PostID = post_images.PostID
                
                ' . $whereID;
        $images = Consulta($sql);
        $return = [
            'events' => $events,
            'posts' => $posts,
            'lounges' => $lounges,
            'categories' => $categories,
            'filters' => $filters,
            'images' => $images,
        ];
    }else{
        $return = [
            'posts' => $posts
        ];
    }
    return $return;
}