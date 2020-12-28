<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/TMTManga/assets/css/Trogiup.css"></head>
    <title>Trợ giúp</title>
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
            <a href="?controller=page&action=Dangnhap" class="menu-bar-btn" id="login"">Đăng nhập</a>
        </div>
    </header>
    <script>
        document.getElementById("login").textContent = "<?php session_start();
                                                        echo $_SESSION['hoTen']; ?>";
        document.getElementById("login").setAttribute("href", "");
    </script>
    <main>
        <h1>Trợ giúp</h1>
        <p>Nội dung trên website của chúng tôi đều được thu thập và xây dựng dựa trên các nguồn tài nguyên truyện miễn
            phí và công khai trên Internet.<br>Các bạn truy cập vào trang web của chúng tôi được đọc một cách miễn phí.</p>
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'tab1')" id="defaultOpen">Điều khoản sử dụng website</button>
            <button class="tablinks" onclick="openTab(event, 'tab2')">Hướng dẫn đăng kí thành viên</button>
        </div>

        <div id="tab1" class="tabcontent">
            <p>- Các thông tin, bài viết, giao diện website… có thể thay đổi bất cứ lúc nào theo ý muốn của team TMT-MT
                manga mà không cần thông báo trước.</p>
            <p>- Trên hết, tất cả những thay đổi của website đều hướng đến chất lượng thông tin cung cấp đến người dùng,
                cũng như đưa đến cho người dùng trải nghiệm sử dụng website tốt nhất.</p>
            <p>- Nghiêm cấm sử dụng bất kỳ nội dung nào của website MTmanga với mục đích khác hoặc nhân danh bất kỳ đối
                tác thứ ba nào nếu không có sự cho phép của chúng tôi bằng văn bản chính thức.</p>
            <p>- Nếu vi phạm, chúng tôi sẽ đưa ra toà án pháp luật có thẩm quyền đề giải quyết.</p>
            <img src="/TMTManga/assets/image/image/img3.png" alt="Trang chủ">
        </div>

        <div id="tab2" class="tabcontent">
            <p>- Việc đăng ký thành viên là hoàn toàn tự nguyện từ phía người dùng, chúng tôi hoàn toàn không ép buộc việc
                đăng ký thành viên, nếu bạn cảm thấy phiền lòng về vấn đề này hãy bỏ qua nó.</p>
            <p>- MTmanga hiện có chức năng đăng ký thành viên để các bạn dễ dàng sử dụng tất cả các chức năng của website,
                đối với các bạn không đăng ký thành viên sẽ bị hạn chế một số tính năng như: đánh dấu bài đã đọc, đang
                đọc hoặc chưa đọc, không được tham gia viết bình luận, đăng truyện, dự các cuộc thi viết trên website….
            </p>
            <img src="/TMTManga/assets/image/image/img5.jpg" alt="Đăng kí"><br>
            <br>- Ngoài ra website của chúng tôi có hỗ trợ cho bạn đăng nhập với các tài khoản như Facebook, Google,
            Twitter
            <img src="/TMTManga/assets/image/image/img6.jpg" alt="Đăng nhập">
        </div>
        <br>
        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();
        </script>
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