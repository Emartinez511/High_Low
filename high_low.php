<?php

    $number = mt_rand($argv[1], $argv[2]);
    $tries = 0;
    
    fwrite(STDOUT, "I'm thinking of a number between 1 through 100. Can you guess my number?\n");

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

    echo "do you want to play Again?\n";
    $playAgain = fgets(STDIN) . PHP_EOL;
    if ($playAgain == "y")   {
        echo "then write a function for me\n";
    } else {
        echo "bye\n";
    }

