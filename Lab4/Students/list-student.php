<?php

require_once "../Asm/check_user.php";
//1. Tạo câu sql để lấy dữ liệu từ db
$sqlQuery = "select * from users";
// 2. Tạo kết nối từ php => mysql
$connect = new PDO(
    "mysql:host=127.0.0.1;dbname=php1;charset=utf8",
    "root",
    ""
);

//3.1 Nạp câu sql vào kết nối
$stmt = $connect->prepare($sqlQuery);
//3.2 Thực thi câu sql với db
$stmt->execute();

// 4. Nhận dữ liệu trả về từ câu sql
$data = $stmt->fetchAll(); //Lấy về tất cả các bản ghi tìm được từ câu sql
// $data = $stmt->fetch(); // lấy ra 1 bản ghi đầu tiên tìm được từ câu sql

// echo "<pre>";
// var_dump($data);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>DS sinh viên</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/style1.css">
    <script src='main.js'></script>
  
</head>

<body>
    <div class="container-edit">
        <div class="flex-menu-top">
            <div>
            <span class="txt-count">Hiện có <?= count($data) ?> tài khoản trong database </span> <br>
                <?php
                if (isset($_SESSION['auth'])) : ?>
                   Hello, <span class="txt-hello"> <?php echo $_SESSION['auth']['name'] ?></span> <br>
                <?php endif ?>
             
              
            </div>
            <div class="container-btn">
                <?php if (isset($_SESSION['auth'])) : ?>
                    <a class="btn-pro" href="../Products/list-product.php">Products</a>
                    <a class="btn-cate" href="../Categories/list-category.php">Categories</a>
                    <a class="btn-out" href="../Asm/logout.php">Thoát</a> <br>
                <?php endif ?>

            </div>
        </div>
        <h1>List User</h1>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th><a href="add-student.php" class="add-th">Thêm</a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value) : ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><img src="<?= $value['avatar'] ?>" alt="Ảnh sinh viên" style="width: 100px; height: 100px; border: 1px solid yellow;"></td>
                        <td class="btn-option">
                            <a class="edit-btn" href="edit-student.php?id=<?= $value['id'] ?>">Sửa</a>
                            <a class="remove-btn" href="remove-student.php?id=<?= $value['id'] ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<style>
    .btn-out{ 
    
        text-decoration: none;
        padding: 10px 15px;
        background: red ;
        color: #ffff;
        border-radius: 10px;
        position: relative;
   
    }
    .btn-out:hover{ 
    
    text-decoration: none;
    padding: 10px 15px;
    background: darkred ;
    color: #ffff;
    border-radius: 10px;
    position: relative;

 transition: all .4s;
}

    .flex-menu-top{ 
    margin-top: 10px;
}
.txt-hello{ 
    font-weight: bold ;
}
.txt-count{ 
    background-color: yellow;
}
.flex-menu-top{ 
    display: flex;
    justify-content: space-between;
}
.container-btn{ 
    top: 20px;
    position: relative;
    right: 50px;
}
.btn-pro{ 
    text-decoration: none;
        padding: 10px 15px;
        background: green ;
        color: #ffff;
        border-radius: 10px;     
}
.btn-cate{ 
    text-decoration: none;
        padding: 10px 15px;
        background: blue ;
        color: #ffff;
        border-radius: 10px;     
}
.btn-pro:hover{ 
    text-decoration: none;
        padding: 10px 15px;
        background: darkgreen ;
        color: #ffff;
        border-radius: 10px;    
        transition: all .4s; 
}
.btn-cate:hover{ 
    text-decoration: none;
        padding: 10px 15px;
        background: darkblue ;
        color: #ffff;
        border-radius: 10px;  
        transition: all .4s;    
}
</style>