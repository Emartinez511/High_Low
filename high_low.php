<?php

$tries = 0;
fwrite(STDOUT, "I'm thinking of a number between 1 through 100. Can you guess my number?\n");
if ($argc != '3') {
        $number = mt_rand(1, 100);
    do {
        $user = fgets(STDIN) . PHP_EOL;
        $tries++;
        if ($user == $number) {
            echo "Correctomundo. It took you only $tries tries!\n";
        } elseif ($user < $number) {
            echo "nope. higher\n";
        } else {
            echo "guess again. lower\n";
        }
    } while ($number != $user);
 
} else {  
    $number = mt_rand($argv[1], $argv[2]);
    do {
        $user = fgets(STDIN) . PHP_EOL;
        $tries++;
        if ($user == $number) {
            echo "Correctomundo. It took you only $tries tries!\n";
        } elseif ($user < $number) {
            echo "nope. higher\n";
        } else {
            echo "guess again. lower\n";
        }
    } while ($number != $user);       
}