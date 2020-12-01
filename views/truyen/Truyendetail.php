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
            <input type="text" class="search-btn-input">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
        <div class="account-bar">
            <a href="" class="menu-bar-btn">Đăng nhập</a>
        </div>
    </header>
    <main>
        <div class="main-duongdan">
            <a href="?controller=truyen&action=<?php if($truyen->loaiTruyen==0){
                echo htmlspecialchars('Truyentranh');
            }else{echo htmlspecialchars('Tieuthuyet');} ?>"><?php if($truyen->loaiTruyen==0){
                echo htmlspecialchars('Truyện tranh');
                }else{echo htmlspecialchars('Tiểu thuyết');}?>
            </a>/
            <a href="?controller=truyen&action=Alltruyen"><?php $theloaitruyen=$listTheLoaiTruyen[0]; 
                for($i=0;$i<count($listTheLoai);$i++){
                    $theloai=$listTheLoai[$i];                    
                    if($theloai->idTheLoai==$theloaitruyen->idTheLoai){
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
                    <?php echo htmlspecialchars($truyen->luotLike)?>
                </div>
                <div class="main-overview-flex">
                    <div class="main-overview-title">Tác giả</div>
                    <div class="main-overview-info" id="tacgia">
                        <?php for($i=0;$i<count($listTacGia);$i++){  
                            $tg=$listTacGia[$i];
                            if($truyen->idTacGia==$tg->idTacGia){
                                echo htmlspecialchars($tg->tenTacGia);
                            }
                        }?>
                    </div>
                </div>
                <div class="main-overview-flex">
                    <div class="main-overview-title">Thể loại</div>
                    <div class="main-overview-info" id="theloai">
                        <?php for($i=0;$i<count($listTheLoaiTruyen);$i++){
                            $theloaitruyen= $listTheLoaiTruyen[$i];
                            for($j=0;$j<count($listTheLoai);$j++){
                                $theloai= $listTheLoai[$j];
                                if($theloaitruyen->idTheLoai==$theloai->idTheLoai){
                                    echo htmlspecialchars($theloai->tenTheLoai);
                                    echo ('  ');
                                }
                            }
                        }?>
                    </div>
                </div>
                <div class="main-overview-flex">
                    <div class="main-overview-title">Tình trạng</div>
                    <div class="main-overview-info" id="tinhtrang">
                        <?php echo htmlspecialchars($truyen->tinhTrang)?>
                    </div>
                </div>
                <div class="main-overview-flex">
                    <div class="main-overview-title">Ngày xuất bản</div>
                    <div class="main-overview-info" id="namxb">
                        <?php echo htmlspecialchars($truyen->ngayDang)?>
                    </div>
                </div>
                <div class="main-overview-flex">
                    <div class="main-overview-title">Số chương</div>
                    <div class="main-overview-info" id="sochuong">
                        <?php echo htmlspecialchars($truyen->soChuong)?>
                    </div>
                </div>
                <div class="main-overview-btn">
                    <a href="?controller=truyen&action=Doctruyentranh&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen)?>&chuong=1">Đọc chương 1</a>
                </div>
            </div>
            <div class="main-summary">
                <div class="main-summary-title"><i class="fas fa-pen-alt"></i>Giới thiệu</div>
                <p class="main-summary-noidung">
                    Triệu Mặc Sênh lặng người nhìn cặp trai gái đứng trước quầy bán rau, một lần nữa chị cảm nhận sự lạ
                    lùng của số phận. Bảy năm trước, chính họ khiến chị quyết định ra đi.
                    Bây giờ họ lại cùng nhau đi mua sắm, vậy là cuối cùng họ vẫn nhau! May mà hồi ấy chị bỏ ra đi, nếu
                    không…Mặc Sênh không dám nghĩ thêm…
                    Hà Dĩ Thâm, Hà Dĩ Văn, sao mình ngốc thế, tại sao cứ một mực cho rằng hai người ấy tên giống nhau
                    thì nhất định là anh em?
                    “Chúng tôi không phải là anh em, trước đây hai gia đình chúng tôi là hàng xóm của nhau, đều họ Hà
                    cho nên cũng đặt tên cho các con giống nhau. Về sau, cha mẹ Dĩ Thâm đột ngột qua đời, cha mẹ tôi
                    nhận nuôi Dĩ Thâm.”
                    “Chị tưởng, chị mạnh hơn tình cảm hai mươi năm giữa tôi và Dĩ Thâm sao?”
                    “Hôm nay tôi chính thức cho chị biết, tôi yêu Dĩ Thâm, nhưng tôi không muốn yêu thầm yêu vụng. Tôi
                    và chị sẽ cạnh tranh công khai.”...........
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
                    <?php for($i = 0 ; $i < $truyen->soChuong; $i++ ){$chuong=$listChuong[$i]?>
                        <div class="main-morong-chuong">
                        <div class="chuong-contain">
                            <a href="?controller=truyen&action=Doctruyentranh&idTruyen=1&chuong=<?php echo $i+1 ?>">Chương <?php echo $i+1 ?></a>
                            <div><?php echo htmlspecialchars($chuong->ngayThem) ?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="main-morong-theloai">
                <div class="main-morong-theloai-title">Thể loại</div>
                <div class="main-morong-theloai-container">
                    
                    <div class="main-morong-theloai-detail">
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Ngôn tình</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Hài hước</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Cổ đại</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Xuyên không</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Học đường</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Tổng tài</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Showbiz</a>
                    </div>
                    <div class="main-morong-theloai-detail">
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Trinh thám</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Kiếm hiệp</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Viễn tưởng</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Kinh dị</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Đã full</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Cập nhật hôm nay</a>
                        <a href="#" class="theloai-btn"><i class="fas fa-caret-right"></i> Mới nhất</a>
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
    <script src="/TMTManga/assets/javascript/Truyendetail.js"></script>
</body>