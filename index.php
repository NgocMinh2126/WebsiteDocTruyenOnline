<?php
    $conn=mysqli_connect('localhost','ngocminh2621','1','tmtmanga');
    if(!$conn){
        echo "fail to connect".mysqli_connect_error();
    }else{
        $sqlTruyen="SELECT * FROM Truyen where LoaiTruyen='0'";
        $resultTruyen=mysqli_query($conn,$sqlTruyen);
        $Truyenarr=mysqli_fetch_all($resultTruyen,MYSQLI_ASSOC);
        mysqli_free_result($resultTruyen);
        mysqli_close($conn);
    }
?>

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
    <link href="./css/MTmanga.css" rel="stylesheet">
    <title>MT Manga</title>
</head>
<body>
    <header>
        <img src="./image/mtlogo7.png" class="img-logo">
        <div class="div-namepage">MT Manga</div>
        <div class="menu-bar">
            <a href="MTmanga.html" class="menu-bar-btn">Trang chủ</a>
            <a href="Truyentranh.html" class="menu-bar-btn"> Truyện tranh</a>
            <a href="Tieuthuyet.html" class="menu-bar-btn">Tiểu thuyết</a>
            <a href="" class="menu-bar-btn">Sáng tác</a>
            <a href="" class="menu-bar-btn">Nạp xu</a>
        </div>
        <div class="search-bar">
             <input type="text" class="search-btn-input">
             <button class="search-btn" ><i class="fas fa-search"></i></button>
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
                    <a href="#" class="new-banner-img"><img src="./imgBanner/banner7.jpg"></a>
                    <div class="new-banner-name">Tổng tài tại thượng</div>
                </div>
                <div class="new-banner">
                    <div class="new-banner-chapter">Chương 45</div>
                    <a href="#" class="new-banner-img"><img src="./imgBanner/bannerTraihusitinh.png"></a>
                    <div class="new-banner-name">Trai hư si tình</div>
                </div>
            </div>
            <div class="slide">
                <button class="main-slide-btn" id="pre-btn"><i class="fas fa-arrow-left"></i></button>
                <button class="main-slide-btn" id="next-btn"><i class="fas fa-arrow-right"></i></button>
                <div class="main-slide-img">
                    <a href="#" class="main-slide-a"><img src="./imgBanner/sliderTiendetrove.PNG" id="last-img"></a>
                    <a href="#" class="main-slide-a"><img src="./imgBanner/sliderBadaotongtaimuonduocom.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="./imgBanner/sliderBonvuongphicothandang.PNG">  </a>
                    <a href="#" class="main-slide-a"><img src="./imgBanner/sliderTaxuyenkhongthanhhoanghaudocac.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="./imgBanner/sliderNguoiphunubiboroi.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="./imgBanner/sliderBobimsuacuatienma.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="./imgBanner/sliderTiendetrove.PNG"></a>
                    <a href="#" class="main-slide-a"><img src="./imgBanner/sliderBadaotongtaimuonduocom.PNG" id="first-img"></a>
                </div>
            </div>
            <div class="right-slide">
                <div class="right-slide-banner">
                    <div class="right-slide-banner-title">Mới cập nhật</div>
                    <div class="new-banner">
                        <div class="new-banner-chapter">Chương 20</div>
                        <a href="#" class="new-banner-img"><img src="./imgBanner/banner8.jpg"></a>
                        <div class="new-banner-name">Mẫu thân ta không dễ chọc</div>
                    </div>
                    <div class="new-banner">
                        <div class="new-banner-chapter">Chương 45</div>
                        <a href="#" class="new-banner-img"><img src="./imgBanner/banner3.png"></a>
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
                <?php foreach ($Truyenarr as $Truyen) {?>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="<?php echo htmlspecialchars($Truyen['AnhBia'])?>" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen"><?php echo htmlspecialchars($Truyen['TenTruyen'])?></div>
                </a>
                <?php } ?>                
            </div>
        </div>        
        <div class="main-sukien">
            <div class="main-dstruyen-title">Sự kiện</div>
            <button class="main-sukien-btn"id="main-sukien-left-btn"><i class="fas fa-chevron-left"></i></button>
            <button class="main-sukien-btn"id="main-sukien-right-btn"><i class="fas fa-chevron-right"></i></button>
            <div class="main-sukien-slide">
                <a href="#" class="main-sukien-slide-img"><img src="./imgBanner/bannersukiennoel.jpg" id="skien-last"></a>
                <a href="#" class="main-sukien-slide-img"><img src="./imgBanner/bannersinhnhat.jpg"></a>
                <a href="#" class="main-sukien-slide-img"><img src="./imgBanner/bannersukienthiviet.jpg"></a>
                <a href="#" class="main-sukien-slide-img"><img src="./imgBanner/bannersukiennoel.jpg"></a>
                <a href="#" class="main-sukien-slide-img"><img src="./imgBanner/bannersinhnhat.jpg" id="skien-first"></a>
            </div>
        </div>
        <div class="main-dstruyen">
            <div class="main-dstruyen-container">
                <div class="main-dstruyen-title">Tiểu thuyết siêu hot</div>
                <a href="#" class="xemthem-btn">Xem thêm <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="main-dstruyen-detail">
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgTuyetthemynhan.PNG" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Tuyệt thế mỹ nhân</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgThaituphithanbi.PNG" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Thái tử phi thần bí</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgViemgapanh.jpg" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Vì em gặp anh</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgKichunhatabenhkhongnhe.PNG" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Kí chủ ta bệnh không nhẹ</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgMitinh.PNG" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Nghề làm phi</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgDungxememlakexenvaocuoctinhcuaanhvacoay.PNG" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Đừng coi em là kẻ xen vào cuộc tình của anh và cô ấy</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgThaituphithanbi.PNG" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen" >Thái tử phi thần bí</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgYeuemtucainhindautien.jpg" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Yêu em từ cái nhìn đầu tiên</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgAnhsangtrang.PNG" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Ánh sáng trắng</div>
                </a>
                <a href="#" class="main-dstruyen-detail-a">
                    <img src="./imgTieuthuyet/imgCovosieusao.PNG" class="main-dstruyen-img">
                    <div class="main-dstruyen-detail-tentruyen">Cô vợ siêu sao</div>
                </a>
            </div>
        </div>
        <div class="main-moicapnhat">
            <div class="main-moicapnhat-content">
                <div class="main-moicapnhat-content-title"><i class="fas fa-star"></i>Ra mắt gần đây</div>
                <div class="main-moicapnhat-content-detail">
                    <div class="container-flex">
                        <a href="#" class="detail-truyen-img"><img src="./imgTruyen/imgHaomonthiengioitienthe.PNG"></a>
                        <div class="container-flex-column">
                            <a href="#" class="detail-truyen-name">Bồ công anh trong gió</a>
                            <div class="detail-truyen-info">
                                <i class="fas fa-calendar"></i>
                                Ngày ra mắt: 2/1/2021
                            </div>
                            <div class="detail-truyen-rating">
                                <i class="fas fa-thumbs-up"></i>
                                11500
                            </div>
                            <div class="detail-truyen-info">
                                <i class="fas fa-edit"></i>
                                Cập nhật đến: Chương 20
                            </div>
                        </div>
                    </div>
                    <div class="container-flex">
                        <a href="#" class="detail-truyen-img"><img src="./imgTieuthuyet/imgChiyeuminhem.PNG"></a>
                        <div class="container-flex-column">
                            <a href="#" class="detail-truyen-name">Chỉ yêu mình em</a>
                            <div class="detail-truyen-info">
                                <i class="fas fa-calendar"></i>
                                Ngày ra mắt: 2/12/2020
                            </div>
                            <div class="detail-truyen-rating">
                                <i class="fas fa-thumbs-up"></i>
                                12500
                            </div>
                            <div class="detail-truyen-info">
                                <i class="fas fa-edit"></i>
                                Cập nhật đến: Chương 23
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-moicapnhat-content-detail">
                    <div class="container-flex">
                        <a href="#" class="detail-truyen-img"><img src="./imgTruyen/imgTieuthudongdanh.PNG"></a>
                        <div class="container-flex-column">
                            <a href="#" class="detail-truyen-name">Tiểu thư đỏng đảnh</a>
                            <div class="detail-truyen-info">
                                <i class="fas fa-calendar"></i>
                                Ngày ra mắt: 4/1/2021
                            </div>
                            <div class="detail-truyen-rating">
                                <i class="fas fa-thumbs-up"></i>
                                11590
                            </div>
                            <div class="detail-truyen-info">
                                <i class="fas fa-edit"></i>
                                Cập nhật đến: Chương 12
                            </div>
                        </div>
                    </div>
                    <div class="container-flex">
                        <a href="#" class="detail-truyen-img"><img src="./imgTieuthuyet/imgTuyetthemynhan.PNG"></a>
                        <div class="container-flex-column">
                            <a href="#" class="detail-truyen-name">Tuyệt thế mỹ nhân</a>
                            <div class="detail-truyen-info">
                                <i class="fas fa-calendar"></i>
                                Ngày ra mắt: 26/12/2020
                            </div>
                            <div class="detail-truyen-rating">
                                <i class="fas fa-thumbs-up"></i>
                                12902
                            </div>
                            <div class="detail-truyen-info">
                                <i class="fas fa-edit"></i>
                                Cập nhật đến: Chương 19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-moicapnhat-content-detail">
                    <div class="container-flex">
                        <a href="#" class="detail-truyen-img"><img src="./imgTieuthuyet/imgHuongvenoianh.PNG"></a>
                        <div class="container-flex-column">
                            <a href="#" class="detail-truyen-name">Hướng về nơi anh</a>
                            <div class="detail-truyen-info">
                                <i class="fas fa-calendar"></i>
                                Ngày ra mắt: 1/12/2020
                            </div>
                            <div class="detail-truyen-rating">
                                <i class="fas fa-thumbs-up"></i>
                                5120
                            </div>
                            <div class="detail-truyen-info">
                                <i class="fas fa-edit"></i>
                                Cập nhật đến: Chương 6
                            </div>
                        </div>
                    </div>
                    <div class="container-flex">
                        <a href="#" class="detail-truyen-img"><img src="./imgTieuthuyet/imgCovosieusao.PNG"></a>
                        <div class="container-flex-column">
                            <a href="#" class="detail-truyen-name">Cô vợ siêu sao</a>
                            <div class="detail-truyen-info">
                                <i class="fas fa-calendar"></i>
                                Ngày ra mắt: 9/1/2021
                            </div>
                            <div class="detail-truyen-rating">
                                <i class="fas fa-thumbs-up"></i>
                                1159
                            </div>
                            <div class="detail-truyen-info">
                                <i class="fas fa-edit"></i>
                                Cập nhật đến: Chương 7
                            </div>
                        </div>
                    </div>
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
                   <div class="gioithieu-detail">   
                        <a href="#" class="gioithieu-detail-img"><img src="./imgTieuthuyet/imgAnhsangtrang.PNG"></a>                    
                       <div class="theloai-container-flex-column">
                           <a href="" class="gioithieu-detail-tentruyen">Tên truyện</a>
                           <div class="gioithieu-detail-theloai">Truyện tranh-ngôn tình</div>
                           <div class="gioithieu-detail-chuonghot">
                               Chương 1
                           </div>
                           <div class="gioithieu-detail-chuonghot">
                                Chương 90
                            </div>
                       </div>
                   </div>
                   <div class="gioithieu-detail">   
                        <a href="#" class="gioithieu-detail-img"><img src="./imgTieuthuyet/imgAnhsangtrang.PNG"></a>                    
                        <div class="theloai-container-flex-column">
                            <a href="" class="gioithieu-detail-tentruyen">Tên truyện</a>
                            <div class="gioithieu-detail-theloai">Truyện tranh-ngôn tình</div>
                            <div class="gioithieu-detail-chuonghot">
                                Chương 1
                            </div>
                            <div class="gioithieu-detail-chuonghot">
                                Chương 90
                            </div>
                    </div>
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
            <a href="#" class="footer-menu-btn">Liên hệ</a>
            <a href="#" class="footer-menu-btn">Giới thiệu</a>
            <a href="#" class="footer-menu-btn">Trợ giúp</a>
            <a href="#" class="footer-menu-btn-special">Chính sách và quyền riêng tư</a>
        </div>
        <div class="footer-banquyen">
            © 2020 Bản quyền thuộc về Team TMT - MT Manga 
        </div>
    </footer>
    <script src="./javascript/MTmanga.js"></script>
</body>
</html>