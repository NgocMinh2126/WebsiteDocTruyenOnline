<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/TMTManga/assets/css/Chinhsach.css"></head>
    <title>Chính sách</title>
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
        <h1>Chính sách và quyền riêng tư</h1>
        <p>Xin vui lòng đọc bản chính sách bảo mật dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện nhằm tôn trọng và bảo vệ quyền lợi của bạn.</p>
        <b>1. Chính sách bảo mật được áp dụng cho:</b>
        <p>– Thông tin cá nhân của khách hàng đăng ký sử dụng dịch vụ của MTmanga</p>
        <p>– Toàn bộ hệ thống dữ liệu và cấu trúc website MTmanga</p>
        <p>Chúng tôi thiết lập các tính năng bảo mật vào trang đăng ký thông tin cá nhân của khách hàng và đây là biện pháp tốt nhất nhằm đảm bảo an toàn thông tin của quý khách khi tham gia sử dụng dịch vụ của chúng tôi.</p>
        <p>Bằng việc thu thập thông tin, mã hoá, lưu trữ và bảo mật, chúng tôi không tiết lộ những thông tin của khách hàng, đọc giả MTmanga cho bất kỳ bên thứ 3 nào khác trừ khi có yêu cầu từ cơ quan pháp luật có thẩm quyền hoặc cơ quan chuyên môn.</p>
        <b>2. Chính sách sử dụng và chia sẻ thông tin:</b>
        <p>Khi cung cấp thông tin cho chúng tôi qua trang web này, bạn hiểu rõ và chấp thuận việc thu thập, sử dụng và tiết lộ những thông tin cá nhân theo những điều khoản và điều kiện của chính sách bảo mật thông tin này.
        <p>Bạn hoàn toàn đồng ý và chấp thuận rằng những thông tin cá nhân bạn cung cấp trên trang web của chúng tôi được dùng để xây dựng các dịch vụ, duy trì và phát triển các tính năng mới nhằm tăng trải nghiệm tốt hơn cho người dùng website.</p> 
        <p>Đồng thời, các nhóm thông tin sẽ được điều hướng phù hợp hơn, giúp người dùng có thể dễ dàng thấy được nội dung mình quan tâm hoặc đang tìm kiếm.</p>
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