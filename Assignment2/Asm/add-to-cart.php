<?php
session_start();
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

// kiểm tra xem có session giỏ hàng hay không
// nếu không có thì tạo 1 session giỏ hàng là 1 mảng rỗng
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

// nhận id của sản phẩm
$id = $_GET['id'];
// lấy ra thông tin của sản phẩm dựa vào id
$sqlQuery = "select * from products where id = '$id'";
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$product = $stmt->fetch();
$cart = $_SESSION['cart'];
$flag = -1;


foreach($cart as $key => $item) {
    if($id == $item['id']){
        $flag = $key;
        break;
    }
}

// kiểm tra xem id của sản phẩm có xuất hiện trong giỏ hàng hay chưa
// nếu chưa 
if($flag == -1){
    // bổ sung thêm thuộc tính quantity = 1 vào mảng thông tin của sản phẩm
    $product['quantity'] = 1;
    // add sản phẩm vào mảng giỏ hàng
    $cart[] = $product;
}else{
    // nếu id của sp đã có trong giỏ hàng rồi
    // lấy ra số index của sản phẩm bị trùng
    // cập nhật số lượng quantity ++
    $cart[$flag]['quantity']++;
}
$_SESSION['cart'] = $cart;
// điều hướng trang web về trang thông tin giỏ hàng
header('location: cart-detail.php');
?>