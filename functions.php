<?php
function clean($dato)
{
    return $GLOBALS['db']->quote($dato);
}
function redirect($page)
{
    header("Location:$page.php");
}
function getSomething($table,$IDColumn = null,$id=null){
    $where = isset($id)?' where '.$IDColumn.' = '.$id:'';
    $sql = 'SELECT * FROM '.$table.'
            '.$where;
    return Consulta($sql);
}

function getCategoriesFilters($id = null){
    $where = isset($id)?' where CategoryFilterID = '.$id:'';
    $sql = 'SELECT * FROM '.$GLOBALS['tables']['categories'].'
            LEFT JOIN '.$GLOBALS['tables']['category_filter'].' ON categories.CategoryID = category_filter.CategoryID
            INNER JOIN '.$GLOBALS['tables']['filters'].' ON filters.FilterID = category_filter.FilterID
            '.$where;
    return Consulta($sql);
}