<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/TMTManga/assets/css/manga-story.css">
    <title>Tiểu thuyết | </title>
</head>

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
            <input type="text" class="search-btn-input" name="search-input">
            <a class="search-btn" ><i class="fas fa-search"></i></a>
        </div>
        <div class="account-bar">
            <a href="" class="menu-bar-btn">Đăng nhập</a>
        </div>
    </header>
    <main>
        <div>
            <div class="main-duongdan">
                <a href="#">Tiểu thuyết</a>/
                <a href="#">Thể loại</a>/Tên truyện
            </div>
        </div>
        <div class="main-header">
            <div class="main-header-tentruyen">Tên truyện</div>
            <div class="main-header-chuong">Chương 2</div>
            <div id="navbar">
                <a href="#" id="btn-truoc"><i class="fas fa-chevron-left"></i> Chương trước</a>
                <a class="dschuong">
                    <select id="select-chapter">
                        <option selected="selected" value="1">Chapter1</option>
                        <option value="2">Chapter2</option>
                    </select>
                </a>
                <a href="#" id="btn-sau">Chương sau <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="phancach"></div>
        </div>
        <textarea id="upload-story" readonly></textarea>
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
            <a href="#" class="footer-menu-btn">Liên hệ</a>
            <a href="#" class="footer-menu-btn">Giới thiệu</a>
            <a href="#" class="footer-menu-btn">Trợ giúp</a>
            <a href="#" class="footer-menu-btn-special">Chính sách và quyền riêng tư</a>
        </div>
        <div class="footer-banquyen">
            © 2020 Bản quyền thuộc về Team TMT - MT Manga
        </div>
    </footer>
    <script>
        const search_btn= document.querySelector(".search-btn");
        var input= document.querySelector(".search-btn-input");
        search_btn.addEventListener('click',function(){
            var text= input.value;
            console.log(text);
            var url="?controller=truyen&action=Search&search="+text;
            search_btn.setAttribute('href',url);
        })
    </script>
</body>

</html>