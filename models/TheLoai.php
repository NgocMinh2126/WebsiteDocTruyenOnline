<?php
    class TheLoai{
        private $idTheLoai;
        private $tenTheLoai;
        function __set($key,$value){
            if($key=='idTheLoai'){
                $this->idTheLoai=$value;
            }else if($key=='tenTheLoai'){
                $this->tenTheLoai=$value;
            }
        }
        function __get($key){
            if($key=='idTheLoai'){
                return $this->idTheLoai;
            }else if($key=='tenTheLoai'){
                return $this->tenTheLoai;
            }
        }
        function __construct($id,$ten)
        {
            $this->idTheLoai=$id;
            $this->tenTheLoai=$ten;
        }
        static function getTheLoai(){
            $listTheLoai=[];
            $db=DB::getInstance();
            $query= $db->query('SELECT *FROM theloai');
            foreach($query->fetchAll() as $item){
                $theloai=new TheLoai($item['IDTheLoai'],$item['TenTheLoai']);
                $listTheLoai[]=$theloai;
            }
            return $listTheLoai;
        }
    }
?>