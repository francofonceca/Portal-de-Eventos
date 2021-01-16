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
$tables = array(
    'users'      => 'users',
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
        print json_encode($lookup->fetchAll());
    } else {
        print ERROR;
    }
}
function Existe($sql)
{
    $valor = false;
    if ($lookup = $GLOBALS['db']->query($sql))
        $valor =  $lookup->rowCount() == 1;
    return $valor;
}


//Functions


function clean($dato)
{
    return $GLOBALS['db']->quote($dato);
}
function redirect($page){
    header("Location:$page.php");
}
