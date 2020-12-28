<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b3f16036e.js" crossorigin="anonymous"></script>
    <link href="/TMTManga/assets/css/Truyendetail.css" rel="stylesheet">
    <title><?php echo htmlspecialchars($truyen->tenTruyen) ?></title>
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
            <input type="text" class="search-btn-input" name="search-input" onkeypress="RunSearchByEnterKey(event)">
            <a class="search-btn"><i class="fas fa-search"></i></a>
        </div>
        <div class="account-bar">
            <a href="?controller=page&action=Dangnhap" class="menu-bar-btn" id="login"">Đăng nhập</a>
        </div>
    </header>
    <script>
        document.getElementById(" login").textContent="<?php session_start();
                                                        echo $_SESSION['hoTen']; ?>" ; document.getElementById("login").setAttribute("href", "" ); </script> <main>
                <div class="main-duongdan">
                    <a href="?controller=truyen&action=<?php if ($truyen->loaiTruyen == 0) {
                                                            echo htmlspecialchars('Truyentranh');
                                                        } else {
                                                            echo htmlspecialchars('Tieuthuyet');
                                                        } ?>"><?php if ($truyen->loaiTruyen == 0) {
                                                                echo htmlspecialchars('Truyện tranh');
                                                            } else {
                                                                echo htmlspecialchars('Tiểu thuyết');
                                                            } ?>
                    </a>/
                    <a href="?controller=truyen&action=Alltruyen"><?php $theloaitruyen = $listTheLoaiTruyen[0];
                                                                    for ($i = 0; $i < count($listTheLoai); $i++) {
                                                                        $theloai = $listTheLoai[$i];
                                                                        if ($theloai->idTheLoai == $theloaitruyen->idTheLoai) {
                                                                            echo htmlspecialchars($theloai->tenTheLoai);
                                                                        }
                                                                    } ?>
                    </a>/<?php echo htmlspecialchars($truyen->tenTruyen) ?>
                </div>
                <div class="main-detail">
                    <div class="anh-tentruyen">
                        <img src="<?php echo htmlspecialchars($truyen->anhBia) ?>">
                        <div><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
                    </div>
                    <div class="main-overview">
                        <div class="main-overview-like">
                            <i class="fas fa-thumbs-up"></i>
                            <?php echo htmlspecialchars($truyen->luotLike) ?>
                        </div>
                        <div class="main-overview-flex">
                            <div class="main-overview-title">Tác giả</div>
                            <div class="main-overview-info" id="tacgia">
                                <?php for ($i = 0; $i < count($listTacGia); $i++) {
                                    $tg = $listTacGia[$i];
                                    if ($truyen->idTacGia == $tg->idTacGia) {
                                        echo htmlspecialchars($tg->tenTacGia);
                                    }
                                } ?>
                            </div>
                        </div>
                        <div class="main-overview-flex">
                            <div class="main-overview-title">Thể loại</div>
                            <div class="main-overview-info" id="theloai">
                                <?php for ($i = 0; $i < count($listTheLoaiTruyen); $i++) {
                                    $theloaitruyen = $listTheLoaiTruyen[$i];
                                    for ($j = 0; $j < count($listTheLoai); $j++) {
                                        $theloai = $listTheLoai[$j];
                                        if ($theloaitruyen->idTheLoai == $theloai->idTheLoai) {
                                            echo htmlspecialchars($theloai->tenTheLoai);
                                            echo ('  ');
                                        }
                                    }
                                } ?>
                            </div>
                        </div>
                        <div class="main-overview-flex">
                            <div class="main-overview-title">Tình trạng</div>
                            <div class="main-overview-info" id="tinhtrang">
                                <?php echo htmlspecialchars($truyen->tinhTrang) ?>
                            </div>
                        </div>
                        <div class="main-overview-flex">
                            <div class="main-overview-title">Ngày xuất bản</div>
                            <div class="main-overview-info" id="namxb">
                                <?php echo htmlspecialchars($truyen->ngayDang) ?>
                            </div>
                        </div>
                        <div class="main-overview-flex">
                            <div class="main-overview-title">Số chương</div>
                            <div class="main-overview-info" id="sochuong">
                                <?php echo htmlspecialchars($truyen->soChuong) ?>
                            </div>
                        </div>
                        <div class="main-overview-btn">
                            <a href="?controller=truyen&action=<?php if ($truyen->loaiTruyen == 0) {
                                                                    echo htmlspecialchars('Doctruyentranh');
                                                                } else {
                                                                    echo htmlspecialchars('Doctieuthuyet');
                                                                } ?>&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen) ?>&chuong=1">Đọc chương 1</a>
                        </div>
                    </div>
                    <div class="main-summary">
                        <div class="main-summary-title"><i class="fas fa-pen-alt"></i>Giới thiệu</div>
                        <p class="main-summary-noidung">
                            <?php $moTa = @fopen("$truyen->moTa", "r");
                            if (!$moTa) {
                                echo "Không load được phần giới thiệu";
                            } else {
                                while (feof($moTa) == false) {
                                    echo fgetc($moTa);
                                }
                            } ?>
                        </p>
                        <button id="summary-xemthem-btn">Xem thêm <i class="fas fa-chevron-down"></i></button>
                    </div>
                </div>
                <div class="main-morong">
                    <div class="main-morong-dschuong">
                        <div class="main-morong-title">
                            <i class="fas fa-star-and-crescent"></i>
                            Danh sách chương
                            <button class="sapxepchuong-btn"><i class="fas fa-sort"></i></button>
                        </div>
                        <div class="main-morong-chuong-container">
                            <?php for ($i = 0; $i < $truyen->soChuong; $i++) {
                                $chuong = $listChuong[$i] ?>
                                <div class="main-morong-chuong">
                                    <div class="chuong-contain">
                                        <a href="?controller=truyen&action=<?php if ($truyen->loaiTruyen == 0) {
                                                                                echo htmlspecialchars('Doctruyentranh');
                                                                            } else {
                                                                                echo htmlspecialchars('Doctieuthuyet');
                                                                            } ?>&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen) ?>&chuong=<?php echo $i + 1 ?>">Chương <?php echo $i + 1 ?></a>
                                        <div><?php echo htmlspecialchars($chuong->ngayThem) ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="main-morong-theloai">
                        <div class="main-morong-theloai-title">Thể loại</div>
                        <div class="main-morong-theloai-container">
                            <?php $socot = 1;
                            if (count($listTheLoai) > 7) {
                                $sl = count($listTheLoai);
                                if ($sl % 7 == 0) {
                                    $socot = $sl / 7;
                                } else {
                                    $socot = intval($sl / 7) + 1;
                                }
                                for ($i = 0; $i < $socot - 1; $i++) {
                                    $min = ($i * 7);
                                    $max = ($i + 1) * 7; ?>
                                    <div class="main-morong-theloai-detail">
                                        <?php for ($j = $min; $j < $max; $j++) {
                                            $theloai = $listTheLoai[$j]; ?>
                                            <a href="?controller=truyen&action=Alltruyen&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai) ?>" class="theloai-btn">
                                                <i class="fas fa-caret-right"></i> <?php echo htmlspecialchars($theloai->tenTheLoai) ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                <?php }
                                $min = ($socot - 1) * 7; ?>
                                <div class="main-morong-theloai-detail">
                                    <?php for ($i = $min; $i < $sl; $i++) {
                                        $theloai = $listTheLoai[$i]; ?>
                                        <a href="?controller=truyen&action=Alltruyen&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai) ?>" class="theloai-btn">
                                            <i class="fas fa-caret-right"></i> <?php echo htmlspecialchars($theloai->tenTheLoai) ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } else { ?>
                                <div class="main-morong-theloai-detail">
                                    <?php for ($i = $min; $i < $sl; $i++) {
                                        $theloai = $listTheLoai[$i]; ?>
                                        <a href="?controller=truyen&action=Alltruyen&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai) ?>" class="theloai-btn">
                                            <i class="fas fa-caret-right"></i> <?php echo htmlspecialchars($theloai->tenTheLoai) ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
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
        <script src="/TMTManga/assets/javascript/Truyendetail.js"></script>
        <script>
            const search_btn = document.querySelector(".search-btn");
            var input = document.querySelector(".search-btn-input");
            search_btn.addEventListener('click', function() {
                var text = input.value;
                console.log(text);
                var url = "?controller=truyen&action=Search&search=" + text;
                search_btn.setAttribute('href', url);
            })

            function RunSearchByEnterKey(e) {
                if (e.keyCode == 13) {
                    var text = input.value;
                    if (text == '') {
                        console.log("ko co gi het");
                        alert("Vui lòng điền tên truyện");
                    } else {
                        console.log(text);
                        var url = "?controller=truyen&action=Search&search=" + text;
                        window.location = url;
                    }
                }
            }
        </script>
</body>