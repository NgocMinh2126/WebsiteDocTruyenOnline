<?php
require_once('controllers/base_controller.php');
require_once('models/Truyen.php');
require_once('models/TacGia.php');
require_once('models/TheLoai.php');
require_once('models/TheLoaiTruyen.php');
require_once('models/Chuong.php');

class TruyenController extends BaseController
{
    function __construct()
    {
        $this->folder = 'truyen';
    }

    public function index()
    {
        $listTruyenTranh = Truyen::getTruyenTranh();
        $listTieuThuyet = Truyen::getTieuThuyet();
        $listTruyenMoi = Truyen:: getTruyenMoi();
        $listTacGia= TacGia::getTacGia();
        $listTheLoai= TheLoai::getTheLoai();
        $data=array (
            'listTruyenTranh'=>$listTruyenTranh,
            'listTieuThuyet'=>$listTieuThuyet,
            'listTruyenMoi'=>$listTruyenMoi,
            'listTacGia'=>$listTacGia,
            'listTheLoai'=>$listTheLoai,
        ); //tuong tu object
        $this->render('index',$data);        
    }
    public function Truyentranh(){
        $listTruyenTranh = Truyen::getTruyenTranh();
        $listTheLoai=TheLoai::getTheLoai();
        $data=array(
            'listTruyenTranh'=>$listTruyenTranh,
            'listTheLoai'=>$listTheLoai,
        );
        $this->render('Truyentranh',$data);
    }
    public function locTruyentranh($idTheLoai){
        $listTruyenTranh = Truyen::getTruyenTranhByType($idTheLoai);
        $listTheLoai=TheLoai::getTheLoai();
        $data=array(
            'listTruyenTranh'=>$listTruyenTranh,
            'listTheLoai'=>$listTheLoai,
        );
        $this->render('Truyentranh',$data);
    }
    public function Tieuthuyet(){
        $listTieuThuyet = Truyen::getTieuThuyet();
        $listTheLoai = TheLoai::getTheLoai();
        $data=array(
            'listTieuThuyet'=>$listTieuThuyet,
            'listTheLoai'=>$listTheLoai,
        );
        $this->render('Tieuthuyet',$data);
    }
    public function locTieuthuyet($idTheLoai){
        $listTieuThuyet= Truyen::getTieuThuyetByType($idTheLoai);
        $listTheLoai=TheLoai::getTheLoai();
        $data=array(
            'listTieuThuyet'=>$listTieuThuyet,
            'listTheLoai'=>$listTheLoai,
        );
        $this->render('Tieuthuyet',$data);
    }
    public function Alltruyen(){
        $listTheLoai= TheLoai::getTheLoai();
        $listTruyen= Truyen::getTruyenMoi();
        $data=array(
            'listTheLoai'=>$listTheLoai,
            'listTruyen'=>$listTruyen,
        );
        $this->render('Alltruyen',$data);
    }
    public function locAlltruyen($idTheLoai){
        $listTheLoai= TheLoai::getTheLoai();
        $listTruyen= Truyen::getTruyenByType($idTheLoai);
        $data=array(
            'listTheLoai'=>$listTheLoai,
            'listTruyen'=>$listTruyen,
        );
        $this->render('Alltruyen',$data);
    }
    public function Truyendetail($idTruyen){        
        $truyen = Truyen::getTruyenID($idTruyen);
        $listTheLoai= TheLoai::getTheLoai();
        $listTheLoaiTruyen= TheLoaiTruyen::getTheLoaiTruyen($idTruyen);
        $listTacGia = TacGia::getTacGia();
        $listChuong=Chuong::getChuong($idTruyen);
        $data=array(
            'truyen'=>$truyen,
            'listTacGia'=> $listTacGia,
            'listTheLoai'=>$listTheLoai,
            'listTheLoaiTruyen'=>$listTheLoaiTruyen,
            'listChuong'=>$listChuong,
        );
        $this->render('Truyendetail',$data);
    }
    public function Doctruyentranh($idTruyen){
        $truyen= Truyen::getTruyenID($idTruyen);
        $listTheLoai=TheLoai::getTheLoai();
        $listTheLoaiTruyen=TheLoaiTruyen::getTheLoaiTruyen($idTruyen);
        $listChuong=Chuong::getChuong($idTruyen);
        $data=array(
            'truyen'=>$truyen,
            'listTheLoai'=>$listTheLoai,
            'listTheLoaiTruyen'=>$listTheLoaiTruyen,
            'listChuong'=>$listChuong,
        );
        $this->render('Doctruyentranh',$data);
    }
    public function Search($search){
        $listTruyen= Truyen::getTruyenMoi();
        $listKQ=Truyen::getTruyenBytext($search);
        $listTheLoai=TheLoai::getTheLoai();
        $data=array(
            'listTheLoai'=>$listTheLoai,
            'listTruyen'=>$listTruyen,
            'listKQ'=>$listKQ,
        );
        $this->render('Search',$data);
    }
}
