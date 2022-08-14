<?php 
$id = $_GET['id'];

$sqlEdit = "select * from projects where id = '$id' ";

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1_thi;charset=utf8", "root", "");

$stmt = $connect->prepare($sqlEdit);

$stmt->execute();

$data = $stmt->fetchAll();
// echo "<pre>";
// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Edit Project</h1>
        <form action="save-edit.php" method="post" enctype="multipart/form-data">
            <?php foreach( $data as $value) : ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" value="<?= $value['name'] ?>">
            </div>
            <div>
                <label for="">Code</label>
                <input type="text" name="code" value="<?=  $value['code'] ?>">
            </div>
            <div>
                <label for="">Start_date</label>
                <input type="date" name="start_date" value="<?=  $value['start_date'] ?>">
            </div>
            <div>
                <label for="">End_date</label>
                <input type="date" name="end_date" value="<?= $value['end_date'] ?>">
            </div>
            <div>
                <label for="">Budget</label>
                <input type="text" name="budget" value="<?=  $value['budget'] ?>">
            </div>
            <div>
                <label for="">Create_at</label>
                <input type="datetime-local" name="created_at" value="<?=  $value['created_at']?>">
            </div>
            <div>
                <label for="">Update_at</label>
                <input type="datetime-local" name="updated_at" value="<?=  $value['updated_at']?>">
            </div>
            <button>Submit</button>
        </form>
        <?php endforeach ?>
    </div>
</body>

</html>