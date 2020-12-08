<?php
require_once('controllers/base_controller.php');
require_once('models/User.php');

class PageController extends BaseController
{
  function __construct()
  {
    $this->folder = 'page';
  }
  public function Dangnhap()
  {
    $listUser = User::all();
    $data = array(
      'listUser' => $listUser,
    );
    $this->render('Dangnhap', $data);
  }
  public function Dangky()
  {
    $listUser = User::all();
    $data = array(
      'listUser' => $listUser,
    );
    $this->render('Dangky', $data);
  }
  public function Admin()
  {
    $data = array(1);
    $this->render('Admin', $data);
  }
  public function Quenmk()
  {
    $listUser = User::all();
    $data = array(
      'listUser' => $listUser,
    );
    $this->render('Quenmk', $data);
  }
  public function Chinhsach()
  {
    $data = array(1);
    $this->render('Chinhsach', $data);
  }
  public function Lienhe()
  {
    $data = array(1);
    $this->render('Lienhe', $data);
  }
  public function Gioithieu()
  {
    $data = array(1);
    $this->render('Gioithieu', $data);
  }
  public function Trogiup()
  {
    $data = array(1);
    $this->render('Trogiup', $data);
  }
}