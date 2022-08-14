<?php 
// $id = $_GET['id'];


$connect = new PDO("mysql:host=127.0.0.1;dbname=php1_thi;charset=utf8", "root", "");

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
        <h1>Add Member</h1>
        <form action="save-add.php" method="post" enctype="multipart/form-data">
<div>
    <label for="">Name</label> 
    <input type="text" name="name"> <br>
    <?php if(isset($_GET['nameerr'])) : ?>
        <span style ="color: red; font-size: 15px;"><?= $_GET['nameerr']?></span>
    <?php endif ?>
</div>
<div>
    <label for="">is_leader</label>
    <input type="text" name="is_leader">
</div>
<div>
    <label for="">Project_id</label>
    <!-- <input type="text" name="project_id" /> -->
    <select name="project_id" id="project_id"> 
        <option value="">Choose Project ID</option>
        <?php foreach($data1 as $value):?>
       <option value="<?= $value['id'] ?>">
        <?= $value['name'] ?>

       </option>
<?php endforeach ?>
    </select>
</div>
<div>
    <label for="">Avatar</label>
    <input type="file" name="avatar" />
</div>
<div>
    <label for="">Department</label>
    <input type="text" name="department" />
</div>
<div>
    <label for="">Salary</label>
    <input type="number" name="salary" />
</div>
<div>
    <label for="">Phone</label>
    <input type="text" name="phone" />
</div>
<div>
    <label for="">Create_at</label>
    <input type="datetime-local" name="created_at" />
</div>
<div>
    <label for="">Update_at</label>
    <input type="datetime-local" name="updated_at" />
</div>
<button>Add</button>
        </form>
    </div>
</body>
</html>