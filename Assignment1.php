<?php

$num1 = 25;
$num2 = 10;
$num3 = 40;

if ($num1 >= $num2 && $num1 >= $num3) {
    $greatest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $greatest = $num2;
} else {
    $greatest = $num3;
}

if ($num1 <= $num2 && $num1 <= $num3) {
    $smallest = $num1;
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    $smallest = $num2;
} else {
    $smallest = $num3;
}

echo "Greatest number: $greatest <br>";
echo "Smallest number: $smallest";

?>