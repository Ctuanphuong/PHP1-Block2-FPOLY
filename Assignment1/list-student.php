<?php
require_once "db.php";
$students = getAll();
?>
<div class="container-edit">
<h1>Danh sách sinh viên</h1>
<table   class="styled-table">
    <thead>
        <tr>
            <th>Số thứ tự</th>
            <th>Mã số sinh viên</th>
            <th>Họ tên</th>
            <th>Tuổi</th>
            <th>Giới tính</th>
            <th>Lớp</th>
            <th><a href="add-student.php" class="add-th">Thêm SV</a></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($students as $item ): ?>
        <tr>
        <td><?= $item[0] ?></td>
        <td><?= $item[1] ?></td>
        <td><?= $item[2] ?></td>
        <td><?= 2022-$item[3] ?></td>
        <td><?= ($item[4] == 1?"Nam":"Nữ") ?></td>
        <td><?= $item[5] ?></td>
      <td class="btn-option">
                    <a class="edit-btn" href="edit-student.php?id=<?= $item[0] ?>">Sửa</a>
                    <a class="remove-btn" href="remove-student.php?id=<?= $item[0] ?>">Xóa</a>
                </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>



<!-- 
===CSS=== -->
<style>
    .container-edit h1{ 
        text-align: center;
        color: darkorange;
        font-family: tahoma;
        padding-top: 20px;
    }
    .styled-table {
    border-collapse: collapse;
    margin: 25px auto;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
.add-th{ 
    color: white;
  text-decoration: none;
  background: #654F7B;
  padding: 5px 15px;
  border-radius: 10px; 
  font-weight: bold;
  border: 3px solid  #654F7B;
  margin-left: 3px;
}
.add-th:hover{ 
    color: white;
  background: #41214F;
  border: 3px solid  #41214F;
transition:all 0.2s ease 0.2s;
}
.edit-btn{ 
    background: lightblue;
padding: 5px 10px;
border-radius: 10px;
text-decoration: none;
color: blue;
margin-left: 5px;
}
.remove-btn{ 
    background: Crimson ;
padding: 5px 10px;
border-radius: 10px;
text-decoration: none;
color: white;

}
.edit-btn:hover{ 
    background: blue;
padding: 5px 10px;
border-radius: 10px;
text-decoration: none;
color: white;
margin-left: 5px;
transition:all 0.2s ease 0.2s;
}
.remove-btn:hover{ 
background: red ;
padding: 5px 10px;
border-radius: 10px;
text-decoration: none;
color: white;
transition:all 0.2s ease 0.2s;
}


</style>