=

<?php
session_start();

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");
// nhận dữ liệu từ form
$email = $_POST['email'];
$password = $_POST['password'];
$emailerr = "";
$passworderr = "";

// dựa vào email tìm kiếm trong csdl lấy ra bản ghi đầu tiên tìm được
$sqlQuery = "select * from users where email = '$email'";
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$user = $stmt->fetch();

// kiểm tra email gửi lên
// nếu bị rỗng thì báo lỗi
if(strlen($email) == 0){
    $emailerr = "Please enter email address";
}

if(strlen($password) == 0){
    $passworderr = "Please enter password";
}

if(!empty($emailerr) || !empty($passworderr)){
    header("location: login.php?emailerr=$emailerr&passworderr=$passworderr");
    die;
}
// dựa vào email tìm kiếm trong csdl lấy ra bản ghi đầu tiên tìm được
$sqlQuery = "select * from users where email = '$email'";
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$user = $stmt->fetch();

// so sánh mật khẩu ng dùng gửi lên và mật khẩu trong db
if($user && password_verify($password, $user['password'])){
    // nếu khớp thì tạo session auth và chuyển hướng website sang trang a.php    
    unset($user['password']);
    $_SESSION['auth'] = $user;
    header('location: ../Students/list-student.php');
    die;
}
// nếu không tìm thấy bản ghi dựa vào email hoặc không khớp được mật khẩu
// thì điều hướng ngược về trang login
header('location: login.php?msg=Tài khoản/mật khẩu không chính xác');
?>