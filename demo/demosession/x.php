<?

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$insertQuery = "INSERT INTO users(name, email, avatar,  password) VALUES ('$name','$email','$folder', $password)";
//Tạo kết nối & thực thi câu lệnh với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");
// 3.1  Nạp câu sql vào kết nối

$stmt = $connect->prepare($insertQuery);
// 3,2 thực thi câu sql với db 

$stmt->execute();



?>