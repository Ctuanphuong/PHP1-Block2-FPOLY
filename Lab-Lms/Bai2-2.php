<!-- Bài 1 -->
<?php
echo "<h3>Bài 1:</h3>";
$age = 50; 
if($age < 30) { 
    echo "Your age is less than 30!";
}
else if($age > 30 && $age < 40) { 
    echo "Your age is between 30 and 40!";
}
else if($age > 40 && $age < 50) { 
    echo "Your age is between 40 and 50!";
}
else { 
    echo "Your age is greater than 50!";
}
?>
<!-- Bài 2 -->

<?php
echo "<h3>Bài 1:</h3>";
$max = 0;
$i = 0;
echo "i = $i"."<br>";
$j = 1;
echo "j = $j"."<br>";

$result = 0;
echo "<br>"."Result: ";
while ($max  < 10) { 
    $result = $i + $j;
    $i = $j;
    $j = $result;
    $max++;
   echo "$result".", ";
}
?>

<!-- Bài 3 -->
<?php
echo "<h3>Bài 3:</h3>";
$fruits = ["apple", "banana", "orange", "grapes"];
foreach($fruits as $fruits) { 
    echo $fruits."<br>";
}
echo "<br>";
$employee = [
    'name' => 'Chu Tuan Phuong', 
    'age' => 18, 
    'profession' => "Web Designer",
 ];
 foreach($employee as $key => $value) { 
    echo sprintf("%s: %s<br>", $key, $value);
   
 }
?>
<!-- Bài 4 -->
<?php
echo "<h3>Bài 4:</h3>";
echo "Simple Break: ";
for($i = 1; $i <= 2; $i++) { 
    echo "\n".'$i= '.$i.' ';
    for($j = 1; $j <= 5; $j++) { 
        if($j == 2) { 
            break;
        }
        echo '$j = '.$j.'<br>';
    }
}

// Simple Break
// i = 1 j = 1
// i = 2 j= 1

echo "<br>".'Multi-level Break: '; 
for($i = 1; $i < 2; $i++) { 
    echo "\n".'$i = '.$i.' ';
    for($j = 1; $j <=5; $j++) { 
        if($j == 2) { 
            break 2;
        }
        echo '$j = '.$j. ' ';
    }
}
?>