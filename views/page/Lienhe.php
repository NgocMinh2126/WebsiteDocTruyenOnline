<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/TMTManga/assets/css/Lienhe.css">
    <title>Liên hệ</title>
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
            <input type="text" class="search-btn-input">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
        <div class="account-bar">
            <a href="?controller=page&action=Dangnhap" class="menu-bar-btn">Đăng nhập</a>
        </div>
    </header>
    <main>
        <div class="main-lienhe">
            <div class="form-lienhe">
                <h1>Liên hệ</h1>
                <form>
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" id="contact-name" placeholder="Tên của bạn">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope-open"></i>
                        <input class="form-group__input" type="email" id="contact-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-comments"></i>
                        <select>
                            <option>Góp ý</option>
                            <option>Báo lỗi</option>
                            <option>Khác</option>
                        </select>
                    </div>
                        <textarea placeholder=" Nội dung"></textarea>
                        <button type="submit" class="btn-submit">Gửi</button>
                </form>
            </div>
            <div class="info-lienhe">
                <i class="fas fa-info-circle"></i>
                <h3>Thông tin liên hệ</h3>
                <b>MT Manga</b><br>
                <b>Email: </b><a href= "mailto:18521104@gm.uit.edu.vn">18521104@gm.uit.edu.vn</a><br>
                &emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;<a href= "mailto:18521622@gm.uit.edu.vn" id="a-mssv">18521622@gm.uit.edu.vn</a><br>
                &emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;<a href= "mailto:18521463@gm.uit.edu.vn" id="a-mssv">18521463@gm.uit.edu.vn</a><br>
                <b>Phone:</b> 0392808994<br>&emsp;&emsp;&emsp;&nbsp;&nbsp;0822365666<br>&emsp;&emsp;&emsp;&nbsp;&nbsp;0338805165
                <p>Bọn mình giải đáp thông tin nhanh nhất qua điện thoại, giải quyết cụ thể nhất qua email.
                <br>Nếu cần hỗ trợ, các bạn cứ theo các thông tin trên, cám ơn rất nhiều ^.^</p>
            </div>
        </div>
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
</body>

</html>