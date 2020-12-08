<?php
    class User{
        private $idUser;
        private $hoTen;
        private $email;
        private $password;
        function __set($key,$value){
            if($key=='idUser'){
                $this->idUser=$value;
            }else if( $key=='hoTen'){
                $this->hoTen=$value;
            }else if($key=='email'){
                $this->email=$value;
            }else if($key=='password'){
                $this->password=$value;
            }
        }
        function __get($key){
            if($key=='idUser'){
               return $this->idUser;
            }else if( $key=='hoTen'){
                return $this->hoTen;
            }else if($key=='email'){
                return $this->email;
            }else if($key=='password'){
                return $this->password;
            }
        }
        function __construct($id,$ten,$mail,$pass)
        {
            $this->idUser=$id;
            $this->hoTen=$ten;
            $this->email=$mail;
            $this->password=$pass;
        }
        static function all(){
            $list=[];
            $db=DB::getInstance();
            $req=$db->query('SELECT *FROM user');
            foreach ($req->fetchAll() as $item) {
                $tr = new User($item['IDUser'], $item['HoTen'], $item['Email'], $item['Password']);
                $list[]=$tr;
            }
            return $list;
        }
    }
?>