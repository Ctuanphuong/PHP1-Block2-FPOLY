<style>
        .container{ 
            margin: 0 auto;
            text-align: center;
            width: 980px;
        }
        h1{ 
            color: orange;
            
        }
         td { 
          padding: 10px 20px;
        
        }
        table{
            border-collapse: collapse;
          border: 1px solid orange;
          margin: 0 auto;
          
        }
    </style>
<!-- ========================================= -->
    <div class="container">
   <h1>Danh sách sinh viên</h1> 
   <?php
$dataFile = fopen("data.txt", "r");
$arr = [];
while(!feof($dataFile)) {
    $line = fgets($dataFile);
    $lineArr = explode("|", $line);
    $arr[] = $lineArr;
}
fclose($dataFile);
// echo "<pre>";
// var_dump($arr);
?>
   <table border="1">
    <thead>
        <td>MSSV</td>
        <td>Họ tên</td>
        <td>Tuổi</td>
        <td>Giới tính</td>
        <td>Lớp</td>
    </thead>
    <?php foreach($arr as $value): ?>
    <tr>
        <td><?php echo trim($value[0]); ?></td>
        <td><?php echo trim($value[1]); ?></td>
        <td><?php echo trim(2022 - $value[2]); ?></td>
        <td><?php echo trim($value[3] == 1? "Nam" : "Nữ"); ?></td>
        <td><?php echo trim($value[4]); ?></td>
    </tr>
    <?php endforeach ?>
    </table>
   
   </div>