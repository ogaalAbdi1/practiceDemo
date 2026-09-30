<?php

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