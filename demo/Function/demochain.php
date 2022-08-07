<?php 
// function check_existed($arr,$value) { 
//     $existed = false;
//     foreach($arr as $item) {
//         if($item == $value) { 
//             return true;
//         }
//     }
//     return false;
// }
// function to_upper_str() { 
//     $arrTs = func_get_arg(); 
//     $arrResult = [];
//     foreach($arrTs as $key => $value ) {
// $arrResult[] = mb_strtoupper($value);
//     }
//     return $arrResult;
//     var_dump($arrTs);
// }
// $arrTs = to_upper_str("Chu Tuan Phuong", "FPT", "Web Designer");


echo "<h3>EXPLODE</h3>"."<br>";
// chuyển chuỗi thành mảng dựa vào 1 kí tự
$str = "PH2003|Chu Tuấn Phương|2003|1|WE17319"; 
$arr= explode("|", $str);
var_dump($arr);
echo "<br>";
foreach($arr as $value) { 
    echo $value."<br>";
}


echo "<h3>HTMLENTITIES</h3>"."<br>";
// chuyển chuỗi thành phần tử html
$str = "<script>console.log(1);</script>";
echo $str;
echo "<br>";
echo htmlentities($str);

echo "<h3>LTRIM</h3>"."<br>";
// xóa khoảng trắng ở bên trái của cuỗi
$str = ",,,,,something"; 
echo ltrim($str, ","); 

echo "<h3>RTRIM</h3>"."<br>";
// xóa khoảng trắng ở bên phải của cuỗi
$str = "something,,,,,"; 
echo rtrim($str, ","); 

echo "<h3>TRIM</h3>"."<br>";
// xóa khoảng trắng ở 2 dầu của cuỗi
$str = ",,,,something,,,,,"; 
echo trim($str, ","); 

echo "<h3>MD5()</h3>"."<br>";
//mã hóa chuỗi bằng thuật toán md5
// => md5 và sha1 có 1 điểm chung là 1 chuỗi cố định thì chỉ sinh ra 1 chuỗi

echo "<h3>SHA1</h3>"."<br>";
//Hàm sha1() trong php có tác dụng chuyển một chuỗi sang một chuỗi mới đã được mã hóa theo tiêu chuẩn sha1.
$str = "Hello";
echo sha1($str);

echo "<h3>STR PLACE</h3>"."<br>";
// hamf str place thay thế giá trị trong cuỗi
echo str_replace("World","Peter","Hello World!");

echo "<h3>STR SPLIT</h3>"."<br>";
// Hàm str_split() trong PHP có chức năng chuyển đổi một chuỗi (string) thành một mảng (array). Hàm str_split() sẽ cắt chuỗi thành nhiều chuỗi nhỏ rồi thêm vào làm các phần tử của mảng.
print_r(str_split("Chu Tuan Phuong"));

?>