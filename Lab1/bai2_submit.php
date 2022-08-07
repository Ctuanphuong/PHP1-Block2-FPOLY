<?php
$a = $_GET['soa'];
$b = $_GET['sob'];
$sum = 0;
$count = 0;

//Điều kiện 
if ($a < $b) {
    {
        // Tính và hiển thị tổng các số nằm trong khoảng từ a đến b
        // Đếm và hiển thị tất cả các số chẵn nằm trong khoảng từ a đến b
        for($i = $a; $i <= $b; $i++){
            $sum = $sum + $i;
        }
        echo "Tổng các số từ $a đến $b là: ". $sum. "<br>";
        echo "Các số chẵn: ";
        for($i = $a; $i <= $b; $i++){
            if($i % 2 == 0){
                $count++;
                echo "\t $i";
            }
        }
        echo " <br> Có $count số chẵn nằm trong khoảng từ a đến b ";
        }
}
else if($a > $b) {
    echo "Lỗi! Số a: $a > b: $b"; 
}
else if($a < 0 || $b < 0) { 
    echo "Lỗi! Số bạn vừa nhập nhỏ hơn 0";
}
else { 
    echo "";
}