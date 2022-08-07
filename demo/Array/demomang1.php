<?php
//Tạo mảng $student
//mảng này gồm các mảng con chứa thông tin của các bạn sv trong lắm bao gồm: name, age, gender, major
//trong đó nếu giới tính nam -1, nữ -2, khác -3
//major: tkw -1, ltmb-2, ptpm-3, tkdo-4
//Tạo ra 3 sv trong mảng student

$students = [
    [
        "roll_number => PH20555",
        "name" => "Chu Tuấn Phương", 
        "age" => 19, 
        "gender" => 1, 
        "major" => 1
   
    ],
    [
        "roll_number => PH20556",
        "name" => "Đào Minh Ngọc", 
        "age" => 18, 
        "gender" => 1, 
        "major" => 2
   
    ],
    [
        "roll_number => PH20557",
        "name" => "Phạm Anh Tuấn", 
        "age" => 20, 
        "gender" => 1, 
        "major" => 3
   
    ]
];
for($i = 0; $i < count($students); $i++) { 
     echo ($students[$i]["name"])."<br>";
}

echo "<pre>";
//hiển thị các số nằm trong mảng
$arr =[1,3,5,7,9,11];
for($i = 0; $i < count($arr); $i++) { 
    echo $arr[$i]."\t";
}
?>