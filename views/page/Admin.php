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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="/TMTManga/assets/css/Admin.css" rel="stylesheet">
    <title>Admin | Sửa/Xóa Truyện</title>
</head>

<body>
    <main>
        <div class="main-logo">
            <img src="/TMTManga/assets/image/image/mtlogo7.png">
            <div class="main-logo-title">MT Manga</div>
        </div>
        <div class="main-thongke">
            <div class="main-thongke-container">
                <div class="main-thongke-detail">
                    <div class="main-thongke-title">Tổng số truyện</div>
                    <div class="main-thongke-info"><?php echo count($truyen); ?>
                    </div>
                </div>
                <i class="fas fa-book"></i>
            </div>
            <div class="main-thongke-container">
                <div class="main-thongke-detail">
                    <div class="main-thongke-title">Tài khoản</div>
                    <div class="main-thongke-info"><?php echo count($user); ?></div>
                </div>
                <i class="fas fa-book-reader"></i>
            </div>
            <div class="main-thongke-container">
                <div class="main-thongke-detail">
                    <div class="main-thongke-title">Tác giả</div>
                    <div class="main-thongke-info"><?php echo count($tacgia) ?></div>
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
            <!-- button: them -->
            <button class="them-btn"><i class="fas fa-plus-circle"></i></button>
            <!-- -->
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
                    <?php for ($i = 0; $i < count($truyen); $i++) {
                        $tr = $truyen[$i] ?>
                        <tr>
                            <td><?php echo $tr->idTruyen ?></td>
                            <td><?php echo $tr->tenTruyen ?></td>
                            <td>
                                <?php for ($j = 0; $j < count($tacgia); $j++) {
                                    $tg = $tacgia[$j];
                                    if ($tg->idTacGia == $tr->idTacGia) {
                                        echo $tg->tenTacGia;
                                    }
                                } ?>
                            </td>
                            <td>
                                <?php for ($j = 0; $j < count($listTheLoaiTruyen); $j++) {
                                    $theloaitruyen = $listTheLoaiTruyen[$j];
                                    if ($tr->idTruyen == $theloaitruyen->idTruyen) {
                                        for ($k = 0; $k < count($listTheLoai); $k++) {
                                            $theloai = $listTheLoai[$k];
                                            if ($theloaitruyen->idTheLoai == $theloai->idTheLoai) {
                                                echo $theloai->tenTheLoai;
                                                echo "  ";
                                            }
                                        }
                                    }
                                }  ?>
                            </td>
                            <td><?php echo $tr->tinhTrang ?></td>
                            <td>
                                <?php if ($tr->loaiTruyen == 0) {
                                    echo "Truyện tranh";
                                } else {
                                    echo "Tiểu thuyết";
                                } ?>
                            </td>
                            <td>
                                <button class="sua-btn"><i class="far fa-edit"></i></button>
                                <a href="?controller=page&action=Delete&idTruyen=<?php echo $tr->idTruyen ?>"><button class="xoa-btn"><i class="far fa-trash-alt"></i>
                                        <?php if (isset($_GET["delete_id"])) {
                                            $delete_id = $_GET["delete_id"];
                                        } ?>
                                    </button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </main>
    <div class="modaladd">
        <div class="addtruyen-form">
            <button class="closeform-btn" id="close-formadd"><i class="fas fa-times"></i></button>
            <div class="addtruyen-title"><i class="fas fa-plus"></i> Thêm truyện</div>
            <div class="addtruyen-content">
                <div class="formadd">
                    <form method="POST">
                        <label class="formadd-title">Tên truyện</label><input id="ten-ip" type="text"><br>
                        <label class="formadd-title">Tên tác giả</label><br>
                        <select id="tentg-ip">
                            <?php for ($i = 0; $i < count($tacgia); $i++) {
                                $tg = $tacgia[$i];
                            ?>
                                <option value="<?php echo $tg->idTacGia ?>"><?php echo $tg->tenTacGia ?></option>
                            <?php
                            } ?>
                        </select>
                        <div class="container-flex">
                            <div class="flex-column">
                                <label class="formadd-title" class="tinhtrang">Tình trạng cập nhật</label>
                                <select id="tinhtrangadd-ip">
                                    <option>Đã hoàn thành</option>
                                    <option>Đang cập nhật</option>
                                    <option>Tạm ngưng</option>
                                </select>
                            </div>
                        </div>
                        <div class="container-flex">
                            <div class="flex-column">
                                <label class="formadd-title" class="sochuong">Tình trạng cập nhật</label>
                                <select id="theloaiadd-ip" multiple>
                                    <?php for ($i = 0; $i < count($listTheLoai); $i++) {
                                        $theloai = $listTheLoai[$i]; ?>
                                        <option value="<?php echo $theloai->idTheLoai ?>"><?php echo $theloai->tenTheLoai ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="baoloi">Vui lòng nhập đầy đủ thông tin trước khi nhấn nút Thêm</div>
                    <button class="luuthaydoi-btn" id="add-btn"><i class="fas fa-check"></i> Thêm </button>
                </div>
                <div class="anhbiaadd">
                    <input type="file" name="fileUpload" id="fileUpload">
                    <img id="displayImg">
                    <label class="form-title">Giới thiệu</label>
                    <input type="file" name="gioithieu" id="gioithieu">
                </div>
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="edittruyen-form">
            <button class="closeform-btn" id="close-formedit"><i class="fas fa-times"></i></button>
            <div class="edittruyen-title"><i class="far fa-edit"></i>Cập nhật thông tin</div>
            <div class="edittruyen-content">
                <div class="form">
                    <label class="form-title">Tên truyện</label><input id="tentruyen-ip" value="Bảy năm vẫn ngoảnh về phương Bắc" type="text"><br>
                    <label class="formadd-title">Tên tác giả</label><br>
                    <select id="tentg-ip2">
                        <?php for ($i = 0; $i < count($tacgia); $i++) {
                            $tg = $tacgia[$i];
                        ?>
                            <option value="<?php echo $tg->idTacGia ?>"><?php echo $tg->tenTacGia ?></option>
                        <?php
                        } ?>
                    </select><br>
                    <div class="container-flex">
                        <div class="flex-column">
                            <label class="form-title" class="tinhtrang">Tình trạng</label>
                            <select id="tinhtrang-ip">
                                <option>Đang sáng tác</option>
                                <option>Đã hoàn thành</option>
                                <option>Tạm ngưng</option>
                            </select>
                        </div>
                    </div>
                    <div class="container-flex">
                        <div class="flex-column">
                            <label class="form-title" class="tinhtrang">Thể loại</label>
                            <select id="theloaiedit-ip" multiple>
                                <?php for ($i = 0; $i < count($listTheLoai); $i++) {
                                    $theloai = $listTheLoai[$i]; ?>
                                    <option value="<?php echo $theloai->idTheLoai ?>"><?php echo $theloai->tenTheLoai ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <button class="luuthaydoi-btn" id="edithuhu"><i class="fas fa-check"></i> Lưu lại</button>
                </div>
                <div class="anhbia">
                    <input type="file" name="fileUpload" id="updateAnhBia">
                    <img id="displayImg2">
                </div>
            </div>
        </div>
    </div>
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
    <!-- load anh -->
    <script type="text/javascript">
        var filename;
        var fileGioiThieu;
        document.querySelector('#fileUpload').onchange = function fileChange() {
            var file_data = $('#fileUpload').prop('files')[0];
            var form_data = new FormData(); //mo phong 1 form de gui ve server
            form_data.append('file', file_data); //gan du lieu
            $.ajax({
                url: 'post.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data, // du lieu gui kem vao ajax
                type: 'post',
                success: function(response) {}
            });
            var fileSelected = document.getElementById('fileUpload').files;
            filename = document.getElementById('fileUpload').files[0].name;
            console.log(filename);
            if (fileSelected.length > 0) {
                var fileToLoad = fileSelected[0];
                var fileReader = new FileReader();
                fileReader.onload = function(fileLoaderEvent) {
                    var scrData = fileLoaderEvent.target.result;
                    document.getElementById('displayImg').src = scrData;
                }
                fileReader.readAsDataURL(fileToLoad);
            }
        }
        document.querySelector('#gioithieu').onchange = function fileChange() {
            var file_data = $('#gioithieu').prop('files')[0];
            var form_data = new FormData(); //mo phong 1 form de gui ve server
            form_data.append('file', file_data); //gan du lieu
            $.ajax({
                url: 'posttxt.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data, // du lieu gui kem vao ajax
                type: 'post',
                success: function(response) {}
            });
            fileGioiThieu = document.getElementById('gioithieu').files[0].name;
        }
        const add_btn = document.querySelector("#add-btn");
        add_btn.addEventListener('click', function() {
            console.log("bat dc su kien add");
            var tenTruyen = document.querySelector("#ten-ip").value;
            console.log(tenTruyen);
            const listTacGia = document.querySelector("#tentg-ip");
            var idTacGia
            for (let i = 0; i < listTacGia.options.length; i++) {
                if (listTacGia.options[i].selected == true) {
                    idTacGia = listTacGia.options[i].value;
                }
            }
            console.log(idTacGia);
            const listtinhTrang = document.querySelector("#tinhtrangadd-ip");
            var tinhTrang;
            for (let i = 0; i < listtinhTrang.options.length; i++) {
                if (listtinhTrang.options[i].selected == true) {
                    tinhTrang = listtinhTrang.options[i].text;
                }
            }
            console.log("tinh trang: " + tinhTrang);
            const listTheLoai = document.querySelector("#theloaiadd-ip");
            var theloaitruyen = [];
            for (let i = 0; i < listTheLoai.options.length; i++) {
                if (listTheLoai.options[i].selected == true) {
                    theloaitruyen.push(listTheLoai.options[i].value);
                }
            }
            console.log(theloaitruyen.length);
            var str = "";
            for (let i = 0; i < theloaitruyen.length; i++) {
                str += "&theloai" + i + "=" + theloaitruyen[i];
            }
            console.log(str);
            var anhBia = "/TMTManga/assets/image/imgTruyen/" + filename;
            console.log(anhBia);
            var gioiThieu = "C:/xampp/htdocs/TMTManga/assets/Gioithieu/" + fileGioiThieu;
            console.log(gioiThieu);
            if (tenTruyen == null || idTacGia == 0 || tinhTrang == null || filename == null || fileGioiThieu == null) {
                document.querySelector(".baoloi").style.display = "block";
            } else {
                document.querySelector(".baoloi").style.display = "none";
                window.location = "?controller=page&action=InsertTruyen&ten=" + tenTruyen + "&gt=" + gioiThieu + "&anhBia=" + anhBia + "&tinhTrang=" + tinhTrang + "&tg=" + idTacGia + "&loai=0&sluong=" + theloaitruyen.length + str;
            }
        });
    </script>
    <script>
        var filename2="";
        document.querySelector('#updateAnhBia').onchange = function fileChange() {
            var file_data = $('#updateAnhBia').prop('files')[0];
            var form_data = new FormData(); //mo phong 1 form de gui ve server
            form_data.append('file', file_data); //gan du lieu
            $.ajax({
                url: 'post.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data, // du lieu gui kem vao ajax
                type: 'post',
                success: function(response) {}
            });
            var fileSelected = document.getElementById('updateAnhBia').files;
            //lay ten anh
            filename2 = document.getElementById('updateAnhBia').files[0].name;
            if (fileSelected.length > 0) {
                var fileToLoad = fileSelected[0];
                var fileReader = new FileReader();
                fileReader.onload = function(fileLoaderEvent) {
                    var scrData = fileLoaderEvent.target.result;
                    document.getElementById('displayImg2').src = scrData;
                }
                fileReader.readAsDataURL(fileToLoad);
            }
        }
        var edit_btn = document.querySelectorAll(".sua-btn");
        var truyen = [];
        var listtheloaitruyen = [];
        <?php for ($i = 0; $i < count($truyen); $i++) {
            $tt = $truyen[$i]; ?>
            truyen[<?php echo ($i) ?>] = {
                idTruyen: <?php echo ($tt->idTruyen) ?>,
                tenTruyen: '<?php echo ($tt->tenTruyen) ?>',
                moTa: '<?php echo ($tt->moTa) ?>',
                soChuong: <?php echo ($tt->soChuong) ?>,
                luotLike: <?php echo ($tt->luotLike) ?>,
                anhBia: '<?php echo ($tt->anhBia) ?>',
                tinhTrang: '<?php echo ($tt->tinhTrang) ?>',
                idTacgia: <?php echo ($tt->idTacGia) ?>,
                loaiTruyen: <?php echo ($tt->loaiTruyen) ?>,
                ngayDang: '<?php echo ($tt->ngayDang) ?>'
            };
        <?php } ?>
        <?php for ($i = 0; $i < count($listTheLoaiTruyen); $i++) {
            $tt = $listTheLoaiTruyen[$i]; ?>
            listtheloaitruyen[<?php echo ($i) ?>] = {
                idTruyen: <?php echo ($tt->idTruyen) ?>,
                idTheLoai: <?php echo ($tt->idTheLoai) ?>
            }
        <?php } ?>
        var update_idTruyen;
        var listtheloai = document.querySelector("#theloaiedit-ip");
        var listtinhtrang = document.querySelector("#tinhtrang-ip");
        var listtacgia2 = document.querySelector("#tentg-ip2");
        for (let i = 0; i < sua_btn.length; i++) {
            edit_btn[i].addEventListener('click', function() {
                update_idTruyen = truyen[i].idTruyen;
                console.log("helo");
                document.querySelector("#tentruyen-ip").value = truyen[i].tenTruyen;
                document.querySelector("#displayImg2").src = truyen[i].anhBia;
                var ttt = [];
                //tao mang the loai cua truyen tuong ung
                for (let k = 0; k < listtheloaitruyen.length; k++) {
                    if (listtheloaitruyen[k].idTruyen == truyen[i].idTruyen) {
                        ttt.push(listtheloaitruyen[k].idTheLoai);
                        console.log(listtheloaitruyen[k].idTheLoai);
                    }
                }
                for (let j = 0; j < listtheloai.length; j++) {
                    for (let e = 0; e < ttt.length; e++) {
                        if (ttt[e] == listtheloai.options[j].value) {
                            listtheloai.options[j].selected = true;
                        }
                    }
                }
                for (let j = 0; j < listtinhtrang.length; j++) {
                    if (listtinhtrang.options[j].text == truyen[i].tinhTrang) {
                        listtinhtrang.options[j].selected = true;
                    }
                }
                for (let j = 0; j < listtacgia2.length; j++) {
                    if (listtacgia2.options[j].value == truyen[i].idTacgia) {
                        listtacgia2.options[j].selected = true;
                    }
                }
            });
        }
        document.querySelector("#edithuhu").addEventListener('click', function() {
            console.log("bat dau su kien update");
            console.log(update_idTruyen);
            var update_TenTruyen = document.querySelector("#tentruyen-ip").value;
            console.log(update_TenTruyen);
            var update_idTacGia;
            for (let j = 0; j < listtacgia2.length; j++) {
                if (listtacgia2.options[j].selected == true) {
                    update_idTacGia = listtacgia2.options[j].value;
                }
            }
            console.log("id tac gia:" + update_idTacGia);
            var update_TinhTrang;
            for (let j = 0; j < listtinhtrang.length; j++) {
                if (listtinhtrang.options[j].selected = true) {
                    update_TinhTrang = listtinhtrang.options[j].text;
                }
            }
            console.log("tinh trang: " + update_TinhTrang);
            var update_AnhBia = "/TMTManga/assets/image/imgTruyen/" + filename2;
            console.log(update_AnhBia);
            var update_listTheLoai = [];
            for (let j = 0; j < listtheloai.length; j++) {
                if (listtheloai.options[j].selected == true) {
                    update_listTheLoai.push(listtheloai.options[j].value);
                }
            }
            var str = "";
            for (let i = 0; i < update_listTheLoai.length; i++) {
                str += "&theloai" + i + "=" + update_listTheLoai[i];
            }
            console.log(str);            
            if(filename2!=""){
                window.location="?controller=Page&action=UpdateTruyen&id="+update_idTruyen+"&ten="+update_TenTruyen+"&tinhTrang="+update_TinhTrang+"&idtg="+update_idTacGia+"&anh="+update_AnhBia+str;
            }else{
                window.location="?controller=Page&action=UpdateTruyen&id="+update_idTruyen+"&ten="+update_TenTruyen+"&tinhTrang="+update_TinhTrang+"&idtg="+update_idTacGia+str;
            }
        })
    </script>
</body>

</html>