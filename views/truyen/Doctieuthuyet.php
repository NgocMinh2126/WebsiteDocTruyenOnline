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
    <title>Tiểu thuyết | <?php echo htmlspecialchars($truyen->tentruyen)?> </title>
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
        <div>
            <div class="main-duongdan">
                <a href="?controller=truyen&action=Tieuthuyet">
                    <?php
                        if($truyen->loaiTruyen == 0){
                            echo htmlspecialchars('Truyện tranh');
                        }else{
                            echo htmlspecialchars('Tiểu thuyết');
                        }
                    ?>
                </a>/
                <a href="?controller=truyen&action=Alltruyen$idTheLoai=<?php $theloai = $listTheLoaiTruyen[0]; echo htmlspecialchars($theloai=$idTheLoai);?>">
                    <?php
                        $theloaitruyen = $listTheLoaiTruyen[0];
                        for($i=0;$i<count($listTheLoai);$i++){
                            $theloai= $listTheLoai[$i];
                            if($theloaitruyen->idTheLoai == $theloai->idTheLoai){
                                echo htmlspecialchars($theloai->tenTheLoai);
                            }
                        }
                    ?>
                </a>/<?php echo htmlspecialchars($truyen->tenTruyen)?>
            </div>
        </div>
        <div class="main-header">
            <div class="main-header-tentruyen"><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
            <div class="main-header-chuong">Chương <?php echo htmlspecialchars($_GET["chuong"])?></div>
            <div id="navbar">
                <button id="btn-truoc"><i class="fas fa-chevron-left"></i> Chương trước</button>
                <div class="dropdown-container">
                    <div id="select-chapter"> Chương <?php $chuong=$listChuong[$_GET["chuong"]-1]; echo htmlspecialchars($chuong->STT)?> <i class="fas fa-chevron-down"></i></div>
                    <div class="content-dschuong">
                        <?php  for($i=0;$i<$truyen->soChuong;$i++){?>
                            <a class="dropdown-btn" href="?controller=truyen&action=Doctieuthuyet&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen)?>&chuong=<?php echo $i+1 ?>">Chương <?php echo $i+1 ?></a>
                        <?php } ?>
                    </div>
                </div>
                <button id="btn-sau">Chương sau <i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="phancach"></div>
        </div>
        <textarea id="upload-story" readonly>
            <?php $chuong=$listChuong[$_GET["chuong"]-1]; $link = @fopen("$chuong->link","r");
                if(!$link){
                    echo "Truyện chưa cập nhật";
                }else{
                    while(feof($link) == false){
                        echo fgetc($link);
                    }
                }
            ?>
        </textarea>
        <div id="navbar1">
                <button id="btn-truoc2"><i class="fas fa-chevron-left"></i> Chương trước</button>
                <div class="dropdown-container">
                    <div id="select-chapter"> Chương <?php $chuong=$listChuong[$_GET["chuong"]-1]; echo htmlspecialchars($chuong->STT)?> <i class="fas fa-chevron-down"></i></div>
                    <div class="content-dschuong">
                        <?php  for($i=0;$i<$truyen->soChuong;$i++){?>
                            <a class="dropdown-btn" href="?controller=truyen&action=Doctieuthuyet&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen)?>&chuong=<?php echo $i+1 ?>">Chương <?php echo $i+1 ?></a>
                        <?php } ?>
                    </div>
                </div>
                <button id="btn-sau2">Chương sau <i class="fas fa-chevron-right"></i></button>
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
        const myParam = urlParams.get('chuong');
        console.log(myParam);
        //up
        const btnPre = document.querySelector('#btn-truoc');
        const btnNext = document.querySelector('#btn-sau');
        if((parseInt(myParam) -1) < 1){
            btnPre.disabled = true;
            btnPre.style.backgroundColor = '#adddce';
            btnPre.style.color = "while";
        }
        if((parseInt(myParam) + 1) > <?php echo htmlspecialchars($truyen->soChuong)?>){
            btnNext.disabled = true;
            btnNext.style.backgroundColor = '#adddce';
            btnNext.style.color = "while";
        }
        btnPre.onclick = function() {
            window.location = "?controller=truyen&action=Doctieuthuyet&idTruyen=" + urlParams.get('idTruyen') + "&chuong=" + (parseInt(myParam) - 1 );
        }
        btnNext.onclick = function() {
            window.location = "?controller=truyen&action=Doctieuthuyet&idTruyen=" + urlParams.get('idTruyen') + "&chuong=" + (parseInt(myParam) + 1);
        }
        console.log(<?php echo $truyen->soChuong ?>);
        //down
        const btnPre2 = document.querySelector('#btn-truoc2');
        const btnNext2 = document.querySelector('#btn-sau2');
        if((parseInt(myParam) -1) < 1){
            btnPre2.disabled = true;
            btnPre2.style.backgroundColor = '#adddce';
            btnPre2.style.color = "while";
        }
        if((parseInt(myParam) + 1) > <?php echo htmlspecialchars($truyen->soChuong)?>){
            btnNext2.disabled = true;
            btnNext2.style.backgroundColor = '#adddce';
            btnNext2.style.color = "while";
        }
        btnPre2.onclick = function() {
            window.location = "?controller=truyen&action=Doctieuthuyet&idTruyen=" + urlParams.get('idTruyen') + "&chuong=" + (parseInt(myParam) - 1 );
        }
        btnNext2.onclick = function() {
            window.location = "?controller=truyen&action=Doctieuthuyet&idTruyen=" + urlParams.get('idTruyen') + "&chuong=" + (parseInt(myParam) + 1);
        }
        console.log(<?php echo $truyen->soChuong ?>);
    </script>
</body>

</html>