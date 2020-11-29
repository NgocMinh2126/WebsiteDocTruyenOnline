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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b3f16036e.js" crossorigin="anonymous"></script>
    <link href="/TMTManga/assets/css/Admin.css" rel="stylesheet">
    <title>Admin | Sửa/Xóa Truyện</title>
</head>

<body>
    <main>
        <div class="main-logo">
            <img src="./image/mtlogo7.png">
            <div class="main-logo-title">MT Manga</div>
        </div>
        <div class="main-thongke">
            <div class="main-thongke-container">
                <div class="main-thongke-detail">
                    <div class="main-thongke-title">Tổng số truyện</div>
                    <div class="main-thongke-info">1000</div>
                </div>
                <i class="fas fa-book"></i>
            </div>
            <div class="main-thongke-container">
                <div class="main-thongke-detail">
                    <div class="main-thongke-title">Tài khoản</div>
                    <div class="main-thongke-info">1000</div>
                </div>
                <i class="fas fa-book-reader"></i>
            </div>
            <div class="main-thongke-container">
                <div class="main-thongke-detail">
                    <div class="main-thongke-title">Tác giả</div>
                    <div class="main-thongke-info">1000</div>
                </div>
                <i class="fas fa-keyboard"></i>
            </div>
            <div class="main-thongke-container">
                <div class="main-thongke-detail">
                    <div class="main-thongke-title">Lượt like</div>
                    <div class="main-thongke-info">1000</div>
                </div>
                <i class="fas fa-thumbs-up"></i>
            </div>
        </div>
        <div class="main-dstruyen">
            <div class="main-dstruyen-title"><i class="fas fa-star-of-life"></i>Danh sách truyện</div>
            <table class="tbTruyen">
                <tr>
                    <th class="idtruyen-col">ID</th>
                    <th class="tentruyen-col">Tên truyện</th>
                    <th class="tacgia-col">Tác giả</th>
                    <th class="theloai-col">Thể loại</th>
                    <th class="tinhtrang-col">Tình trạng</th>
                    <th class="loai-col">Loại truyện</th>
                    <th class="sua-xoa-col">Sửa/Xóa</th>
                </tr>
            </table>
            <div class="tbTruyen-data-container">
                <table class="tbTruyen-data">
                    <tr>
                        <th class="idtruyen-col"></th>
                        <th class="tentruyen-col"></th>
                        <th class="tacgia-col"></th>
                        <th class="theloai-col"></th>
                        <th class="tinhtrang-col"></th>
                        <th class="loai-col"></th>
                        <th class="sua-xoa-col"></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Tổng tài tại thượng</td>
                        <td>Lê Ngọc Minh</td>
                        <td>Ngôn tình Tổng tài</td>
                        <td>Đang sáng tác</td>
                        <td>Truyện tranh</td>
                        <td>
                            <button class="sua-btn"><i class="far fa-edit"></i></button>    
                            <div class="modal">
                                <div class="edittruyen-form">
                                    <button class="closeform-btn"><i class="fas fa-times"></i></button>
                                    <div class="edittruyen-title"><i class="far fa-edit"></i>Cập nhật thông tin</div>
                                    <div class="edittruyen-content">
                                        <div class="form">
                                            <form>
                                                <label class="form-title">Tên truyện</label><input id="tentruyen-ip" value="Bảy năm vẫn ngoảnh về phương Bắc" type="text"><br>
                                                <label class="form-title">Tác giả</label><input id="tacgia-ip" value="Ân Tầm" type="text"><br>
                                                <div class="container-flex">
                                                    <div class="flex-column">
                                                        <label class="form-title" class="sochuong">Số chương</label>
                                                        <input id="sochuong-ip" value="2" type="number">
                                                    </div>
                                                    <div class="flex-column">
                                                        <label class="form-title" class="tinhtrang">Tình trạng</label>
                                                        <select id="tinhtrang-ip" > 
                                                            <option>Đang sáng tác</option>
                                                            <option>Đã hoàn thành</option>
                                                            <option>Tạm ngưng</option>
                                                        </select>
                                                    </div>                            
                                                </div>  
                                                <div class="container-flex">
                                                    <div class="flex-column">
                                                        <label class="form-title" class="sochuong">Loại truyện</label>
                                                        <input id="loaitruyen-ip" value="Tiểu thuyết" type="text">
                                                    </div>
                                                    <div class="flex-column">
                                                        <label class="form-title" class="tinhtrang">Thể loại</label>
                                                        <div class="container-flex">
                                                            <div class="flex-column">
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Ngôn tình
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Cổ đại
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Tổng tài
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Kinh dị
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Hài hước
                                                                </label>
                                                            </div>
                                                            <div class="flex-column margin-left">
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Xuyên không
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Học đường
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Showbiz
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Trinh thám
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Kiếm hiệp
                                                                </label>
                                                                <label class="theloai-checkbox">
                                                                    <input type="checkbox">Viễn tưởng
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>                       
                                                </div> 
                                                <button class="luuthaydoi-btn"><i class="fas fa-check"></i>  Lưu lại</button>                     
                                            </form>
                                        </div>
                                        <div class="anhbia">
                                            <img src="./imgTieuthuyet/imgBaynamvanngoanhvephuongbac.png">
                                            <button class="doianhbia-btn"><i class="fas fa-upload"></i>Thay đổi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <button class="xoa-btn"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </table>
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
    <script src="/TMTManga/assets/javascript/Admin.js"></script>
</body>

</html>