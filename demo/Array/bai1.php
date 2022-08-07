<?php
//Tạo 1 mảng gồm thông số của laptop của mình gồm các key sau: 
// hãng sản xuất
// dòng máy
// dung lượng ram
// dung lượng ổ cứng
//dòng cpu
// giá tiền
// thực hiện tạo mạng, thêm phần tử, sửa thông tin phần tử trong mảng
// xóa  1 phần tử của mảng

$mycomputer = [ 
"product" => "Acer", 
"name" => "Acer Aspire 3", 
"ram" => "8GB", 
"memory" => "512GB", 
"cpu" => "Intel core i3", 
"price" => 16500000,
];
foreach($mycomputer as $key => $value) { 
    var_dump($key); 
    var_dump($value);
    echo "<br>";
}

//thêm phần tử  
$mycomputer["system"] = "64 bit";
echo "<h3>Cập nhật mảng sau khi thêm:</h3>"."<br>";
foreach($mycomputer as $key => $value) { 
    var_dump($key); 
    var_dump($value);
    echo "<br>";
}

//Cập nhật giá trị phần tử
$mycomputer["memory"] ="1024GB";
echo "<h3>Cập nhật mảng sau khi sửa:</h3>"."<br>";
foreach($mycomputer as $key => $value) { 
    var_dump($key); 
    var_dump($value);
    echo "<br>";
}
//xóa 1 phần tử
unset($mycomputer["product"]);
echo "<h3>Cập nhật mảng sau khi sửa:</h3>"."<br>";
foreach($mycomputer as $key => $value) { 
    var_dump($key); 
    var_dump($value);
    echo "<br>";
}
?>

