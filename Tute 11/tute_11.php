//Tutorial 11
//1

<?php
$x = 6;
$y = 4;

$sum = $x + $y;
$diff = $x - $y;
$product = $x * $y;
$division = $x / $y;

echo "Sum: $sum <br>";
echo "Difference: $diff <br>";
echo "Product: $product <br>";
echo "Division: $division <br>";
?>

//2

<?php
for ($i = 5; $i <= 15; $i++) {
  echo "$i ";
}
?>

//3

<?php
$units = 120; 

if ($units <= 50) {
  $bill = $units * 3.50;
} elseif ($units <= 100) {
  $bill = 50 * 3.50 + ($units - 50) * 4.00;
} elseif ($units <= 150) {
  $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
} else {
  $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
}

echo "Electricity Bill: Rs. $bill";
?>

//4

<?php
$dayNumber = 3;

switch ($dayNumber) {
  case 1:
    echo "Monday";
    break;
  case 2:
    echo "Tuesday";
    break;
  case 3:
    echo "Wednesday";
    break;
  case 4:
    echo "Thursday";
    break;
  case 5:
    echo "Friday";
    break;
  case 6:
    echo "Saturday";
    break;
  case 7:
    echo "Sunday";
    break;
  default:
    echo "Invalid number";
    break;
}
?>

//05

<?php
$fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");

foreach ($fruits as $fruit) {
  echo $fruit . "<br>";
}
?>

