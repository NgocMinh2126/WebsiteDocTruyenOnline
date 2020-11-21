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
    <link href="/TMTManga/assets/css/MTmanga.css" rel="stylesheet">
    <title>MT Manga</title>
</head>

<body>
    <header>
        <img src="/TMTManga/assets/image/image/mtlogo7.png" class="img-logo">
        <div class="div-namepage">MT Manga</div>
        <div class="menu-bar">
            <a href="index.php" class="menu-bar-btn">Trang chủ</a>
            <a href="Truyentranh.php" class="menu-bar-btn"> Truyện tranh</a>
            <a href="Tieuthuyet.php" class="menu-bar-btn">Tiểu thuyết</a>
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
        <div class="main-slide">
            <div class="left-slide">
                <div class="left-slide-banner-title">Mới cập nhật</div>
                <div class="new-banner">
                    <div class="new-banner-chapter">Chương 20</div>
                    <a href="#" class="new-banner-img"><img src="/TMTManga/assets/image/imgBanner/banner7.jpg"></a>
                    <div class="new-banner-name">Tổng tài tại thượng</div>
                </div>
                <div class="new-banner">
                    <div class="new-banner-chapter">Chương 45</div>
                    <a href="#" class="new-banner-img"><img src="/TMTManga/assets/image/imgBanner/bannerTraihusitinh.png"></a>
                    <div class="new-banner-name">Trai hư si tình</div>
                </div>
            </div>
            <div class="slide">
                <button class="main-slide-btn" id="pre-btn"><i class="fas fa-arrow-left"></i></button>
                <button class="main-slide-btn" id="next-btn"><i class="fas fa-arrow-right"></i></button>
                <div class="main-slide-img">
                    <a href="#" class="main-slide-a"><img src="/TMTManga/assets/image/imgBanner/sliderTiendetrove.PNG" id="last-img"></a>
                    <a href="#" class="main-slide-a"><img src="/TMTManga/assets/image/imgBanner/sliderBadaotongtaimuonduocom.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="/TMTManga/assets/image/imgBanner/sliderBonvuongphicothandang.PNG"> </a>
                    <a href="#" class="main-slide-a"><img src="/TMTManga/assets/image/imgBanner/sliderTaxuyenkhongthanhhoanghaudocac.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="/TMTManga/assets/image/imgBanner/sliderNguoiphunubiboroi.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="/TMTManga/assets/image/imgBanner/sliderBobimsuacuatienma.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="/TMTManga/assets/image/imgBanner/sliderTiendetrove.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="/TMTManga/assets/image/imgBanner/sliderBadaotongtaimuonduocom.PNG" id="first-img"></a>
                </div>
            </div>
            <div class="right-slide">
                <div class="right-slide-banner">
                    <div class="right-slide-banner-title">Mới cập nhật</div>
                    <div class="new-banner">
                        <div class="new-banner-chapter">Chương 20</div>
                        <a href="#" class="new-banner-img"><img src="/TMTManga/assets/image/imgBanner/banner8.jpg"></a>
                        <div class="new-banner-name">Mẫu thân ta không dễ chọc</div>
                    </div>
                    <div class="new-banner">
                        <div class="new-banner-chapter">Chương 45</div>
                        <a href="#" class="new-banner-img"><img src="/TMTManga/assets/image/imgBanner/banner3.png"></a>
                        <div class="new-banner-name">Hào môn thiên giới tiền thê</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-dstruyen">
            <div class="main-dstruyen-container">
                <div class="main-dstruyen-title">Hot nhất- Truyện tranh</div>
                <a href="#" class="xemthem-btn">Xem thêm <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="main-dstruyen-detail">
                <?php for ($i = 0; $i < 10; $i++) {
                    $Truyen = $listTruyenTranh[$i] ?>
                    <a href="#" class="main-dstruyen-detail-a">
                        <img src="<?php echo htmlspecialchars($Truyen->anhBia) ?>" class="main-dstruyen-img">
                        <div class="main-dstruyen-detail-tentruyen"><?php echo htmlspecialchars($Truyen->tenTruyen) ?></div>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="main-sukien">
            <div class="main-dstruyen-title">Sự kiện</div>
            <button class="main-sukien-btn" id="main-sukien-left-btn"><i class="fas fa-chevron-left"></i></button>
            <button class="main-sukien-btn" id="main-sukien-right-btn"><i class="fas fa-chevron-right"></i></button>
            <div class="main-sukien-slide">
                <a href="#" class="main-sukien-slide-img"><img src="/TMTManga/assets/image/imgBanner/bannersukiennoel.jpg" id="skien-last"></a>
                <a href="#" class="main-sukien-slide-img"><img src="/TMTManga/assets/image/imgBanner/bannersinhnhat.jpg"></a>
                <a href="#" class="main-sukien-slide-img"><img src="/TMTManga/assets/image/imgBanner/bannersukienthiviet.jpg"></a>
                <a href="#" class="main-sukien-slide-img"><img src="/TMTManga/assets/image/imgBanner/bannersukiennoel.jpg"></a>
                <a href="#" class="main-sukien-slide-img"><img src="/TMTManga/assets/image/imgBanner/bannersinhnhat.jpg" id="skien-first"></a>
            </div>
        </div>
        <div class="main-dstruyen">
            <div class="main-dstruyen-container">
                <div class="main-dstruyen-title">Tiểu thuyết siêu hot</div>
                <a href="#" class="xemthem-btn">Xem thêm <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="main-dstruyen-detail">
                <?php for ($i = 0; $i < 10; $i++) {
                    $Truyen = $listTieuThuyet[$i] ?>
                    <a href="#" class="main-dstruyen-detail-a">
                        <img src="<?php echo htmlspecialchars($Truyen->anhBia) ?>" class="main-dstruyen-img">
                        <div class="main-dstruyen-detail-tentruyen"><?php echo htmlspecialchars($Truyen->tenTruyen) ?></div>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="main-moicapnhat">
            <div class="main-moicapnhat-content">
                <div class="main-moicapnhat-content-title"><i class="fas fa-star"></i>Ra mắt gần đây</div>
                <div class="main-moicapnhat-container">
                    <?php for ($i = 0; $i < 6; $i++) {
                        $truyenMoi = $listTruyenMoi[$i] ?>
                        <div class="container-flex">
                            <a href="#" class="detail-truyen-img"><img src="<?php echo htmlspecialchars($truyenMoi->anhBia) ?>"></a>
                            <div class="container-flex-column">
                                <a href="#" class="detail-truyen-name"><?php echo htmlspecialchars($truyenMoi->tenTruyen) ?></a>
                                <div class="detail-truyen-info">
                                    <i class="fas fa-calendar"></i>
                                    Ngày ra mắt: <?php echo htmlspecialchars($truyenMoi->ngayDang) ?>
                                </div>
                                <div class="detail-truyen-rating">
                                    <i class="fas fa-thumbs-up"></i>
                                    <?php echo htmlspecialchars($truyenMoi->luotLike) ?>
                                </div>
                                <div class="detail-truyen-info">
                                    <i class="fas fa-edit"></i>
                                    Cập nhật đến: Chương <?php echo htmlspecialchars($truyenMoi->soChuong) ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="main-moicapnhat-content-btn">
                    <a href="#" class="xemthem-btn">Xem thêm <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="main-moicapnhat-topic">
                <div class="theloai-title">Thể loại</div>
                <div class="theloai">
                    <div class="theloai-container-flex-column">
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Ngôn tình</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Hài hước</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Cổ đại</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Xuyên không</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Học đường</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Tổng tài</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Showbiz</a>
                    </div>
                    <div class="theloai-container-flex-column">
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Trinh thám</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Kiếm hiệp</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Viễn tưởng</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Kinh dị</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Đã full</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Cập nhật hôm nay</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Mới nhất</a>
                    </div>
                </div>
                <div class="theloai-title">Giới thiệu</div>
                <div class="gioithieu-container-flex">
                    <?php for ($i = 6; $i < 8; $i++) {
                        $truyenMoi = $listTruyenMoi[$i] ?>
                        <div class="gioithieu-detail">
                            <a href="#" class="gioithieu-detail-img"><img src="<?php echo htmlspecialchars($truyenMoi->anhBia) ?>"></a>
                            <div class="theloai-container-flex-column">
                                <a href="" class="gioithieu-detail-tentruyen"><?php echo htmlspecialchars($truyenMoi->tenTruyen) ?></a>
                                <div class="gioithieu-detail-theloai"><?php if ($truyenMoi->loaiTruyen == 0) {
                                                                            echo htmlspecialchars('Truyện tranh');
                                                                        } else {
                                                                            echo htmlspecialchars('Tiểu thuyết');
                                                                        } ?></div>
                                <div class="gioithieu-detail-tacgia">
                                    <i class="fas fa-user-ninja"></i> Tác giả:
                                    <?php for ($j = 0; $j < count($listTacGia); $j++) {
                                        $tacGia = $listTacGia[$j];
                                        if ($truyenMoi->idTacGia == $tacGia->idTacGia) {
                                            echo htmlspecialchars($tacGia->tenTacGia);
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="detail-truyen-rating">
                                    <i class="fas fa-thumbs-up"></i>
                                    <?php echo htmlspecialchars($truyenMoi->luotLike) ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
            <a href="#" class="footer-menu-btn">Liên hệ</a>
            <a href="#" class="footer-menu-btn">Giới thiệu</a>
            <a href="#" class="footer-menu-btn">Trợ giúp</a>
            <a href="#" class="footer-menu-btn-special">Chính sách và quyền riêng tư</a>
        </div>
        <div class="footer-banquyen">
            © 2020 Bản quyền thuộc về Team TMT - MT Manga
        </div>
    </footer>
    <script src="/TMTManga/assets/javascript/MTmanga.js"></script>
</body>

</html>