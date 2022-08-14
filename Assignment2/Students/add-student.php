

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
    <div class="container-add">
        <h1>Add User</h1>
        <form action="save-add.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div>
                <p>Họ tên</p>
                <input type="text" name="name" placeholder="Enter your name...">
                <?php if(isset($_GET['nameerr'])):?>
                <span style="color: red"><?= $_GET['nameerr']?></span>
            <?php endif ?>
            </div>
            <div>
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter your email...">
                <?php if(isset($_GET['emailerr'])):?>
                <span style="color: red"><?= $_GET['emailerr']?></span>
            <?php endif ?>
            </div>
            <div>
                <p>Avatar</p>
                <input type="file" name="avatar">
                <?php if(isset($_GET['avatarerr'])):?>
                <span style="color: red"><?= $_GET['avatarerr'] ?></span>
            <?php endif ?>
            </div>
         <div>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your password...">
            <?php if(isset($_GET['passworderr'])):?>
                <span style="color: red"><?= $_GET['passworderr']?></span>
            <?php endif ?>
         </div>
            <div>
                <button type="submit">Xác nhận</button>
            </div>
        </form>
    </div>
</body>

</html>

