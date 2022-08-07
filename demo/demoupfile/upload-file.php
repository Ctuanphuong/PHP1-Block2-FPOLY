<?php
$name = $_POST['name']; 
$file = $_FILES['avatar']; 
$forder = "uploads/".uniqid().'-'.$file['name'];
move_uploaded_file($file['tmp_name'], $forder );
// move_uploaded_file($file['tmp_name'], './uploads/'. $file['name']);
// move_uploaded_file($file['tmp_name'], $file['name']);
echo "done";
// var_dump($name);
// echo"<pre>";
// var_dump($file);
?>