<?php
    require_once('connect.php');

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'index';
        }
    } else {
        $controller = 'truyen';
        $action = 'index';
    }
    require_once('routes.php');
?>