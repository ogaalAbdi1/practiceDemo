<?php

$num1 = 8;
$num2 = 12;

if ($num1 > $num2) {
    $lcm = $num1;
} else {
    $lcm = $num2;
}

while (true) {

    if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
        break;
    }

    $lcm++;
}

echo "LCM = $lcm";

?>