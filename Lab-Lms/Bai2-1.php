<!-- Bài 1 -->
<?php
echo "<h3>Bài 1:</h3>";
$color = ["red", "green", "white"];
print_r($color);
echo "<br>"; 
echo $color[0];
echo "<br>"; 
$age = array();
$age[0] = 10;
$age[1] = 20;
$age[2] = 30;
print_r($age);
?>
<!-- Bài 2 -->
<?php

echo "<h3>Bài 2:</h3>";
$salaries = [
   "mohamad" => 2000,
   "qadir" => 1000,
   "zara" => 500
];
echo "Salary of Mohamad is: ". $salaries["mohamad"]. "$"."<br />";
echo "Salary of Qadir is: ". $salaries["qadir"]."$". "<br />";
echo "Salary of Zara is: ". $salaries["zara"]. "$"."<br />";
print_r($salaries);
?>
<!-- Bài 3 -->
<?php
echo "<h3>Bài 3:</h3>";
define('LOCATOR', "/locator");
define('CLASSES', LOCATOR."/code/classes");
define('FUNCTIONS', LOCATOR."/code/functions");
define('USERDIR', LOCATOR."/user");
?>

