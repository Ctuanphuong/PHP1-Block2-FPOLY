<?php

$sqlQuery = "select * from products";
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
    <title>List product</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="../css/style3.css">
    <script src='main.js'></script>
</head>
<body>
<section>
    <h1>List Product</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Sku</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Category_id</th>
          <th>Detail</th>
          
          <th><a class="add-btn" href="add-product.php">Add</a></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php foreach($data as $value):?>
        <tr>
          <td><img src="<?= $value['image'] ?>" alt="product's image" style="width: 100px; height: 100px; border: 1px solid yellow;"></td>
          <td><?= $value['name']?></td>
          <td><?= $value['sku']?></td>
          <td><?= $value['price']?></td>
          <td><?= $value['quantity']?></td>
          <td><?= $value['category_id']?></td>
          <td><?= $value['detail']?></td>
          <td class="btn-option">
                        <a class="edit-btn" href="edit-product.php?id=<?= $value['id'] ?>">Edit</a>
                       <a onclick="Xóa không?" class="remove-btn" href="remove-product.php?id=<?= $value['id'] ?>">Delete</a>
                    </td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
  </div>
</section>

</body>
</html>