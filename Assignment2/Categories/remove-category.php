<?php 
$id = $_GET['id']; 

$removeQuery = "delete from categories where id = '$id'";
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

$stmt = $connect -> prepare($removeQuery);

$stmt -> execute(); 

header('location:list-category.php');
?>

