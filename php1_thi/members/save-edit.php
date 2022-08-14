<?php 
$id = $_POST['id'];
$name = $_POST['name'];
$is_leader = $_POST['is_leader'];
$project_id = $_POST['project_id'];
// $avatar = $_FILES['avatar'];
$new_avatar = $_FILES['new_avatar'];
if($new_avatar['size'] > 0) { 
  $upimg = "./uploads/" . uniqid() . "-" . $new_avatar['name'];
  move_uploaded_file($new_avatar["tmp_name"], $upimg);
} else {  
  $upimg = $_POST['avatar'];
}
$department = $_POST['department'];
$salary = $_POST['salary'];
$phone = $_POST['phone'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];

$sqlUpdate = " update members set 
  name = '$name', 
  is_leader = '$is_leader',
  project_id = '$project_id',
  avatar = '$upimg',
  department = '$department',
  salary = '$salary',
  phone = '$phone',
  created_at = '$created_at',
  updated_at = '$updated_at'
  where id = $id ";

  $connect = new PDO("mysql:host=localhost;dbname=php1_thi;charset=utf8", "root", "");
$stmt = $connect->prepare($sqlUpdate);
$stmt->execute();
header('location: index.php');
