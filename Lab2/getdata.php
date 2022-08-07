<?php
$mssv = $_GET['mssv'];
$name = $_GET['name'];
$year = $_GET['year'];
$gender = $_GET['gender'];
$class = $_GET['class'];
$lineString = "\n$mssv|$name|$year|$gender|$class";
// var_dump($lineString);
$dataFile = fopen("data.txt", "a");
fwrite($dataFile, $lineString);
fclose($dataFile);
echo "Tạo mới sinh viên thành công!";
?>