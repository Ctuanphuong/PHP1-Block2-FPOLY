<?php
//Lấy dữ liệu từ form
$name = $_POST['name'];

//câu lệnh sql insert
$insertQuery = "INSERT INTO categories(name) VALUES ('$name')";
//kết nối với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

//nạp câu sql vào kết nối
$stmt = $connect->prepare($insertQuery);

//thực thi
$stmt->execute();


header('location:list-category.php');
?>