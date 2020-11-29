<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/TMTManga/assets/css/log.css">        
    <title>Đăng nhập</title>
    <script>
        function ShowHide() {
            var a = document.getElementById("pass");
            var b = document.getElementById("eye");
            if (a.type == "password") {
                a.type = "text";
                b.className = "fas fa-eye";
            }
            else {
                a.type = "password";
                b.className = "fas fa-eye-slash";
            }
        }
    </script>
</head>
<body>
    <div class="image-box">
        <img class="img1" src="/image/tt1.png">
        <img class="img2" src="/image/tt2.png">
        <img class="img3" src="/image/tt3.png">
    </div>
    <div class="login">
        <div class="animate__animated animate__flipInX animate__repeat-2 animate__slow 2s"></div>
        <div class="login-form">
            <form>
                <h1>WELCOME</h1>
                <div class="input-box">
                    <span class="fas fa-user-circle"></span>
                    <input id="username" type="text" placeholder="Nhập username">
                    <span class="fas fa-lock"></span>
                    <div id="err1"><i class="fas fa-exclamation"></i></div>
                    <input type="password" id="pass" placeholder="Nhập mật khẩu">
                    <button class="btn-eye" type="button" onclick="ShowHide()">
                        <i id="eye" class="fas fa-eye-slash"></i>
                    </button>
                    <div id="err2"><i class="fas fa-exclamation"></i></div>
                </div>
                <div class="ntk"><input type="checkbox"> Nhớ tài khoản</div>
                <a href="#" class="qmk">Quên mật khẩu?</a>
                <button class="btn-submit" type="submit" id="login"><b>Đăng nhập</b></button><br><br>
                <div class="log-with">
                    <p>Hoặc đăng nhập với</p>
                </div>
                <div class="item">
                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="gg"><i class="fab fa-google"></i></a>
                    <a href="#" class="tw"><i class="fab fa-twitter"></i></a>
                </div><br><br><br>
                <p>Nếu không có tài khoản hãy <a href="/sign.html">ĐĂNG KÍ</a></p>
            </form>
        </div>
    </div>
</body>

</html>