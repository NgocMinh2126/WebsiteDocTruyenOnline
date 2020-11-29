<?php
    class TheLoaiTruyen{
        private $idTruyen;
        private $idTheLoai;
        function __set($key,$value){
            if($key=='idTruyen'){
                $this->idTruyen=$value;                
            }else if($key=='idTheLoai'){
                $this->idTheLoai=$value;
            }
        }
        function __get($key){
            if($key=='idTruyen'){
                return $this->idTruyen;                
            }else if($key=='idTheLoai'){
                return $this->idTheLoai;
            }
        }
        function __construct($truyen,$theloai)
        {
            $this->idTruyen=$truyen;
            $this->idTheLoai=$theloai;
        }
        static function getTheLoaiTruyen($idTruyen){
            $listTheLoaiTruyen=[];
            $db=DB::getInstance();
            $query=$db->query("SELECT * FROM theloaitruyen WHERE IDTruyen=$idTruyen");
            foreach($query->fetchAll() as $item){
                $tlt=new TheLoaiTruyen($item['IDTruyen'], $item['IDTheLoai']);
                $listTheLoaiTruyen[]= $tlt;
            }
            return $listTheLoaiTruyen;
        }
    }
?>