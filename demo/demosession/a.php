<?php
session_start();
// cách sử dụng $_SESSION
// 1. ở dòng đầu tiên của request thì cần gọi hàm session_start()
// 2. để tạo mới 1 phần tử trong session thì đơn giản 
// $_SESSION['ten_phan_tu'] = giatri;
// 3. xóa 1 phần tử trong session: unset($_SESSION['ten_phan_tu']);
// 4. xóa toàn bộ tất cả các session của website session_destroy();

// để vào được trang a.php thì cần kiểm tra 
// xem người dùng đã đăng nhập hay chưa
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");
$sqlQuery = "select * from users";
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$data = $stmt->fetchAll();

?>
Hiện có <?= count($data) ?> tài khoản trong db
<a href="logout.php">Thoát</a>