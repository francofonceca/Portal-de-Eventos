<?php

/*
  //
  // Possible statuses:
  // 0 -> Pass.
  // 1 -> General error/invalid request.
  */
define('PASS', 0);
define('ERROR', 1);

// Database
$server = array(
    'hostname'   => 'localhost',
    'username'   => 'root',
    'password'   => '',
    'port'       => 3306,
    'database'   => 'portal'
);

// Tables
$GLOBALS['tables']= array(
    'users'      => 'portal.users',
    'lounges'      => 'portal.lounges',
    'categories'      => 'portal.categories',
    'filters'      => 'portal.filters',
    'category_filter'      => 'portal.category_filter',
    'zones'      => 'portal.zones',
    'events'      => 'portal.events',

    'posts'      => 'portal.posts',
    'post_lounge'      => 'portal.post_lounge',
    'post_category'      => 'portal.post_category',
    'post_filter'      => 'portal.post_filter',
    'post_images'      => 'portal.post_images',
    'post_events'      => 'portal.post_events',

    
    'contact'      => 'portal.contact',
    'work'      => 'portal.work',
    'company'      => 'portal.company',
);

// Connection

$GLOBALS['db'] =  new PDO('mysql:host=' . $server['hostname'] . ':' . $server['port'] . ';dbname=' . $server['database'] . ';charset=utf8', $server['username'], $server['password']);

#QUERY
function INSERT($tabla, $columnas, $valores)
{
    $sql = "INSERT INTO " . $tabla . "(" . $columnas . ") VALUES (" . $valores . ")";
    $lookup = $GLOBALS['db']->query($sql);
    return $lookup;
}

function UPDATE($tabla, $valores, $donde)
{
    $sql = "UPDATE " . $tabla . " SET " . $valores . " WHERE " . $donde;
    $lookup = $GLOBALS['db']->query($sql);
    return $lookup;
}

function DELETE($tabla, $donde)
{
    $sql = "DELETE FROM " . $tabla . " WHERE " . $donde;
    $lookup = $GLOBALS['db']->query($sql);
    return $lookup;
}
function Consulta($sql)
{
    if ($lookup = $GLOBALS['db']->query($sql)) {
        return $lookup->fetchall();
    } else {
        print ERROR;
    }
}
function Existe($sql)
{
    $valor = false;
    if ($lookup = $GLOBALS['db']->query($sql))
        $valor =  $lookup->rowCount() > 0;
    return $valor;
}

include_once('functions.php');