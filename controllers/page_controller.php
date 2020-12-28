<?php
require_once('controllers/base_controller.php');
require_once('models/User.php');
require_once('models/Truyen.php');
require_once('models/TacGia.php');
require_once('models/TheLoai.php');
require_once('models/TheLoaiTruyen.php');

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
    $truyen = Truyen::all();
    $theloaitruyen = TheLoaiTruyen::getAllTheLoaiTruyen();
    $user = User::all();
    $theloai = TheLoai::getTheLoai();
    $tacgia = TacGia::getTacGia();
    $data = array(
      'truyen' => $truyen,
      'user' => $user,
      'tacgia' => $tacgia,
      'listTheLoaiTruyen' => $theloaitruyen,
      'listTheLoai' => $theloai,
    );
    $this->render('Admin', $data);
  }
  public function InsertTruyen()
  {
    $tenTruyen = $_GET['ten'];
    $moTa = $_GET['gt'];
    $anhBia = $_GET['anhBia'];
    $tinhTrang = $_GET['tinhTrang'];
    $idTacGia = $_GET['tg'];
    $loaiTruyen = $_GET['loai'];
    $insert=Truyen::insert($tenTruyen,$moTa,$anhBia,$tinhTrang,$idTacGia,$loaiTruyen);
    $getIDTruyen = Truyen::idmax();
    $listTheLoaiTruyen = [];
    $sluong = $_GET['sluong'];
    for ($i = 0; $i < $sluong; $i++) {
      $str = 'theloai' . $i; // tao lai &theloai thu $i
      $listTheLoaiTruyen[] = $_GET[$str];
    }
    $insertTheLoaiTruyen=TheLoaiTruyen::InsertTheLoaiTruyen($getIDTruyen,$listTheLoaiTruyen);
    header("location:?controller=page&action=Admin");
  }
  public function Delete()
  {
    echo $_GET['idTruyen'];
    $deleteChuong = Truyen::deleteChuong($_GET['idTruyen']);
    $deleteTheLoaiTruyen = Truyen::deleteTheLoaiTruyen($_GET['idTruyen']);
    $deleteTruyen = Truyen::deleteTruyen($_GET['idTruyen']);
    header("location:?controller=page&action=Admin");
  }
  public function UpdateTruyen()
  {
    $idTruyen=$_GET['id'];
    $tenTruyen=$_GET['ten'];
    $tinhTrang=$_GET['tinhTrang'];
    $idTacGia=$_GET['idtg'];    
    if(isset($_GET['anh'])){
      $anhBia=$_GET['anh'];
      $updatetruyen=Truyen::updateTruyen($idTruyen,$tenTruyen,$tinhTrang,$idTacGia,$anhBia);
      echo "doi anh";
    }else{
      $updatetruyen=Truyen::updateTruyen2($idTruyen,$tenTruyen,$tinhTrang,$idTacGia);
    }
    header("location:?controller=page&action=Admin");
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
