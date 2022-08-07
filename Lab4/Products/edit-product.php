<?php
$id = $_GET['id'];

$sql = "select * from products where id = $id";

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

$stmt = $connect->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit product</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style3.css'>
    <script src='main.js'></script>
</head>

<body>

    <h1>Edit Product</h1>
    <div class="container-add">
        <form action="save-edit.php" method="post" enctype="multipart/form-data">
            <?php foreach ($data as $value) : ?>
                <input type="hidden" name="id" value="<?= $id ?>">
                <div>
                    <p>Name</p>
                    <input type="text" name="name" placeholder="Enter product's name..." value="<?= $value['name'] ?>">
                </div>
                <div>
                    <p>Sku</p>
                    <input type="text" name="sku" placeholder="Enter sku..." value="<?= $value['sku'] ?>">
                </div>
                <div>
                    <p>Price</p>
                    <input type="number" name="price" placeholder="Enter product's price..." value="<?= $value['price'] ?>">
                </div>
                <div>
                    <p>Quantity</p>
                    <input type="number" name="quantity" placeholder="Select quantity" value="<?= $value['quantity'] ?>">
                </div>
                <div>
                    <p>Category ID</p>
                    <input type="number" name="category_id" placeholder="Enter category id..." value="<?= $value['category_id'] ?>">
                </div>
                <div>
                    <p>Image</p>
                    <input type="hidden" name="image" value="<?= $value['image'] ?>">
                    <img src="<?= $value['image'] ?>" style="width:100px;"/>
                    <p>Change image</p>
                    <input type="file" name="new_image">
                </div>
                <div>
                    <p>Detail</p>
                    <textarea id="detailprd" name="detail" rows="4" cols="50"> 
                    <?= $value['detail'] ?>
                </textarea>
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