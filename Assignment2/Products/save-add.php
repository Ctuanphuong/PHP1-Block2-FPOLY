<?php

session_start();
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: ../Asm/login.php');
    die;
}
//kết nối với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");
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

//kiểm tra dữ liệu
$nameerr = "";
$skuerr = "";
$imageerr = "";
$priceerr = "";
$quantityerr = "";
$category_iderr = "";
$detailerr = "";

if(strlen($name) == 0){
    $nameerr = "Please enter product's name";
}
if(strlen($sku) == 0){
    $skuerr = "Please enter product's sku";
} 
if($image['size'] == 0){
    $imageerr = "Please choose an image";
}
if(strlen($price) == 0){
    $priceerr = "Please enter product's price";
}
if(strlen($quantity) == 0){
    $quantityerr = "Please enter product's quantity";
}
if(strlen($category_id) == 0){
    $category_iderr = "Please choose product's category";
}
if(strlen($detail) == 0){
    $detailerr = "Please enter product's detail";
}
if(!empty($nameerr) || !empty($skuerr) || !empty($imagerr) || !empty($priceerr) || !empty($category_iderr) || !empty($detailerr)){
    header("location: add-product.php?nameerr=$nameerr&skuerr=$skuerr&imageerr=$imageerr&priceerr=$priceerr&quantityerr=$quantityerr&category_iderr=$category_iderr&detailerr=$detailerr");
    die;
}




//câu lệnh sql insert
$insertQuery = "INSERT INTO products( name, sku, image,price, quantity, category_id, detail) VALUES ('$name','$sku','$folder',$price,$quantity,$category_id,'$detail')";


//nạp câu sql vào kết nối
$stmt = $connect->prepare($insertQuery);

//thực thi
$stmt -> execute();


header('location:list-product.php');
?>