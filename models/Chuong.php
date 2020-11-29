<?php
    class Chuong{
        private $STT;
        private $idTruyen;
        private $link;  
        function __set($key,$value){
            if($key=='STT'){
                $this->STT=$value;
            }else if($key=='idTruyen'){
                $this->idTruyen=$value;
            }else if($key=='link'){
                $this->link=$value;
            }
        }      
        function __get($key){
            if($key=='STT'){
                return $this->STT;
            }else if($key=='idTruyen'){
                return $this->idTruyen;
            }else if($key=='link'){
                return $this->link;
            }
        }
        function __construct($stt,$id,$link)
        {
            $this->STT=$stt;
            $this->idTruyen=$id;
            $this->link=$link;
        }
    }
?>