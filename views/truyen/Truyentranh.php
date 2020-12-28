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
    <link href="/TMTManga/assets/css/Truyentranh_Tieuthuyet.css" rel="stylesheet">
    <title>MT Manga | Truyện tranh</title>
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
            <a class="search-btn" ><i class="fas fa-search"></i></a>
        </div>
        <div class="account-bar">
            <a href="?controller=page&action=Dangnhap" class="menu-bar-btn" id="login"">Đăng nhập</a>
        </div>
    </header>
    <script>
        document.getElementById("login").textContent = "<?php session_start();
                                                        echo $_SESSION['hoTen']; ?>";
        document.getElementById("login").setAttribute("href", "");
    </script>
    <main>
        <div class="main-menu-title">Truyện tranh</div>
        <div class="main-menu">
            <a href="?controller=truyen&action=Truyentranh" class="main-menu-btn" id="hotnhat-btn">Top hot nhất</a>
            <a class="main-menu-btn" id="moinhat-btn" onclick="loadTruyenByType('moiNhatTruyenTranh')">Mới nhất</a>
            <a class="main-menu-btn" id="full-btn" onclick="loadTruyenByType('fullTruyenTranh')">Đã full</a>
            <?php if (count($listTheLoai) > 4) {
                for ($i = 0; $i < 4; $i++) {
                    $theloai = $listTheLoai[$i]; ?>
                    <a href="?controller=truyen&action=Truyentranh&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai) ?>" class="main-menu-btn"><?php echo htmlspecialchars($theloai->tenTheLoai) ?></a>
                <?php }
            } else {
                for ($i = 0; $i < count($listTheLoai); $i++) { ?>
                    <a href="?controller=truyen&action=Truyentranh&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai) ?>" class="main-menu-btn"><?php echo htmlspecialchars($theloai->tenTheLoai) ?></a>
            <?php }
            } ?>
            <?php if (count($listTheLoai) > 4) { ?>
                <div class="main-menu-theloai">
                    <div class="main-menu-theloai-title">Thêm <i class="fas fa-chevron-circle-right"></i></div>
                    <div class="main-menu-theloai-content">
                        <?php for ($i = 4; $i < count($listTheLoai); $i++) {
                            $theloai = $listTheLoai[$i]; ?>
                            <a href="?controller=truyen&action=Truyentranh&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai) ?>" class="main-menu-theloai-btn"><?php echo htmlspecialchars($theloai->tenTheLoai) ?></a>
                    <?php }
                    } ?>
                    </div>
                </div>
        </div>
        <div class="main-dstruyen">
            <?php if (count($listTruyenTranh) > 15) {
                for ($i = 0; $i < 15; $i++) {
                    $truyen = $listTruyenTranh[$i]; ?>
                    <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen) ?>">
                        <img src="<?php echo htmlspecialchars($truyen->anhBia) ?>">
                        <div class="main-dstruyen-tentruyen-ten"><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
                        <span class="main-dstruyen-tentruyen-span"><?php echo htmlspecialchars($truyen->tenTruyen) ?></span>
                        <div class="main-dstruyen-truyen-like">
                            <i class="fas fa-thumbs-up"></i><?php echo htmlspecialchars($truyen->luotLike) ?>
                        </div>
                    </a>
                <?php }
            } else {
                for ($i = 0; $i < count($listTruyenTranh); $i++) {
                    $truyen = $listTruyenTranh[$i]; ?>
                    <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen) ?>">
                        <img src="<?php echo htmlspecialchars($truyen->anhBia) ?>">
                        <div class="main-dstruyen-tentruyen-ten"><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
                        <span class="main-dstruyen-tentruyen-span"><?php echo htmlspecialchars($truyen->tenTruyen) ?></span>
                        <div class="main-dstruyen-truyen-like">
                            <i class="fas fa-thumbs-up"></i><?php echo htmlspecialchars($truyen->luotLike) ?>
                        </div>
                    </a>
            <?php }
            } ?>
        </div>
        <div class="chuyentrang-container">
            <button class="chuyentrang-btn hover" id="trangtruoc-btn">Trang trước</button>
            <button class="chuyentrang-btn hover" id="trangsau-btn">Trang sau</button>
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
    <script>
        var truyen = [];
        var tranghientai = 1;
        const trangtruoc_btn = document.querySelector('#trangtruoc-btn');
        const trangsau_btn = document.querySelector('#trangsau-btn');
        if (trangtruoc_btn.classList.contains('hover')) {
            trangtruoc_btn.classList.remove('hover');
        }
        trangtruoc_btn.disabled = true;
        <?php for ($i = 0; $i < count($listTruyenTranh); $i++) {
            $tt = $listTruyenTranh[$i]; ?>
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
        console.log(truyen.length);
        if (truyen.length < 15) {
            if (trangsau_btn.classList.contains('hover')) {
                trangsau_btn.classList.remove('hover');
            }
            trangsau_btn.disabled = true;
        }
        var main_dstruyen = document.querySelector(".main-dstruyen");
        var sotrang = 1;
        if (truyen.length % 15 == 0) {
            sotrang = truyen.length / 15;
            console.log('so trang' + sotrang);
        } else {
            sotrang = parseInt(truyen.length / 15) + 1;
            console.log('so trang' + sotrang);
        }
        var soluongtruyen= truyen.length;
        trangsau_btn.addEventListener('click', function() {
            main_dstruyen.innerHTML = ``;
            if (trangtruoc_btn.classList.contains('hover') == false) {
                trangtruoc_btn.classList.add('hover');
            }
            trangtruoc_btn.disabled = false;
            var min = tranghientai * 15;
            var max = (tranghientai + 1) * 15;
            tranghientai++;
            console.log(tranghientai);
            if (tranghientai == sotrang) {
                if (trangsau_btn.classList.contains('hover')) {
                    trangsau_btn.classList.remove('hover');
                }
                trangsau_btn.disabled = true;
                for (let i = min; i < soluongtruyen; i++) {
                    main_dstruyen.innerHTML += `
                        <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=${truyen[i].idTruyen}">
                            <img src="${truyen[i].anhBia}">
                            <div class="main-dstruyen-tentruyen">
                                <div class="main-dstruyen-tentruyen-ten">${truyen[i].tenTruyen}</div>            
                                <span class="main-dstruyen-tentruyen-span">${truyen[i].tenTruyen}</span>     
                            </div> 
                            <div class="main-dstruyen-truyen-like">
                                <i class="fas fa-thumbs-up"></i>${truyen[i].luotLike}
                            </div>
                        </a>`
                }
            } else {
                for (let i = min; i < max; i++) {
                    main_dstruyen.innerHTML += `
                        <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=${truyen[i].idTruyen}">
                            <img src="${truyen[i].anhBia}">
                            <div class="main-dstruyen-tentruyen">
                                <div class="main-dstruyen-tentruyen-ten">${truyen[i].tenTruyen}</div>            
                                <span class="main-dstruyen-tentruyen-span">${truyen[i].tenTruyen}</span>     
                            </div> 
                            <div class="main-dstruyen-truyen-like">
                                <i class="fas fa-thumbs-up"></i>${truyen[i].luotLike}
                            </div>
                        </a>`
                }
            }
        });
        trangtruoc_btn.addEventListener('click', function() {
            main_dstruyen.innerHTML = ``;
                if (trangsau_btn.classList.contains('hover') == false) {
                    trangsau_btn.classList.add('hover');
                }
                trangsau_btn.disabled = false;
                tranghientai--;
                console.log(tranghientai);
                var min = (tranghientai - 1) * 15;
                var max = tranghientai * 15;
                if (tranghientai == 1) {
                    if (trangtruoc_btn.classList.contains('hover')) {
                        trangtruoc_btn.classList.remove('hover');
                    }
                    trangtruoc_btn.disabled = true;
                    for(let i= min; i<max;i++){
                        main_dstruyen.innerHTML+=`
                        <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=${truyen[i].idTruyen}">
                            <img src="${truyen[i].anhBia}">
                            <div class="main-dstruyen-tentruyen">
                                <div class="main-dstruyen-tentruyen-ten">${truyen[i].tenTruyen}</div>            
                                <span class="main-dstruyen-tentruyen-span">${truyen[i].tenTruyen}</span>     
                            </div> 
                            <div class="main-dstruyen-truyen-like">
                                <i class="fas fa-thumbs-up"></i>${truyen[i].luotLike}
                            </div>
                        </a>`
                    }
                }else{
                    for(let i= min; i<max;i++){
                        main_dstruyen.innerHTML+=`
                        <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=${truyen[i].idTruyen}">
                            <img src="${truyen[i].anhBia}">
                            <div class="main-dstruyen-tentruyen">
                                <div class="main-dstruyen-tentruyen-ten">${truyen[i].tenTruyen}</div>            
                                <span class="main-dstruyen-tentruyen-span">${truyen[i].tenTruyen}</span>     
                            </div> 
                            <div class="main-dstruyen-truyen-like">
                                <i class="fas fa-thumbs-up"></i>${truyen[i].luotLike}
                            </div>
                        </a>`
                    }
                }
            });
    </script>
    <script>
        var main_dstruyen = document.querySelector(".main-dstruyen");
        function loadTruyenByType(idTheLoai){
            document.querySelector("#trangtruoc-btn").disabled = "true";
            document.querySelector("#trangsau-btn").disabled = "true";
            console.log("Bat duoc su kien");
            var xhtml = new XMLHttpRequest()
            xhtml.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    main_dstruyen.innerHTML = this.responseText;
                }
            };
            xhtml.open("GET", "/TMTManga/data/" + idTheLoai + ".php", true);
            xhtml.send();
        }
    </script>
    <script>
        const search_btn= document.querySelector(".search-btn");
        var input= document.querySelector(".search-btn-input");
        search_btn.addEventListener('click',function(){
            var text= input.value;
            console.log(text);
            var url="?controller=truyen&action=Search&search="+text;
            search_btn.setAttribute('href',url);
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
                    window.location=url;
                }
            }
        }
    </script>
</body>

</html>