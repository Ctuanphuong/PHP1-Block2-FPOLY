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
        <h1>Add Project</h1>
        <form action="save-add.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="">Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">Code</label>
                <input type="text" name="code">
            </div>
            <div>
                <label for="">Start_date</label>
                <input type="date" name="start_date" />
            </div>
            <div>
                <label for="">End_date</label>
                <input type="date" name="end_date" />
            </div>
            <div>
                <label for="">Department</label>
                <input type="text" name="department" />
            </div>
            <div>
                <label for="">Budget</label>
                <input type="number" name="budget" />
            </div>
            <div>
                <label for="">Created_at</label>
                <input type="datetime-local" name="created_at" />
            </div>
            <div>
                <label for="">Updated_at</label>
                <input type="datetime-local" name="updated_at" />
            </div>
            <button>Add</button>
        </form>
    </div>
</body>

</html>