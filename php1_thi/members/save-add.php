<?php 

$name = $_POST['name'];
$is_leader = $_POST['is_leader'];
$project_id = $_POST['project_id'];
$avatar = $_FILES['avatar'];
$folder = "./uploads/" . uniqid() . '-'. $avatar['name'];
move_uploaded_file($avatar['tmp_name'], $folder);
$department = $_POST['department'];
$salary = $_POST['salary'];
$phone = $_POST['phone'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];

// validate 
$nameerr = "";
$is_leadererr="";
$project_iderr="";
$avatarerr = "";
$departmenterr = "";
$salaryerr = "";
$phoneerr = "";
$createderr = "";
$updatederr = "";

// điều kiện
if(strlen($name) == 0) { 
    $nameerr = "Please enter a name";
}
if(!empty($nameerr)) {
header("location: add-member.php?nameerr=$nameerr");
die;
}
$sqlInsert = "insert into members (name, is_leader, project_id, avatar, department, salary, phone, created_at, updated_at)
 values
('$name','$is_leader','$project_id', '$folder','$department', '$salary', '$phone', '$created_at', '$updated_at')"; 

$connect = new PDO("mysql:host=localhost;dbname=php1_thi;charset=utf8", "root", "");
$stmt = $connect->prepare($sqlInsert);
$stmt->execute();
header('location: index.php');
?>