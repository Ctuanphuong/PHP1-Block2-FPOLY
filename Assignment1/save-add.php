<?php
require_once 'db.php';
$student_code = $_GET['student_code'];
$name = $_GET['name'];
$age  = $_GET['age'];
$gender = $_GET['gender'];
$class = $_GET['class'];
$students = getAll();
$maxId = -1;
foreach ($students as $key => $value) {
    if($maxId < $value[0]){
        $maxId = $value[0];
    }
}
$maxId++;
$students[] = [$maxId, $student_code ,$name, $age, $gender, $class];
saveFileByArr($students);
header("location: list-student.php");
?>