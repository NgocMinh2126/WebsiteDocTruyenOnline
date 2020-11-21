<?php
$controllers = array(
  'page' => ['Admin','Dangky','Dangnhap'],
  'truyen' => ['index','Doctieuthuyet','Doctruyentranh','Tieuthuyet','Truyentranh','Truyendetail'],
);

include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller'; //tạo tên class controller tương ứng
$controller = new $klass;
$controller->$action(); 