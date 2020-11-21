<?php
    class TheLoaiTruyen{
        private $idTruyen;
        private $idTheLoai;
        function __set($key,$value){
            if($key='idTruyen'){
                $this->idTruyen=$value;                
            }else if($key='idTheLoai'){
                $this->idTheLoai=$value;
            }
        }
        function __get($key){
            if($key='idTruyen'){
                return $this->idTruyen;                
            }else if($key='idTheLoai'){
                return $this->idTheLoai;
            }
        }
        function __construct($truyen,$theloai)
        {
            $this->idTruyen=$truyen;
            $this->idTheLoai=$theloai;
        }
    }
?>