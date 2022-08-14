<?php
session_start();
$cart = $_SESSION['cart'];
$totalPrice = 0;
?>
<link rel="stylesheet" href="../css/cart-detail.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

 <div id="wrapper">
  <h1>Your Shopping Cart</h1>
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
      <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    <th>Image</th>

      </tr>
    </thead>
    <?php foreach ($cart as $value): ?>
            <?php
                
                $totalPrice += $value['quantity']*$value['price'];    
            ?>
            <tr>
                <td><?= ($value['id'])?></td>
                <td><?= ($value['name'])?></td>
                <td><?= ($value['price'])?></td>
                <td><?= ($value['quantity'])?></td>
                <td><img width="100px" src="../Products/<?= $value['image'] ?>"></td>
            </tr>
        <?php endforeach?>
        <tr class="bg-blue">
            <td colspan="3">Total Money</td>
            <td></td>
            <td><?= $totalPrice?></td>
        </tr>
    </tbody>
  </table>
  <div class="text-logo">
  
      <a class="btn-back "href="index.php"><i class="fa-solid fa-arrow-left"> Back home </i></a>
      <a class="btn-list" href="cart.php">List product</a>
    </div>
 </div> 
</body>
<style>
 .text-logo{ 
    align-items: center;
    justify-content: center;
display: flex;
font-size: 50px;
font-weight: bold;
color: #FF6347;

 }

 .text-logo .btn-back{ 
    text-decoration: none;
margin-top: 10px;
margin-left: 15px;
margin-bottom:10px;
color: #00FA9A;
 }
 .text-logo .back:hover{ 
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