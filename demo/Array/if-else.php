<?php
echo "<h4>Số chia hết cho 3</h4>";
$arr = [1,3,5,6,7,10,17,21,12,9,4];

// đếm số lượng các số chia hết cho 3
// Hiển thị giá trị nhỏ nhất và lớn nhất trong mảng
$count = 0;
$sum = 0;
echo "Các số chia hết cho 3 là: ";
foreach ($arr as $key => $value) { 
    if ($value % 3 == 0 ) { 
    $count++;
    $sum += $value;
    echo "\t $value";
    }
}
echo "<br>"."Có $count số chia hết cho 3 "."<br>";
echo "Tổng các số chia hết cho 3 là: $sum "."<br>";

// tìm giá trị lớn nhất và nhỏ nhất
$max = max($arr); 
$min = min($arr); 
echo "Giá trị lớn nhất trong mảng là: $max"."<br>";
echo "Giá trị nhỏ nhất trong mảng là: $min"."<br>";


echo "<h4>Kết hôn</h4>";
$name = $_GET['name']; 
$year = $_GET['year'];
$gender = $_GET['gender']; 
$age = 2022 - $year;
if(($gender == 1 && $age >= 18) || ($gender == 1 && $age >= 16)) { 
    echo "Đã đủ tuổi kết hôn";
}
else { 
    echo "Chưa đủ tuổi kết hôn";
}

?>
