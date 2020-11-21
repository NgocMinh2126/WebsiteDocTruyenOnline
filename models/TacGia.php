<?php
    class TacGia{
        private $idTacGia;
        private $tenTacGia;
        function __set($key,$value){
            if($key=='idTacGia'){
                $this->idTacGia=$value;
            }else if($key=='tenTacGia'){
                $this->tenTacGia=$value;
            }
        }
        function __get($key){
            if($key=='idTacGia'){
                return $this->idTacGia;
            }else if($key=='tenTacGia'){
                return $this->tenTacGia;
            }
        }
        function __construct($id,$ten)
        {
            $this->idTacGia=$id;
            $this->tenTacGia=$ten;
        }
        static function getTacGia(){
            $listTacGia=[];
            $db=DB::getInstance();
            $query=$db->query('SELECT * FROM tacgia');
            foreach($query->fetchAll() as $item){
                $tg=new TacGia($item['IDTacGia'],$item['TenTacGia']);
                $listTacGia[]=$tg;
            }
            return $listTacGia;
        }
    }
?>