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
    <link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link href="/TMTManga/assets/css/manga-story.css" rel="stylesheet">
    <title>Truyện tranh |</title>
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
            <a href="" class="menu-bar-btn">Đăng nhập</a>
        </div>
    </header>
    <main>
        <div>
            <div class="main-duongdan">
                <a href="?controller=truyen&action=Truyentranh"><?php if ($truyen->loaiTruyen == 0) {
                                echo htmlspecialchars("Truyện tranh");
                            } else {
                                echo htmlspecialchars("Tiểu thuyết");
                            }
                            ?></a>/
                <a href="?controller=truyen&action=Alltruyen&idTheLoai=<?php $theloai=$listTheLoaiTruyen[0]; echo htmlspecialchars($theloai->idTheLoai) ?>"><?php
                            $theloaitruyen = $listTheLoaiTruyen[0];
                            for ($i = 0; $i < count($listTheLoai); $i++) {
                                $theloai = $listTheLoai[$i];
                                if ($theloaitruyen->idTheLoai == $theloai->idTheLoai) {
                                    echo htmlspecialchars($theloai->tenTheLoai);
                                }
                            }
                            ?></a>/<?php echo htmlspecialchars($truyen->tenTruyen) ?>
            </div>
        </div>
        <div class="main-header">
            <div class="main-header-tentruyen"><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
            <div class="main-header-chuong">Chương <?php echo htmlspecialchars($_GET["chuong"]) ?></div>
            <div id="navbar">
                <button id="btn-truoc"><i class="fas fa-chevron-left"></i> Chương trước</button>
                <div class="dropdown-container">
                    <div id="select-chapter"> Chương <?php echo htmlspecialchars($_GET["chuong"]) ?> <i class="fas fa-chevron-down"></i></div>
                    <div class="content-dschuong">
                        <?php for($i=0;$i<$truyen->soChuong;$i++){?>
                            <a class="dropdown-btn" href="?controller=truyen&action=Doctruyentranh&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen) ?>&chuong=<?php echo $i+1?>">Chương <?php echo $i+1?></a>
                       <?php } ?>
                        
                    </div>
                </div>
                <button id="btn-sau">Chương sau <i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="phancach"></div>
        </div>
        <div id="upload-image">
            <?php $directory = "C:/xampp/htdocs/TMTManga/assets/truyentranh/" . $truyen->idTruyen . "/Chuong" . htmlspecialchars($_GET["chuong"]) . "/";
            $imgcount = 0;
            $fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
            $img = glob($directory . "*.PNG");
            if ($img) {
                $imgcount = count($img);
            }
            for ($i = 1; $i <= $imgcount; $i++) { ?>
                <img src="/TMTManga/assets/truyentranh/<?php echo htmlspecialchars($truyen->idTruyen) ?>/Chuong<?php echo htmlspecialchars($_GET["chuong"]) ?>/<?php echo $i ?>.png">
            <?php } ?>
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
        const urlParams = new URLSearchParams(window.location.search);
        const myParam = urlParams.get('chuong'); // == $_GET['chuong']
        console.log(myParam);
        const btnNext = document.querySelector('#btn-sau');
        const btnPre = document.querySelector('#btn-truoc');
        if ((parseInt(myParam) + 1) > <?php echo htmlspecialchars($truyen->soChuong) ?>) {
            btnNext.disabled = true;
            btnNext.style.backgroundColor = '#adddce';
            btnNext.style.color = "white";
        }
        if ((parseInt(myParam) - 1) < 1) {
            btnPre.disabled = true;
            btnPre.style.backgroundColor = '#adddce';
            btnPre.style.color = "white";
        }
        btnNext.onclick = function() {
            window.location = "?controller=truyen&action=Doctruyentranh&idTruyen=" + urlParams.get('idTruyen') + "&chuong=" + (parseInt(myParam) + 1);
        }
        btnPre.onclick = function() {
            window.location = "?controller=truyen&action=Doctruyentranh&idTruyen=" + urlParams.get('idTruyen') + "&chuong=" + (parseInt(myParam) - 1);
        }
        console.log(<?php echo $truyen->soChuong ?>);
    </script>
</body>

</html>