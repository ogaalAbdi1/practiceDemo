<?php

$num = 12345;
$reverse = 0;

while ($num > 0) {

    $digit = $num % 10;

    $reverse = ($reverse * 10) + $digit;

    $num = intdiv($num, 10);
}

echo "Reverse number: $reverse";

?>