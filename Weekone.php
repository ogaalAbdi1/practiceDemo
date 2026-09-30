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

// question TWo 
echo "<br>";
$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "The number is divisible by both 3 and 5.";
} elseif ($num % 3 == 0) {
    echo "The number is divisible by 3.";
} elseif ($num % 5 == 0) {
    echo "The number is divisible by 5.";
} else {
    echo "The number is divisible by neither 3 nor 5.";
}


echo "<br>";

// question Three A


for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br>";
// Question Three B


for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

//  question Four 
echo "<br>";

for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }

}

echo "<br>";
// Question five


$num = 12345;
$reverse = 0;

while ($num > 0) {

    $digit = $num % 10;

    $reverse = ($reverse * 10) + $digit;

    $num = intdiv($num, 10);
}

echo "Reverse number: $reverse";


echo "<br>";

// question Ten


for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    if ($num < 2) {
        $isPrime = false;
    }

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }

    }

    if ($isPrime) {
        echo $num . " ";
    }
}





?>