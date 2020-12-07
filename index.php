<?php
    require_once('connect.php');
    $idTheLoai = -1;  
    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if(isset($_GET['idTruyen'])){ 
                $idTruyen=$_GET['idTruyen'];
            }
            if(isset($_GET['idTheLoai'])){
                $idTheLoai=$_GET['idTheLoai'];
            }
        }else{
            $action = 'index';
        }
    } else {
        $controller = 'truyen';
        $action = 'index';
    }
    require_once('routes.php');
?>