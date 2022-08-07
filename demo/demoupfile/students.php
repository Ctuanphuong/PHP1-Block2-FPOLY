<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="upload-file.php" method="POST" enctype="multipart/form-data">
<label for="">Họ và tên</label>
<input type="text" name="name">
<br>
Ảnh: <input type="file" name="avatar">
<br>
<button type="submit">Submit</button>

    </form>
</body>
</html>