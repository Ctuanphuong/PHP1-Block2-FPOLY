<?php
$sqlQuery = "select * from projects ";

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1_thi;charset=utf8", "root", "");

$stmt = $connect->prepare($sqlQuery);

$stmt->execute();

$data = $stmt->fetchAll();

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
        <h1>List Member</h1>
        <h3> <a href="../members/index.php">Members</a> </h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Start_date</th>
                    <th>End_date</th>
                    <th>Budget</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th> <a href="add-project.php" class="add-th">Add</a> </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value) : ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td> <?= $value['name'] ?></td>
                        <td><?= $value['code'] ?></td>
                        <td><?= $value['start_date'] ?></td>
                        <td><?= $value['end_date'] ?></td>
                        <td><?= $value['budget'] ?></td>
                        <td><?= $value['created_at'] ?></td>
                        <td><?= $value['updated_at'] ?></td>
                        <td>
                            <a href="edit-project.php?id=<?= $value['id'] ?>">Edit</a>
                            <a href="remove-project.php?id=<?= $value['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>