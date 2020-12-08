<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="/TMTManga/assets/css/sign.css">
    <title>Đăng ký</title>
    <script>
        function ShowHide() {
            var a = document.getElementById("pass");
            var b = document.getElementById("eye");
            if (a.type == "password") {
                a.type = "text";
                b.className = "fas fa-eye";
            } else {
                a.type = "password";
                b.className = "fas fa-eye-slash";
            }
        }

        function ShowHide1() {
            var a = document.getElementById("pass1");
            var b = document.getElementById("eye1");
            if (a.type == "password") {
                a.type = "text";
                b.className = "fas fa-eye";
            } else {
                a.type = "password";
                b.className = "fas fa-eye-slash";
            }
        }
    </script>
</head>

<body>
    <div class="signup-form">
        <div class="animate__animated animate__fadeInDown animate__repeat-1"></div>
        <img class="img-pikachu" src="/TMTManga/assets/image/image/pi.png">
        <form action="?controller=page&action=Dangky" method="POST">
            <h1>SIGN UP</h1>
            <div class="input-box">
                <label for="hoten">Họ tên</label><input id="hoten" type="text" name="hoTen" required>
                <label for="email">Email</label><input id="email" type="email" name="email" required>
                <label for="username">Username</label><input id="username" type="number" name="idUser" required>
                <label for="pass">Mật khẩu</label><input id="pass" type="password" name="password" required>
                <button class="btn-eye" type="button" onclick="ShowHide()">
                    <i id="eye" class="fas fa-eye-slash"></i>
                </button>
                <label for="pass1">Nhập lại mật khẩu</label><input id="pass1" type="password" name="password1" required>
                <button class="btn-eye" type="button" name="btn_dangky" onclick="ShowHide1()">
                    <i id="eye1" class="fas fa-eye-slash"></i>
                </button>
            </div>
            <div class="checkbox">
                <input type="checkbox" checked> Tôi chấp nhận các <b style="color: brown;">điều khoản sử dụng</b> của website
            </div><br>
            <button class="btn-submit" type="submit" name="btn_dangky"><b>Đăng kí</b></button>
        </form>
    </div>
</body>
<?php
require_once("connect.php");
session_start(); //khai báo sử dụng session
if (isset($_POST['btn_dangky'])) {
    $hoTen = $_POST['hoTen'];
    $email = $_POST['email'];
    $idUser = $_POST['idUser'];
    $password = $_POST['password'];
    for ($i = 0; $i < count($listUser); $i++) {
        $User = $listUser[$i];
        if (($User->IDUser) == $idUser) {
            echo '<script>alert("Username đã tồn tại!")</script>';
            exit;
        } else {
            if ($_POST['password'] != $_POST['password1']) {
                echo '<script>alert("Nhập lai mật khẩu cho đúng vs nhau!")</script>';
                exit;
            } else {
                $db = DB::getInstance();
                $db->query("INSERT INTO user (IDUser, HoTen, Email, Password) VALUES ('$idUser', '$hoTen', '$email', '$password')");
                $_SESSION['idUser'] = $idUser; //luu idUser vao session de xu ly sau nay
                header('Location: index.php'); //chuyen huong trang den index
            }
        }
    }
}
?>

</html>