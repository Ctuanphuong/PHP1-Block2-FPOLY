<?php 
$sqlQuery = "select m.*, p.name as project_name
  from members m join projects p on m.project_id = p.id";

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
        <h3> <a href="../projects/index.php">Projects</a> </h3>
        <table border="1" > 
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Project_Name</th>
                <th>Is_Leader</th>
                <th>project_id</th>
                <th>Avatar</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Phone</th>
                <th>Create_at</th>
                <th>Update_at</th>
                <th> <a href="add-member.php" class="add-th">Add</a> </th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $value): ?>
                <tr>
                <td><?= $value['id'] ?></td>
                <td> <?= $value['name'] ?></td>
                <td> <?= $value['project_name']?></td>
                <td><?= $value['is_leader'] ?></td>
                <td><?= $value['project_id'] ?></td>
                <td><img src="<?= $value['avatar'] ?>" width="100px"></td>
                <td><?= $value['department'] ?></td>
                <td><?= $value['salary'] ?></td>
                <td><?= $value['phone'] ?></td>
                <td><?= $value['created_at'] ?></td>
                <td><?= $value['updated_at'] ?></td>
                <td>
                    <a href="edit-member.php?id=<?= $value['id'] ?>">Edit</a>
                    <a href="remove-member.php?id=<?= $value['id'] ?>">Delete</a>
                </td>
                </tr>
                <?php endforeach ?>
            </tbody>
             </table>
    </div>
</body>
</html>