<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/TMTManga/assets/css/log.css">
    <title>Quên mật khẩu</title>
</head>

<body>
    <div class="container">
        <h1>Change Password</h1>
        <div class="progress-bar">
            <div class="step">
                <p>Email</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check">
                </div>
            </div>
            <div class="step">
                <p>Submit</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check">
                </div>
            </div>
        </div>
        <div class="form-outer">
            <form action="?controller=page&action=Quenmk" method="POST">
                <div class="page slide-page">
                    <div class="title">Thông tin Email:</div>
                    <div class="field">
                        <div class="label">Nhập email của bạn</div>
                        <input type="email" name="email">
                    </div>
                    <div class="field">
                        <button class="btnNext" type="submit" name="btnnext">Tiếp theo</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">Đặt lại mật khẩu:</div>
                    <div class="field">
                        <div class="label">Mật khẩu mới</div>
                        <input type="password" name="password">
                    </div>
                    <div class="field">
                        <div class="label">Nhập lại mật khẩu</div>
                        <input type="password" name="password1">
                    </div>
                    <div class="field btns">
                        <button class="btnPrev" name="btnprev">Trước</button>
                        <button class="btnSubmit" name="btnsubmit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
require_once("connect.php");
session_start(); //khai báo sử dụng session
if (isset($_POST['btnnext'])) {
    $email = $_POST['email'];
    for ($i = 0; $i < count($listUser); $i++) {
        $User = $listUser[$i];
        if (($User->email) == $email) {
            $_SESSION['email'] = $email; //luu idUser vao session de xu ly sau nay
            echo '<script> 
                    var slidePage = document.querySelector(".slide-page");
                    var progressText = document.querySelectorAll(".step p");
                    var progressCheck = document.querySelectorAll(".step .check");
                    var bullet = document.querySelectorAll(".step .bullet");
                    var current = 1;
        
                    slidePage.style.marginLeft = "-25%";
                    bullet[current - 1].classList.add("active");
                    progressCheck[current - 1].classList.add("active");
                    progressText[current - 1].classList.add("active");
                    current += 1;
        
               </script>';
        }
        
    }
    if (isset($_POST['btnsubmit'])){
        echo "vo";
        $password = $_POST['password'];
        $db = DB::getInstance();
        $db->query("UPDATE user SET Password = '$password' WHERE Email = '$email'");
        header('Location: index.php'); //chuyen huong trang den index
    }
}

?>
<!-- <script>
    const slidePage = document.querySelector(".slide-page");
    const btnNext = document.querySelector(".btnNext");
    const btnSubmit = document.querySelector(".btnSubmit");
    const btnPrev = document.querySelector(".btnPrev");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    let current = 1;

    btnNext.addEventListener("click", function(event) {
        slidePage.style.marginLeft = "-25%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    btnSubmit.addEventListener("click", function() {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        setTimeout(function() {
            alert("Your Form Successfully Signed up");
            location.reload();
        }, 800);
    });
    btnPrev.addEventListener("click", function(event) {
        slidePage.style.marginLeft = "0%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
</script> -->

</html>