<?php
// $id = $_GET['id'];

// $sql = "select * from products where id = $id";

// $connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

// $stmt = $connect->prepare($sql);

// $stmt->execute();

// $data = $stmt->fetchAll();

$id = $_GET['id'];

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

$sqlCate = "select * from categories";
$stmt1 = $connect->prepare($sqlCate);
$stmt1->execute();
$dataCate = $stmt1->fetchAll();

$sqlPro = "select * from products where id = '$id'";
$stmt = $connect->prepare($sqlPro);
$stmt->execute();
$dataPro = $stmt->fetch();
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
                <input type="hidden" name="id" value="<?= $id ?>">
                <div>
                    <p>Name</p>
                    <input type="text" name="name" placeholder="Enter product's name..." value="<?= $dataPro['name'] ?>">
                </div>
                <div>
                    <p>Sku</p>
                    <input type="text" name="sku" placeholder="Enter sku..." value="<?= $dataPro['sku'] ?>">
                </div>
                <div>
                    <p>Price</p>
                    <input type="number" name="price" placeholder="Enter product's price..." value="<?= $dataPro['price'] ?>">
                </div>
                <div>
                    <p>Quantity</p>
                    <input type="number" name="quantity" placeholder="Select quantity" value="<?= $dataPro['quantity'] ?>">
                </div>
                <div>
                    <p>Category ID</p>
                    <!-- <input type="number" name="category_id" placeholder="Enter category id..." value=""> -->
                    <select name="category_id" id="">
                <?php foreach ($dataCate as $category) : ?>
                    <option value="<?= $category['id'] ?>" 
                    <?php if ($category['id'] == $dataPro['category_id']) { ?> selected<?php } ?>>
                        <?= $category['name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
                </div>
                <div>
                    <p>Image</p>
                    <input type="hidden" name="image" value="<?= $dataPro['image'] ?>">
                    <img src="<?= $dataPro['image'] ?>" style="width:100px;"/>
                    <p>Change image</p>
                    <input type="file" name="new_image">
                </div>
                <div>
                    <p>Detail</p>
                    <textarea id="detailprd" name="detail" rows="4" cols="50"><?= $dataPro['detail'] ?></textarea>
                </div>

                <div>
                    <button type="submit">Submit</button>
                </div>
        </form>
    </div>

    </form>

</body>

</html>