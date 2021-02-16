<?php
    include_once('connect.php');
    if (!isset($_SESSION)) {
        session_start();
    }
    $logued = isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email'])  && isset($_SESSION['phone']);
    if ($logued) {
        UPDATE($tables['users'],'Enabled=0','Email='.clean($_SESSION['email']));
        redirect('logout');
    }else{
        redirect('index');
    }