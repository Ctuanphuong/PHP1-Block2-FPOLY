<?php
require_once 'db.php';
$students = getAll();
$id = $_GET['id'];
$item = [];
foreach($students as $value){
    if($value[0] == $id){
        $item = $value;
        break;
    }
}

?>

<div class="container-add">
<h1>Sửa thông tin sinh viên</h1>
<form action="save-edit.php">
<input type="hidden" name="id" value="<?= $id ?>">
    <div>
        <p>Mã số sinh viên</p> 
        <input type="text" name="student_code" placeholder="Nhập mã số sinh viên..." value="<?= trim($item[1]) ?>" ?>
    </div>
    <div>
        <p>Họ tên</p> 
        <input type="text" name="name"  placeholder="Nhập họ tên sinh viên..." value="<?= trim($item[2]) ?>" ?>
    </div>
    <div>
        <p>Năm sinh</p> 
        <input type="number" name="age"  placeholder="Nhập năm sinh..." value="<?= trim($item[3]) ?>"?>
    </div>
    <div >
        <p>Giới tính</p> 
     <select name="gender" id="">
     <option  value="">Chọn giới tính</option>
       <option  
       <?php if($item[4] == 1) { 
        echo "selected";
       } ?> value="1">Nam</option>
       <option  
       <?php if($item[4] == 2) { 
        echo "selected";
       } ?> value="2">Nữ</option>
       
    </div>
    <div>
        <p>Lớp</p>
        <input type="text" name="class"  placeholder="Nhập tên lớp..." value="<?= trim($item[5]) ?>"?>
    </div>
    <div>
        <button type="submit">Xác nhận</button>
    </div>
</form>
</div>

<style>
    .container-add{ 
    width: 500px;
    background-color: green;
    margin: 0 auto; 
}
.container-add h1{ 
    padding-top: 20px;
    text-align: center;
   color: orange;
   font-weight: 900;

}
.container-add p{ 
    color: white;
    font-weight: 20px;
}
.container-add form { 
    margin: 20px 150px;
}
.container-add input[type=text]{ 
    width: 200px;
    outline: none;
    border: 1px solid white;
    height: 25px;
}
.container-add input[type=number]{ 
    width: 200px;
    outline: none;
    border: 1px solid white;
    height: 25px;
}

.container-add input[type=text]:focus{ 
    width: 200px;
    background: lightgray;
    outline: none;
   
}
.container-add input[type=number]:focus{ 
    width: 200px;
    outline: none;
    background: lightgray;
}
.container-add input[type=radio] { 
    fill: red;
}
.container-add button{ 
    width: 80px;
    height: 25px;
    background: orange;
    color: white; 
    font-weight: bold;
    border: 1px solid orange;
margin: 20px 60px;
}
.container-add button:hover{ 
    width: 80px;
    height: 25px;
    background: darkorange;
    color: white; 
    font-weight: bold;
    border: 1px solid orange;
margin: 20px 60px;
}
.container-add select{ 
    border-radius: 10px;
    width: 120px;
    height: 20px;
    margin-bottom:17px;
   
}

</style>
