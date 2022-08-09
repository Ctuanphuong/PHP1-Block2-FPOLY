<?php 
// $id = $_GET['id'];

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

$sqlCate = "select * from categories";
$stmt1 = $connect->prepare($sqlCate);
$stmt1->execute();
$dataCate = $stmt1->fetchAll();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Add product</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style3.css'>
    <script src='main.js'></script>
</head>

<body>

    <h1>Add Product</h1>
    <div class="container-add">
        <form action="save-add.php" method="post" enctype="multipart/form-data">
            <div>
                <p>Product's name</p>
                <input type="text" name="name" placeholder="Enter product's name...">
            </div>
            <div>
                <p>Sku</p>
                <input type="text" name="sku" placeholder="Enter sku...">
            </div>
            <div>
                <p>Price</p>
                <input type="number" name="price" placeholder="Enter product's price...">
            </div>
            <div>
                <p>Quantity</p>
                <input type="number" name="quantity" placeholder="Select quantity">
            </div>
            <div>
                <p>Category ID</p>
                <!-- <input type="number" name="category_id" placeholder="Enter category id..."> -->
                <select name="category_id" id="">
                <option value="">Select product</option>
                    <?php foreach ($dataCate as $category) : ?>
                        <option value="<?= $category['id'] ?>">
                        <?= $category['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <p>Image</p>
                <input type="file" name="image">
            </div>
            <div>
                <p>Detail</p>
                <textarea id="detailprd" name="detail" rows="4" cols="50"></textarea>
            </div>
            <div>
                <button type="submit">Add</button>
            </div>
        </form>
    </div>

    </form>

</body>

</html>