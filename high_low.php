<?php


    $number = rand(1, 100);
    $guess = 0;
    fwrite(STDOUT, "guess number between 1 - 100\n");

do {
    $user = fgets(STDIN) . PHP_EOL;
    $guess++;
    if ($user == $number) {
        echo "Correctomundo. it took you only $guess tries!\n";
    } elseif ($user < $number) {
        echo "higher\n";
    } else {
        echo "lower\n";
    }

} while ($number != $user);