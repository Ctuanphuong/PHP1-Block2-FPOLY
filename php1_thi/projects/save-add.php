<?php 

$name = $_POST['name'];
$code = $_POST['code'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$budget = $_POST['budget'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];


$sqlInsert = "insert into projects (name, code, start_date, end_date, budget, created_at, updated_at)
 values
('$name','$code','$start_date','$end_date',$budget, '$created_at', '$updated_at')"; 

$connect = new PDO("mysql:host=localhost;dbname=php1_thi;charset=utf8", "root", "");
$stmt = $connect->prepare($sqlInsert);
$stmt->execute();

header('location: index.php');
?>