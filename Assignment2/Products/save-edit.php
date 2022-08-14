<?php
$id = $_POST['id'];
$name = $_POST['name'];
$sku = $_POST['sku'];
$new_image = $_FILES['new_image'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];
$detail = $_POST['detail'];
if($new_image['size'] > 0) {
    $upimg = "./uploads/" . uniqid() . '-' . $new_image['name'];
move_uploaded_file($new_image["tmp_name"], $upimg);
} else { 
    $upimg = $_POST['image'];
}
// var_dump($new_image);die;
$sqlQuery = "update products set 
name = '$name', 
sku = '$sku', 
image = '$upimg',
quantity ='$quantity',
price = '$price',   
category_id = '$category_id',
detail = '$detail'
where id ='$id'
";
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

$stmt = $connect -> prepare($sqlQuery);

$stmt -> execute(); 

header('location:list-product.php');
?>