<?php
require_once 'db.php';
$id = $_GET['id'];
$student_code = $_GET['student_code'];
$name = $_GET['name'];
$age  = $_GET['age'];
$gender = $_GET['gender'];
$class = $_GET['class'];
$students = getAll();
$index = -1;
foreach($students as $key => $value){
    if($value[0] == $id){
        $index = $key;
        break;
    }
}

$students[$index][1] = $student_code;
$students[$index][2] = $name;
$students[$index][3] = $age;
$students[$index][4] = $gender;
$students[$index][5] = $class;
saveFileByArr($students);
header("location: list-student.php");
?>