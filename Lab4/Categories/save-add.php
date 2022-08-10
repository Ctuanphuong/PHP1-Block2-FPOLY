<?php
session_start();
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: ../Asm/login.php');
    die;
}
//Tạo kết nối & thực thi câu lệnh với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

//Lấy dữ liệu từ form
$name = $_POST['name'];

//kiểm tra dữ liệu
$nameerr = "";

if(strlen($name) == 0){
    $nameerr = "Please enter product's category name";
}else{
    $sqlCheckName = "select 
                                count(*) as total 
                        from categories 
                        where name = '$name'";
 $stmt = $connect->prepare($sqlCheckName);
    // 3,2 thực thi câu sql với db  
    $stmt->execute();   
    $countData = $stmt->fetch();
    if($countData['total'] > 0){
        $nameerr = "Category already exists, please choose another category";
    }
}
if(!empty($nameerr)){
    header("location: add-category.php?nameerr=$nameerr");
    die;
}


//câu lệnh sql insert
$insertQuery = "INSERT INTO categories(name) VALUES ('$name')";


//nạp câu sql vào kết nối
$stmt = $connect->prepare($insertQuery);

//thực thi
$stmt->execute();


header('location:list-category.php');
?>