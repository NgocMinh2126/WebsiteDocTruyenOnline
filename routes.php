<?php
$controllers = array(
  'page' => ['Admin','Dangky','Dangnhap'],
  'truyen' => ['index','Doctieuthuyet','Doctruyentranh','Tieuthuyet','Truyentranh','Truyendetail'],
);
include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller'; //tạo tên class controller tương ứng
$controller = new $klass;
if($action=='Truyendetail'){
  $controller->$action($idTruyen); 
} else
if($action=='Truyentranh'){
  if($idTheLoai != -1){
    $controller->locTruyentranh($idTheLoai);
  }
  else{
    $controller->$action(); 
  }
}else if($action=='Tieuthuyet'){
  if($idTheLoai != -1){
    $controller->locTieuthuyet($idTheLoai);
  }else{
    $controller->$action();
  }
}
else if($action=='Alltruyen'){
  if($idTheLoai !=-1){
    $controller->locAlltruyen($idTheLoai);
  }else{
    $controller->$action();
  }
}else if($action=='Doctruyentranh'){
  $controller->$action($idTruyen);
}
else{
  $controller->$action(); 
}
