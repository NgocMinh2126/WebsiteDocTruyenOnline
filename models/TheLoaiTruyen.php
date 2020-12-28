<?php
class TheLoaiTruyen
{
    private $idTruyen;
    private $idTheLoai;
    function __set($key, $value)
    {
        if ($key == 'idTruyen') {
            $this->idTruyen = $value;
        } else if ($key == 'idTheLoai') {
            $this->idTheLoai = $value;
        }
    }
    function __get($key)
    {
        if ($key == 'idTruyen') {
            return $this->idTruyen;
        } else if ($key == 'idTheLoai') {
            return $this->idTheLoai;
        }
    }
    function __construct($truyen, $theloai)
    {
        $this->idTruyen = $truyen;
        $this->idTheLoai = $theloai;
    }
    static function getTheLoaiTruyen($idTruyen)
    {
        $listTheLoaiTruyen = [];
        $db = DB::getInstance();
        $query = $db->query("SELECT * FROM theloaitruyen WHERE IDTruyen=$idTruyen");
        foreach ($query->fetchAll() as $item) {
            $tlt = new TheLoaiTruyen($item['IDTruyen'], $item['IDTheLoai']);
            $listTheLoaiTruyen[] = $tlt;
        }
        return $listTheLoaiTruyen;
    }
    static function getAllTheLoaiTruyen()
    {
        $listTheLoaiTruyen = [];
        $db = DB::getInstance();
        $query = $db->query("SELECT * FROM theloaitruyen ");
        foreach ($query->fetchAll() as $item) {
            $tlt = new TheLoaiTruyen($item['IDTruyen'], $item['IDTheLoai']);
            $listTheLoaiTruyen[] = $tlt;
        }
        return $listTheLoaiTruyen;
    }
    static function InsertTheLoaiTruyen($idTruyen, $listTheLoaiTruyen)
    {
        $db = DB::getInstance();
        for ($i = 0; $i < count($listTheLoaiTruyen); $i++) {
            $theloaitruyen=$listTheLoaiTruyen[$i];
            $str = "INSERT INTO  theloaitruyen (`IDTruyen`, `IDTheLoai`) VALUES (".$idTruyen.",".$theloaitruyen.")";
            echo ($str);
            $sql = $db->query($str);
        }
    }
}
