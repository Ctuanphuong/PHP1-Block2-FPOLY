<?php
// strtotime => chuyển đổi 1 chuỗi (có format năm-tháng-ngày) => nhãn thời gian
$str = strtotime("2022-07-26 10:54:01 + 18 hours"); 
//date 
// ts1: format muốn hiển thị (tham khảo: https://www.php.net/manual/en/function.date.php)
// ts2: nhãn thời gian
$d = date('F d,Y', $str); 
var_dump($d);
echo "<br>";
$days = strtotime("2003-08-18 10:54:01");
$birthday = date('F d, Y, h:i:s',$days);
echo $birthday."<br>";

// Nếu muốn hỉnh định dạng người dùng nhập từ form sang định dạng lưu trong db thì sử dụng đoạn  code dưới đây
$ymd = DateTime::createFromFormat('d/m/Y', '18/08/2003')
->format('Y-m-d'); 
var_dump($ymd);die;

// $a = 10;
function test($x) { 
    $x = 15;
    echo $x;
}
// test($a); 
// echo "<br>";
// echo $a;

// //hàm Isset: trả về giá true nếu biến tồn tại và được gán một giá trị khác null
// isset($a); // => false

// $a = 10; 
// isset($a); //true

// $a = null; 
// isset($a); //false

?>