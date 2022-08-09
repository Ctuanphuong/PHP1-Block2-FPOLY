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
//1. Tạo câu sql để lấy dữ liệu từ db
$sqlQuery = "select * from users";
// 2. Tạo kết nối từ php => mysql
$connect = new PDO(
    "mysql:host=127.0.0.1;dbname=php1;charset=utf8",
    "root",
    ""
);

//3.1 Nạp câu sql vào kết nối
$stmt = $connect->prepare($sqlQuery);
//3.2 Thực thi câu sql với db
$stmt->execute();

// 4. Nhận dữ liệu trả về từ câu sql
$data = $stmt->fetchAll(); //Lấy về tất cả các bản ghi tìm được từ câu sql
// $data = $stmt->fetch(); // lấy ra 1 bản ghi đầu tiên tìm được từ câu sql

// echo "<pre>";
// var_dump($data);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>DS sinh viên</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style1.css'>
    <script src='main.js'></script>
</head>
<body>
<div class="container-edit">
<?php
    if(isset($_SESSION['auth'])): ?>
<span>Chào, <?php echo $_SESSION['auth']['email'] ?></span>
<?php endif ?>
<a href="logout.php">Thoát</a> <br>
Hiện có <?= count($data) ?> tài khoản trong database
<h1>Danh sách sinh viên</h1>
    <table  class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Avatar</th>
                <th><a href="add-student.php" class="add-th">Thêm</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><img src="<?= $value['avatar'] ?>" alt="Ảnh sinh viên" style="width: 100px; height: 100px; border: 1px solid yellow;"></td>
                    <td class="btn-option">
                        <a class="edit-btn" href="edit-student.php?id=<?= $value['id'] ?>">Sửa</a>
                        <a class="remove-btn" href="remove-student.php?id=<?= $value['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
</body>
</html>

