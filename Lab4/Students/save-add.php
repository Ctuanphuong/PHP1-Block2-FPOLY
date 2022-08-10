<!-- <?php

session_start();
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: ../Asm/login.php');
    die;
}
//Tạo kết nối & thực thi câu lệnh với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

//Nhận dữ liệu từ form

$name = $_POST['name'];
$email = $_POST['email'];
$avatar = $_FILES['avatar'];
$password = $_POST['password'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$folder = strtolower("./uploads/" . uniqid() . '-' . $avatar['name']);
move_uploaded_file($avatar["tmp_name"], $folder);

//kiểm tra dữ liệu
$nameerr = "";
$emailerr = "";
$passworderr = "";
$avatarerr = "";
    
if(strlen($name) == 0){
    $nameerr = "Please enter your name";
}
if($avatar['size'] == 0){ 
    $avatarerr = "Please choose an image";
}

if(strlen($email) == 0){
    $emailerr = "Please enter your email";
}
else{
    $sqlCheckEmail = "select 
                                count(*) as total 
                        from users 
                        where email = '$email'";
 $stmt = $connect->prepare($sqlCheckEmail);
    // 3,2 thực thi câu sql với db  
    $stmt->execute();   
    $countData = $stmt->fetch();
    if($countData['total'] > 0){
        $emailerr = "Email already exists, please choose another email";
    }
}

if(strlen($password) == 0){
    $passworderr = "Please enter your password";
}
if(!empty($emailerr) || !empty($passworderr) || !empty($nameerr) || !empty($avatarerr)){
    header("location: add-student.php?emailerr=$emailerr&passworderr=$passworderr&nameerr=$nameerr&avatarerr=$avatarerr");
    die;
}
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);    
//Xây dựng câu SQl để insert
$insertQuery = "INSERT INTO users(name, email, avatar, password) VALUES ('$name', '$email', '$folder', '$password')";

// 3.1  Nạp câu sql vào kết nối

$stmt = $connect->prepare($insertQuery);
// 3,2 thực thi câu sql với db 

$stmt->execute();

header('location:list-student.php');
?> -->
