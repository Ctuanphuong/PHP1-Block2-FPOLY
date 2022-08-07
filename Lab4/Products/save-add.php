<?php
//Lấy dữ liệu từ form
$name = $_POST['name'];
$sku = $_POST['sku'];
$image = $_FILES['image'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$category_id = $_POST['category_id'];
$detail = $_POST['detail'];


$folder = strtolower("./uploads/" . uniqid() . '-' . $image['name']);
move_uploaded_file($image["tmp_name"], $folder);


//câu lệnh sql insert
$insertQuery = "INSERT INTO products( name, sku, image,price, quantity, category_id, detail) VALUES ('$name','$sku','$folder',$price,$quantity,$category_id,'$detail')";
//kết nối với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

//nạp câu sql vào kết nối
$stmt = $connect->prepare($insertQuery);

//thực thi
$stmt -> execute();


header('location:list-product.php');
?>