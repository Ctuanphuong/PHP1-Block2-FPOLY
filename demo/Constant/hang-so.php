<?php
//Hằng số là một tên (dịnh danh) cho một giá trị đơn giản. 
//Gọi là hằng số bởi vì giá trị ứng với tên hằng sau khi định nghĩa là không đổi trong quá trình thi hành script. 


//SỬ DỤNG CONST KHAI BÁO HẰNG SỐ
const MONDAY = "Thứ Hai";
echo "Hôm nay là: ". MONDAY ."<br>";
// hằng số là một mảng các ký tự
const DAYOFWEEK = [
    "Thứ hai", "Thứ ba", "Thứ tư", "Thứ 5", "Thứ 6", "Thứ bảy", "Chủ nhật",
];
// Truy cập đọc hằng số
echo "Cuổi tuần là: " .DAYOFWEEK[5]." và ".DAYOFWEEK[6] ; // chủ nhật

//SỬ DỤNG DEFINE KHAI BÁO HẰNG SỐ
define("WEATHER", "Sunny");
echo "<br>"."Today, It's ". WEATHER;  //Lấy hằng số bằng cách chỉ ra tên
$weather = 'WEATHER';
echo "<br>"."Today, It's ".constant($weather); // Lấy hằng số có tên lưu trong biến $weather

// Kiểm tra xem hằng số MYCOLOR có tồn tại không, nếu không
// thì bắt đầu định nghĩa
if (!defined('MYCOLOR'))
{
    define('MYCOLOR', 'Green');
}
echo  "<br>"."Color is ".MYCOLOR;
?>