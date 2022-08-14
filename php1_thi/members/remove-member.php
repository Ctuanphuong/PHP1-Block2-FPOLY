<?php 
$id = $_GET['id'];

$removeQuery = "delete from members where id = $id";

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1_thi;charset=utf8", "root", "");

$stmt = $connect->prepare($removeQuery);

$stmt->execute();

 header("Location: index.php");
?>