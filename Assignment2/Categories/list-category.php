<?php

$sqlQuery = "select * from categories";
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");
$stmt = $connect->prepare($sqlQuery);
$stmt -> execute();
$data = $stmt -> fetchAll();
// echo "<pre>"; 
// var_dump($data);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>List Category</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="../css/style3.css">
    <script src='main.js'></script>
</head>
<body>
<section>
<div class="flex-container">
  <a class="btn-stu" href="../Students/list-student.php">Students</a>
  <a class="btn-pro" href="../Products/list-product.php">Products</a>
  <a class="btn-out" href="../Asm/logout.php">Thoát</a> <br>
</div>
    <h1>List Category</h1>
  
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          
          <th>ID</th>
          <th>Name</th>
          <th><a class="add-btn" href="add-category.php">Add</a></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php foreach($data as $value):?>
        <tr>
          <td><?= $value['id']?></td>
          <td><?= $value['name']?></td>
         
          <td class="btn-option">
                        <a class="edit-btn" href="edit-category.php?id=<?= $value['id'] ?>">Edit</a>
                       <a class="remove-btn" href="remove-category.php?id=<?= $value['id'] ?>">Remove</a>
                    </td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
  </div>
</section>

</body>
</html>

<style>
   .flex-container{ 
   /* display: flex;
   justify-content: end; */
margin: 20px;
text-align: end;
  }
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
.btn-pro{ 
    text-decoration: none;
        padding: 10px 15px;
        background: blue ;
        color: #ffff;
        border-radius: 10px;     
}
.btn-pro:hover{ 
    text-decoration: none;
        padding: 10px 15px;
        background: darkblue ;
        color: #ffff;
        border-radius: 10px;  
        transition: all .4s;    
}
.btn-stu{ 
    text-decoration: none;
        padding: 10px 15px;
        background: green ;
        color: #ffff;
        border-radius: 10px;     
}
.btn-stu:hover{ 
    text-decoration: none;
        padding: 10px 15px;
        background: darkgreen ;
        color: #ffff;
        border-radius: 10px;    
        transition: all .4s; 
}
</style>