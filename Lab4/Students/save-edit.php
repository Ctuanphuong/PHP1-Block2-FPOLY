<?php

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$new_avatar = $_FILES['new_avatar'];


if($new_avatar['size'] > 0) {
    $upimg = "./uploads/" . uniqid() . '-' . $new_avatar['name'];
move_uploaded_file($new_avatar["tmp_name"], $upimg);
} else{ 
    $upimg = $_POST['avatar'];
}
$sqlQuery = "update users set
name='$name',
email='$email',
avatar='$upimg'
where id='$id'
";


$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");


// 3.1  Nạp câu sql vào kết nối

$stmt = $connect->prepare($sqlQuery);
// 3,2 thực thi câu sql với db 

$stmt->execute();

header('location:list-student.php');
?>