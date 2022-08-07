<?php 
//từ khóa foreach
//arr2: tên mảng
//$key: giá trị key của phần tử
//$value: giá trị tương ứng của phần tử
$arr2 = [
    "name" => "Chu Tuấn Phương", 
    "age" => 19, 
    "brother" => [ 
        "Tuấn", 
        "Quân"
    ]
    ]; 
foreach($arr2 as $key => $value) { 
    // var_dump($key); 
    // var_dump ($value); 
   
    echo "<br>";
   echo $value;
}

?>