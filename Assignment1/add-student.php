
<div class="container-add">
<h1>Thêm sinh viên</h1>
<form action="save-add.php">
    <div>
        <p>Mã số sinh viên</p> 
        <input type="text" name="student_code" placeholder="Nhập mã số sinh viên...">
    </div>
    <div>
        <p>Họ tên</p> 
        <input type="text" name="name"  placeholder="Nhập họ tên sinh viên...">
    </div>
    <div>
        <p>Năm sinh</p> 
        <input type="number" name="age"  placeholder="Nhập năm sinh...">
    </div>
    <div>
        <p>Giới tính</p> 
     <select name="gender" id="">
        <option value="">Chọn giới tính</option>
       <option value="1">Nam</option>
       <option value="2">Nữ</option>
      
    </div>
    <div>
        <p>Lớp</p>
        <input type="text" name="class"  placeholder="Nhập tên lớp...">
    </div>
    <div>
        <button type="submit">Thêm</button>
    </div>
</form>
</div>

<style>
    .container-add{ 
    width: 500px;
    background-color: aquamarine;
    margin: 0 auto; 
}
.container-add h1{ 
    padding-top: 20px;
    text-align: center;
   color: orange;
   font-weight: 900;

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
.container-add select{ 
    border-radius: 10px;
    width: 120px;
    height: 20px;
    margin-bottom:17px;
   
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
</style>
