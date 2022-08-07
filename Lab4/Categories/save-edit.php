<?php
$id = $_POST['id'];
$name = $_POST['name'];


$sqlQuery = "update categories set 
name = '$name' 
where id ='$id'
";
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

$stmt = $connect -> prepare($sqlQuery);

$stmt->execute(); 

header('location:list-category.php');
?>