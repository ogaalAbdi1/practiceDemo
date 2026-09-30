<?php

$num = 7;
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
    echo "$num is a prime number.";
} else {
    echo "$num is a non-prime number.";
}

?>