<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/stylelogin.css">
</head>

<body>

    <div class="logo">
        <a href="index.php"><img src="../images/logo.jpg" alt="Ảnh logo"></a>
    </div>
    <div class="login-block">
        <h1>Login</h1>

        <form action="post-login.php" method="post">
            <input type="text" value="" placeholder="Enter your email..." name="email" />
            <?php if (isset($_GET['emailerr'])) : ?>
                <span style="font-size: 15px;color: red;"><?= $_GET['emailerr'] ?></span>
            <?php endif ?>
            <input type="password" value="" placeholder="Enter your password..." name="password" />
            <?php if (isset($_GET['passworderr'])) : ?>
                <span style="font-size: 15px;color: red;"><?= $_GET['passworderr'] ?></span>
            <?php endif ?>
            <button type="submit" name="login">Log In</button>
        </form>
    </div>
</body>

</html>