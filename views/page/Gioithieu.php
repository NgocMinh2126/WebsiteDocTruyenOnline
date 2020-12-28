<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="/TMTManga/assets/css/Gioithieu.css">
</head>
<title>Giới thiệu</title>

<body>
    <header>
        <img src="/TMTManga/assets/image/image/mtlogo7.png" class="img-logo">
        <div class="div-namepage">MT Manga</div>
        <div class="menu-bar">
            <a href="index.php" class="menu-bar-btn">Trang chủ</a>
            <a href="?controller=truyen&action=Truyentranh" class="menu-bar-btn"> Truyện tranh</a>
            <a href="?controller=truyen&action=Tieuthuyet" class="menu-bar-btn">Tiểu thuyết</a>
        </div>
        <div class="search-bar">
            <input type="text" class="search-btn-input">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
        <div class="account-bar">
            <a href="?controller=page&action=Dangnhap" class="menu-bar-btn" id="login"">Đăng nhập</a>
        </div>
    </header>
    <script>
        document.getElementById("login").textContent = "<?php session_start();
                                                        echo $_SESSION['hoTen']; ?>";
        document.getElementById("login").setAttribute("href", "");
    </script>
    <main>
        <h1>Giới thiệu về chúng tôi</h1>
        <p>Hiện nay, có không ít các trang truyện cung cấp cho bạn thế giới đọc truyện đa dạng. Thế nhưng, nếu bạn muốn
            đắm chìm trong những câu chuyện hay nhất, hấp dẫn nhất và cập nhật thời thế
            nhất, mời bạn hãy ghé thăm web MTManga của chúng tôi để thỏa mãn đam mê đọc truyện online của mình nhé.</p>
        <p>Ngoài ra, ở đây web truyện của chúng tôi không có gì ngoài sự đáng yêu cute chờ bạn thưởng thức. ^.^</p>
        <div class="div-h2">
            <h2>Chúng tôi luôn luôn đổi mới</h2>
        </div><br>
        <div class="container">
            <div class="text1">
                <br><br><i class="fas fa-crown"></i><br><br><br>&nbsp;
                Website đọc truyện MTmanga chất lượng hàng đầu Việt Nam</div>
            <div class="overlay">
                <img src="/TMTManga/assets/image/image/img1.PNG" class="image">
            </div>
        </div>
        <div class="container">
            <div class="text2">
                <br><br><i class="fas fa-book-open"></i><br><br><br>
                &nbsp;Đa dạng các thể loại truyện từ truyện chữ cho đến truyện tranh được chọn lọc và đăng tải một cách
                kĩ lưỡng</div>
            <div class="overlay">
                <img src="/TMTManga/assets/image/image/img2.PNG" class="image">
            </div>
        </div>
        <div class="container">
            <div class="text3">
                <br><br><i class="fas fa-align-justify"></i><br><br><br>
                Khiến các bạn ấn tượng với cách trình bày rõ ràng và đẹp mắt của MTmanga</div>
            <div class="overlay">
                <img src="/TMTManga/assets/image/image/img3.gif" class="image">
            </div>
        </div>
        <div class="container">
            <div class="text4">
                <br><br><i class="fas fa-heart"></i><br><br><br>
                &nbsp;Giúp các bạn có những giây phút thư giãn cùng với những câu chuyện yêu thích</div>
            <div class="overlay">
                <img src="/TMTManga/assets/image/image/img4.jpg" class="image">
            </div>
        </div><br><br>
        <div class="div-h2">
            <h2>Các thành viên trong nhóm</h2>
        </div>
        <button class="main-slide-btn" id="pre-btn"><i class="fas fa-chevron-left"></i></button>
        <button class="main-slide-btn" id="next-btn"><i class="fas fa-chevron-right"></i></button>
        <div class="slide">
            <div class="main-slide-img">
                <p class="main-slide-a"><img src="/TMTManga/assets/image/image/tmt2.PNG" id="last-img"></p>
                <p class="main-slide-a"><img src="/TMTManga/assets/image/image/tmt3.PNG"></p>
                <p class="main-slide-a"><img src="/TMTManga/assets/image/image/tmt4.PNG"> </p>
                <p class="main-slide-a"><img src="/TMTManga/assets/image/image/tmt1.PNG"></p>
                <p class="main-slide-a"><img src="//TMTManga/assets/image/image/tmt2.PNG"></p>
                <p class="main-slide-a"><img src="/TMTManga/assets/image/image/tmt3.PNG" id="first-img"></p>
            </div>
        </div>
        <p class="animate__bounceIn">Mời các bạn đọc và ủng hộ <a href="index.php">website MTManga</a> bằng cách giới
            thiệu đến bạn bè. Chúc các bạn có những giây phút đọc truyện
            thư giãn thật bổ ích!!!</p>
    </main>
    <footer>
        <div class="footer-lienhe">
            <a href="#" class="footer-lienhe-btn">
                <i class="fab fa-facebook"></i>
                <span class="footer-lienhe-btn-tooltip">Facebook</span>
            </a>
            <a href="#" class="footer-lienhe-btn">
                <i class="fab fa-instagram"></i>
                <span class="footer-lienhe-btn-tooltip">Instagram</span>
            </a>
            <a href="#" class="footer-lienhe-btn">
                <i class="fab fa-twitter"></i>
                <span class="footer-lienhe-btn-tooltip">Twitter</span>
            </a>
            <a href="#" class="footer-lienhe-btn">
                <i class="fab fa-youtube"></i>
                <span class="footer-lienhe-btn-tooltip">Youtube</span>
            </a>
        </div>
        <div class="footer-menu">
            <a href="?controller=page&action=Lienhe" class="footer-menu-btn">Liên hệ</a>
            <a href="?controller=page&action=Gioithieu" class="footer-menu-btn">Giới thiệu</a>
            <a href="?controller=page&action=Trogiup" class="footer-menu-btn">Trợ giúp</a>
            <a href="?controller=page&action=Chinhsach" class="footer-menu-btn-special">Chính sách và quyền riêng tư</a>
        </div>
        <div class="footer-banquyen">
            © 2020 Bản quyền thuộc về Team TMT - MT Manga
        </div>
    </footer>
    <script src="/TMTManga/assets/javascript/MTmanga.js"></script>
</body>

</html>