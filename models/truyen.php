<?php
    class Truyen{
        private $idTruyen;
        private $tenTruyen;
        private $moTa;
        private $soChuong;
        private $luotLike;
        private $anhBia;
        private $tinhTrang;
        private $idTacGia;
        private $loaiTruyen;
        private $ngayDang;
        function  __set($key,$value){
            if($key=='idTruyen'){
                $this->idTruyen=$value;
            }else if($key=='tenTruyen'){
                $this->tenTruyen=$value;
            }else if($key=='moTa'){
                $this->moTa=$value;
            }else if($key=='soChuong'){
                $this->soChuong=$value;
            }else if($key=='luotLike'){
                $this->luotLike=$value;
            }else if($key=='anhBia'){
                $this->anhBia=$value;
            }else if($key=='tinhTrang'){
                $this->tinhTrang=$value;
            }else if($key=='idTacGia'){
                $this->idTacGia=$value;
            }else if($key=='loaiTruyen'){
                $this->loaiTruyen=$value;
            }else if($key=='ngayDang'){
                $this->ngayDang=$value;
            }
        }   
        function __get($key){
            if($key=='idTruyen'){
                return $this->idTruyen;
            }else if($key=='tenTruyen'){
                return $this->tenTruyen;
            }else if($key=='moTa'){
                return $this->moTa;
            }else if($key=='soChuong'){
                return $this->soChuong;
            }else if($key=='luotLike'){
                return $this->luotLike;
            }else if($key=='anhBia'){
                return $this->anhBia;
            }else if($key=='tinhTrang'){
                return $this->tinhTrang;
            }else if($key=='idTacGia'){
                return $this->idTacGia;
            }else if($key=='loaiTruyen'){
                return $this->loaiTruyen;
            }else if($key=='ngayDang'){
                return $this->ngayDang;
            }   
        }
        function __construct($id,$ten,$mota,$chuong,$like,$bia,$tinhtrang,$tacgia,$loai,$ngay){
            $this->idTruyen=$id;
            $this->tenTruyen=$ten;
            $this->moTa=$mota;            
            $this->soChuong=$chuong;
            $this->luotLike=$like;
            $this->anhBia=$bia;
            $this->idTacGia=$tacgia;
            $this->tinhTrang=$tinhtrang;
            $this->loaiTruyen=$loai;
            $this->ngayDang=$ngay;
        }
        static function all(){
            $list = [];
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM truyen');
        
            foreach ($req->fetchAll() as $item) {
                $tr = new Truyen($item['IDTruyen'], $item['TenTruyen'],$item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $list[] = $tr;
            }
            return $list;
        }
        static function getTruyenByType($idTheLoai){
            $list=[];
            $db=DB::getInstance();
            $query= $db->query('SELECT *FROM truyen WHERE IDTruyen in(SELECT IDTruyen FROM theloaitruyen WHERE IDTheLoai= '.$idTheLoai.')');
            foreach($query-> fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $list[] = $tr;
            }
            return $list;
        }
        static function getTruyenMoi(){
            $listTruyenMoi=[];
            $db=DB::getInstance();
            $query=$db->query('SELECT *FROM truyen ORDER BY NgayDang desc ');
            foreach($query-> fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $listTruyenMoi[] = $tr;
            }
            return $listTruyenMoi;
        }
        static function getTruyenFull(){
            $listTruyenFull=[];
            $db=DB::getInstance();
            $query=$db->query("SELECT * FROM truyen WHERE TinhTrang='Đã hoàn thành'");
            foreach($query->fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $listTruyenFull[] = $tr;
            }
            return $listTruyenFull;
        }
        static function getTruyenHot(){
            $list=[];
            $db=DB::getInstance();
            $query= $db->query('SELECT * FROM truyen ORDER BY LuotLike desc');
            foreach($query-> fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $list[] = $tr;
            }
            return $list;
        }
        //lay dsach truyen tranh 
        static function getTruyenTranh(){
            $list=[];
            $db=DB::getInstance();
            $query= $db->query('SELECT * FROM truyen WHERE LoaiTruyen=0 ORDER BY LuotLike desc');
            foreach($query-> fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $list[] = $tr;
            }
            return $list;
        }
        static function getTruyenTranhByType($idTheLoai){
            $list=[];
            $db=DB::getInstance();
            $query=$db->query("SELECT * FROM truyen WHERE LoaiTruyen=0 AND IDTruyen in(
                SELECT IDTruyen FROM theloaitruyen WHERE IDTheLoai=$idTheLoai
            )");
            foreach($query->fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $list[]=$tr;
            }
            return $list;
        }
        // lay danh sach tiểu thuyết
        static function getTieuThuyet(){
            $list=[];
            $db=DB::getInstance();
            $query= $db->query('SELECT * FROM truyen WHERE LoaiTruyen=1 ORDER BY LuotLike desc');
            foreach($query-> fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $list[] = $tr;
            }
            return $list;
        }
        static function getTieuThuyetByType($idTheLoai){
            $list=[];
            $db=DB::getInstance();
            $query= $db->query("SELECT * FROM truyen WHERE LoaiTruyen=1 AND IDTruyen in
                (SELECT IDTruyen FROM theloaitruyen WHERE IDTheLoai=$idTheLoai)");
            foreach($query-> fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $list[] = $tr;
            }
            return $list;
        }
        static function getTruyenID($idTruyen){            
            $db=DB::getInstance();
            $query=$db->query("SELECT *FROM truyen WHERE IDTruyen=$idTruyen");
            $item=$query->fetch();
            $truyen= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
            return $truyen;
        }  
        //Tim truyen
        static function getTruyenBytext($search){
            $list=[];
            $db=DB::getInstance();
            $query=$db->query("SELECT *FROM truyen WHERE TenTruyen LIKE '$search%'");
            foreach($query-> fetchAll() as $item){
                $tr= new Truyen($item['IDTruyen'], $item['TenTruyen'], $item['MoTa'], $item['SoChuong'],$item['LuotLike'], $item['AnhBia'],$item['TinhTrang'],$item['IDTacGia'],$item['LoaiTruyen'],$item['NgayDang']);
                $list[] = $tr;
            }
            return $list;
        }
    }    
?>