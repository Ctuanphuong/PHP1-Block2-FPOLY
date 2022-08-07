<?php 

//mảng là kiểu dữ liệu giúp chứa tập hợp các giá trị (phần tử), Mỗi phần tử trong mảng được xác định = tổ hợp key => value
// các phần tử trong mảng thì ko nhất thiết phải có cùng kiểu dữ liệu

$arr = [
    "name" => "Chu Tuấn Phương", 
    "age" => 19, 
    "is_married" => false, 
    "brother" => [ 
        "Tuấn", 
        "Quân"
    ]
    ]; 
    // in ra tên
    echo $arr["name"]; 
    echo "<br>"; 

    // in ra anh trai thứ 2
    echo "Brother: ".$arr["brother"][1];
echo "<br>";
    //cập nhật giá trị phần tử
    echo "Tuổi: ".$arr["age"];
    echo "<br>";
    $arr["age"] = 18; 
    echo "Tuổi sau khi cập nhật: ".$arr["age"];
    echo "<br>";

    //
    echo "<pre>"; 
    var_dump($arr); 
    // die;

    //bổ sung phần tử
    $arr["wife"] = "Nguyen Tam Nhu"; 
    var_dump($arr);
   
//thêm phần tử
$arr["brother"][] = "Hoàng";
var_dump($arr);


//xóa phần tử khỏi mảng: unset
unset($arr["brother"][2]); 
var_dump($arr);

?>