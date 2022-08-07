<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
    <style>

        h1 { 
            color: blue;
            text-align: center;
        }
       .container { 
border: 2px solid blue;
width: 500px;
margin: 0 auto;
       }
       .mx-3{ 
        margin: 10px 50px;
       }
       input{ 
        width: 300px;
        height: 30px;
       }
       select { 
        width: 300px;
        height: 30px;
       }
       button{ 
        width: 80px;
    height: 30px;
        background-color: blue;
        border: 1px solid blue;
       margin: 10px 200px;
       color: white;
       }
    </style>
</head>
<body>
    <div class="container">
    <h1>Thêm sinh viên</h1>
    <form action="getdata.php" method="get">
        <div class="mx-3">
            MSSV: <input type="text" name="mssv">
        </div>
        <div  class="mx-3">
            Họ và tên: <input type="text" name="name">
        </div>
        <div class="mx-3">
            Năm sinh: <input type="number" name="year">
        </div>
        <div class="mx-3">
            Giới tính: <select name="gender" >
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
            </select>
        </div>
        <div class="mx-3">
            Lớp: <input type="text" name="class">
        </div>
        <div>
            <button type="submit">Lưu</button>
        </div>
    </form>
    </div>
</body>
</html>