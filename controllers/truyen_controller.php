<?php
require_once('controllers/base_controller.php');
require_once('models/Truyen.php');
require_once('models/TacGia.php');

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
        $data=array (
            'listTruyenTranh'=>$listTruyenTranh,
            'listTieuThuyet'=>$listTieuThuyet,
            'listTruyenMoi'=>$listTruyenMoi,
            'listTacGia'=>$listTacGia,
        ); //tuong tu object
        $this->render('index',$data);        
    }
}
