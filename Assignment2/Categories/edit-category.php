<?php
$id = $_GET['id'];

$sql = "select * from categories where id = $id";

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

$stmt = $connect -> prepare($sql);

$stmt -> execute(); 

$data = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit Category</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="../css/style3.css">
    <script src='main.js'></script>
</head>
<body>

        <h1>Edit Category</h1>
        <div class="container-add">
        <form action="save-edit.php" method="post">
            <?php foreach($data as $value): ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div>
                <p>Name</p>
                <input type="text" name="name" placeholder="Enter product's name..." value="<?= $value['name'] ?>">
            </div>
                    <div>
                <button type="submit">Submit</button>
            </div>
            <?php endforeach; ?>
        </form>
    </div>
</form>

</body>
</html>
