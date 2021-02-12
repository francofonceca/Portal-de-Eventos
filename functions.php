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
    return isset($value) && !is_null($value) && strlen($value)>0;
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

function getSelectZone($id = null)
{
    $zones = getSomething($GLOBALS['tables']['zones'], null, null, 'Zone', 'ASC');
    $html = '<select name="selectSearch">';
    foreach ($zones as $key => $zone) {
        $selected = '';
        if (isset($id) && !is_null($id) && $zone['ZoneID'] == $id) {
            $selected = 'selected';
        }
        $html .= '<option value="' . $zone['ZoneID'] . '" ' . $selected . '>';
        $html .= $zone['Zone'];
        $html .= '</option>';
    }
    $html .= '</select>';
    return $html;
}

function getPost($id = null, $ZoneID = null, $Title = null, $CategoryID = null, $FilterID = null, $LoungeID = null)
{
    $where = '';
    if (isset($id) && !is_null($id)) {
        $where = ' posts.PostID = ' . $id;
    } else {
        $whereVec[] = verify($ZoneID) ? ' posts.ZoneID = ' . $ZoneID . ' ' : null;
        $whereVec[] = verify($Title) ? ' posts.Title LIKE "%' . $Title . '%" ' : null;
        $whereVec[] = verify($CategoryID) ? ' post_lounge.CategoryID = ' . $id . ' ' : null;
        $whereVec[] = verify($FilterID) ? ' post_filter.FilterID = ' . $FilterID . ' ' : null;
        $whereVec[] = verify($LoungeID) ? ' post_lounge.LoungeID = ' . $LoungeID . ' ' : null;
    }
    foreach ($whereVec as $key => $item) {
        if (isset($whereVec[$key + 1])) {
            $where .=  $item . ' AND ';
        }else if(verify($item)){
            $where .= ' ' . $item;
        }
    }

    $where = strlen($where) > 0 ? 'WHERE ' . $where : '';

    $sql = 'SELECT posts.*,categories.*,filters.*,post_images.*,zones.*
            FROM ' . $GLOBALS['tables']['posts'] . '
            INNER JOIN ' . $GLOBALS['tables']['post_images'] . ' ON posts.PostID = post_images.PostID
            INNER JOIN ' . $GLOBALS['tables']['zones'] . ' ON zones.ZoneID = posts.ZoneID

            INNER JOIN ' . $GLOBALS['tables']['post_lounge'] . ' ON posts.PostID = post_lounge.PostID
            INNER JOIN ' . $GLOBALS['tables']['lounges'] . ' ON lounges.LoungeID = post_lounge.LoungeID

            LEFT JOIN ' . $GLOBALS['tables']['post_category'] . ' ON posts.PostID = post_category.PostID
            LEFT JOIN ' . $GLOBALS['tables']['categories'] . ' ON categories.CategoryID = post_category.CategoryID

            LEFT JOIN ' . $GLOBALS['tables']['post_filter'] . ' ON posts.PostID = post_filter.PostID
            LEFT JOIN ' . $GLOBALS['tables']['filters'] . ' ON filters.FilterID = post_filter.FilterID
            
            ' . $where;
    Consulta($sql);
}
