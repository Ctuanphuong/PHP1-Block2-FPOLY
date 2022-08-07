<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
    <style>
        .container{ 
            width: 800px;
            margin: 20px auto;
            text-align: center;
        }
        table{ 
            border-collapse: collapse;
            width: 100%;
        }
        td { 
            border: 1px solid orange;
           padding: 10px;
           font-size: 18px;
          
        }
      
        .tr1{ 
            font-weight: bold;
        }
        h1{ 
            color: orange;
        }
      
    </style>
</head>
<body>

<!-- //mảng dữ liệu sinh viên -->
<?php 
$students = [
[
  "student_code" => "PH20555", 
  "name" => "Chu Tuấn Phương", 
  "age" => 18, 
  "gender" => 1,
  "major" => 1,
], 
[
    "student_code" => "PH20556", 
    "name" => "Phạm Anh Tuấn", 
    "age" => 18, 
    "gender" => 1,
    "major" => 2,
  ], 
  [
    "student_code" => "PH20557", 
    "name" => "Nguyễn Tâm Như", 
    "age" => 18, 
    "gender" => 2,
    "major" => 4,
  ], 
];
?>
<!-- ---end--- -->

<div class="container">
<h1>Danh sách sinh viên</h1>
<table border="1">
<tr class="tr1">
<td>Mã số sinh viên</td>
<td>Họ tên</td>
<td>Tuổi</td>
<td>Giới tính</td>
<td>Chuyên ngành học</td>
</tr>
<tr>
<?php
for($i = 0; $i < count($students); $i++) { 
     ?>
<td>
<?php echo ($students[$i]["student_code"]) ?>
</td>
<td class="px-30">
<?php echo ($students[$i]["name"]) ?>
</td>
<td>
<?php echo ($students[$i]["age"]) ?>
</td>
<td >
<?php 
if ($students[$i]["gender"] == 1) {
    $students[$i]["gender"] = "Nam";
    echo ($students[$i]["gender"]);
}
else {
    $students[$i]["gender"] = "Nữ";
    echo ($students[$i]["gender"]);
}
 ?>
</td>
<td class="px-30">
<?php 
if ($students[$i]["major"] == 1) {
    $students[$i]["major"] = "Thiết kế Website";
    echo ($students[$i]["major"]); 
} 
else if ($students[$i]["major"] == 2) {
    $students[$i]["major"] = "Lập trình Mobile";
    echo ($students[$i]["major"]); 
} 
else if ($students[$i]["major"] == 3) {
    $students[$i]["major"] = "Phát triển phần mềm";
    echo ($students[$i]["major"]); 
} 
else if ($students[$i]["major"] == 4) {
    $students[$i]["major"] = "Thiết kế đồ họa";
    echo ($students[$i]["major"]); 
} 
?>
</td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>