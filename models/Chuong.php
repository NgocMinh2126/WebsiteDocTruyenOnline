<?php
    class Chuong{
        private $STT;
        private $idTruyen;
        private $link;  
        private $ngayThem;
        function __set($key,$value){
            if($key=='STT'){
                $this->STT=$value;
            }else if($key=='idTruyen'){
                $this->idTruyen=$value;
            }else if($key=='link'){
                $this->link=$value;
            }else if($key=='ngayThem'){
                $this->ngayThem=$value;
            }
        }      
        function __get($key){
            if($key=='STT'){
                return $this->STT;
            }else if($key=='idTruyen'){
                return $this->idTruyen;
            }else if($key=='link'){
                return $this->link;
            }else if($key=='ngayThem'){
                return $this->ngayThem;
            }
        }
        function __construct($stt,$id,$link,$ngayThem)
        {
            $this->STT=$stt;
            $this->idTruyen=$id;
            $this->link=$link;
            $this->ngayThem=$ngayThem;
        }
        static function getChuong($idTruyen){
            $list=[];
            $db=DB::getInstance();
            $query=$db->query("SELECT * FROM chuong WHERE IDTruyen=$idTruyen");
            foreach($query->fetchAll() as $item){
                $chuong= new Chuong($item['STT'],$item['IDTruyen'],$item['Link'],$item['NgayThem']);
                $list[]=$chuong;
            }
            return $list;
        }
    }
?>