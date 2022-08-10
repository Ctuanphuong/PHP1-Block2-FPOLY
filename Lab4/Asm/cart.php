<?php
session_start();
//Tạo kết nối & thực thi câu lệnh với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");
$sqlGetProducts = "select * from products";
$stmt = $connect->prepare($sqlGetProducts);
$stmt->execute();
$products = $stmt->fetchAll();
?>
<link rel="stylesheet" href="../css/cart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<table border="1" class="flat-table flat-table-1">
    <div class="text-logo">
      <p>Products of</p><a href="index.php">Coza Store</a>
    </div>
    <thead>
        <th>Image</th>
        <th>ID</th>
        <th>Name</th>
        <th>Sku</th>
        <th>Detail</th>
        <th>Price</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach ($products as $p) : ?>
            <tr>
                <td><img width="100px" src="../Products/<?= $p['image'] ?>"></td>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
                <td><?= $p['sku'] ?></td>
                <td><?= $p['detail'] ?></td>
                <td><?= $p['price'] ?></td>
                <td>
                    <a class="btn-add" href="add-to-cart.php?id=<?= $p['id'] ?>">Add to cart</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<div class="btn-back">
      <a class="btn-back-item" href="index.php"><i class="fa-solid fa-arrow-left"> Back home </i></a>
      <!-- <a class="btn-list" href="add-to-cart.php">Shopping Cart</a> -->
    </div>
<style>
 .text-logo{ 
    align-items: center;
    justify-content: center;
display: flex;
font-size: 50px;
font-weight: bold;
color: #FF6347;

 }
.text-logo p{ 
    padding: 0;
    margin: 0;
}
 .text-logo>a{ 
    text-decoration: none;

margin-left: 15px;
color: #00FA9A;
 }
 .text-logo>a:hover{ 
    color: #32CD32;
    transition: all .4s ease;
 }
 .btn-add{ 
    background-color: #00FF7F;
    padding: 5px 10px;
   
    border-radius: 10px;
    text-decoration: none;
    color: #ffff;
    font-size: 20px;
    font-weight: bold;
 }
 .btn-add:hover{ 
    background-color: #32CD32;
    padding: 5px 10px;
   transition: all .4s;
    border-radius: 10px;
    text-decoration: none;
    color: #ffff;
    font-size: 20px;
    font-weight: bold;
 }
 
 .btn-back{ 
    align-items: center;
    justify-content: center;
display: flex;
font-size: 20px;
font-weight: bold;
color: #FF6347;

 }

 .btn-back .btn-back-item{ 
    text-decoration: none;
margin-top: 10px;
margin-left: 15px;
margin-bottom:10px;
color: #00FA9A;
 }
 .btn-back  .btn-back-item:hover{ 
    color: #32CD32;
    transition: all .4s ease;
 }
 .btn-list{ 
  margin-left: 20px;
  text-decoration: none;
  padding: 10px 10px;
  background-color: #66CDAA;
  border-radius: 10px;
  color: #ffff;
  font-weight: bold;
}
.btn-list:hover{ 
  background-color: #008B8B;
  transition: all .4s;
}
</style>