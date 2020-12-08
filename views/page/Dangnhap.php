<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="/TMTManga/assets/css/log.css">
    <title>Đăng nhập</title>
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
    </script>
</head>

<body>
    <div class="image-box">
        <img class="img1" src="/TMTManga/assets/image/image/tt1.png">
        <img class="img2" src="/TMTManga/assets/image/image/tt2.png">
        <img class="img3" src="/TMTManga/assets/image/image/tt3.png">
    </div>
    <div class="login">
        <div id="logo" class="animate__animated animate__flipInX animate__infinite animate__slow 2s"></div>
        <div class="login-form">
            <form action="?controller=page&action=Dangnhap" method="POST">
                <h1>WELCOME</h1>
                <div class="input-box">
                    <span class="fas fa-user-circle"></span>
                    <input id="username" type="number" placeholder="Nhập username" name="idUser">
                    <span class="fas fa-lock"></span>
                    <div id="err1" class="animate__animated animate__fadeOut animate__delay-2s"><i class="fas fa-exclamation"></i></div>
                    <input id="pass" type="password" placeholder="Nhập mật khẩu" name="Password">
                    <button class="btn-eye" type="button" onclick="ShowHide()">
                        <i id="eye" class="fas fa-eye-slash"></i>
                    </button>
                    <div id="err2" class="animate__animated animate__fadeOut animate__delay-2s"><i class="fas fa-exclamation"></i></div>
                </div>
                <div class="ntk"><input type="checkbox"> Nhớ tài khoản</div>
                <a href="?controller=page&action=Quenmk" class="btn-qmk">Quên mật khẩu?</a>
                <button class="btn-submit" type="submit" id="login" name="btn_dangnhap" onclick="Dangnhap()"><b>Đăng nhập</b></button><br><br>
                <div class="log-with">
                    <p>Hoặc đăng nhập với</p>
                </div>
                <div class="item">
                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="gg"><i class="fab fa-google"></i></a>
                    <a href="#" class="tw"><i class="fab fa-twitter"></i></a>
                </div><br><br><br>
                <p>Nếu không có tài khoản hãy <a href="?controller=page&action=Dangky">ĐĂNG KÍ</a></p>
            </form>
        </div>
    </div>
</body>
<?php
require_once("connect.php");
session_start(); //khai báo sử dụng session
if (isset($_POST['btn_dangnhap'])) {
    $idUser = $_POST['idUser'];
    $password = $_POST['Password'];
    if ($idUser == "" || $password == "") {
        echo '<script> 
                    document.getElementById("err1").style.display = "block";
                    document.getElementById("err2").style.display = "block";
                </script>';
    }
    for ($i = 0; $i < count($listUser); $i++) {
        $User = $listUser[$i];
        if (($User->idUser) == $idUser && ($User->password) == $password) {
            echo "vao duoc vong if";
            $_SESSION['idUser'] = $idUser; //luu idUser vao session de xu ly sau nay
            if ($User->idUser == 1) {
                header('Location: ?controller=page&action=Admin');
            } else {
                header('Location: index.php'); //chuyen huong trang den index
            }
        }
    }
}
?>

</html>