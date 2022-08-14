<?php
$id = $_GET['id'];

$sqlEdit = "select * from members where id = '$id' ";

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1_thi;charset=utf8", "root", "");

$stmt = $connect->prepare($sqlEdit);

$stmt->execute();

$data = $stmt->fetch();

// select data projects

$sqlProject = "select * from projects";

$stmt1 = $connect->prepare($sqlProject);

$stmt1->execute();

$data1 = $stmt1->fetchAll();
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
        <h1>Edit Member</h1>
        <form action="save-edit.php" method="post" enctype="multipart/form-data">
           
                <input type="hidden" name="id" value="<?= $id ?>">
                <div>
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?= $data['name'] ?>">
                </div>
                <div>
                    <label for="">is_leader</label>
                    <input type="text" name="is_leader" value="<?= $data['is_leader'] ?>">
                </div>
                <div>
                    <label for="">Project_id</label>
                 
                    <select name="project_id" id="">
                        <option value="">Choose Project ID</option>
                        <?php foreach ($data1 as $pro) : ?>
                            <option value="<?= $pro['id'] ?>"
                             <?php if ($pro['id'] == $data['project_id']) : ?> selected <?php endif ?>>
                                <?= $pro['name'] ?>

                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div>
                    <label for="">Avatar</label>
                    <input type="hidden" name="avatar" value="<?= $data['avatar'] ?>">
                    <img src="<?= $data['avatar'] ?>" alt="avatar img" width="100px">
                   <br>
                    <label for="">Change Avatar</label>
                    <input type="file" name="new_avatar">
                </div>

                <div>
                    <label for="">Department</label>
                    <input type="text" name="department" value="<?= $data['department'] ?>">
                </div>
                <div>
                    <label for="">Salary</label>
                    <input type="number" name="salary" value="<?= $data['salary'] ?>">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="<?= $data['phone'] ?>">
                </div>
                <div>
                    <label for="">Create_at</label>
                    <input type="datetime-local" name="created_at" value="<?= $data['created_at'] ?>">
                </div>
                <div>
                    <label for="">Update_at</label>
                    <input type="datetime-local" name="updated_at" value="<?= $data['updated_at'] ?>">
                </div>
                <button>Submit</button>
        </form>
   
    </div>
</body>

</html>