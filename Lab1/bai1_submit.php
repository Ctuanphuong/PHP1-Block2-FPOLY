<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lab1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='main.js'></script>
    <style>
        .container{ 
            line-height: 20px;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Thông tin sinh viên</h1>
    <?php 
$hoten = $_GET['hoten']; 
$mssv = $_GET['masosinhvien'];
$gioitinh = $_GET['gioitinh'];
$diachi = $_GET['diachi'];
$chuyennganh = $_GET['chuyennganh'];

echo "Họ tên: {$hoten}"."<br>";
echo "Mã số sinh viên: {$mssv}"."<br>";;
echo "Giới tính: {$gioitinh}"."<br>";;
echo "Địa chỉ: {$diachi}"."<br>";;
echo "Chuyên ngành học: {$chuyennganh}"."<br>";;
?>
</div>
</body>

</html>