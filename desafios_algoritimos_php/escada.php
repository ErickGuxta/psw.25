<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    for ($i=0; $i <= $n ; $i++) { 
        $traco = str_repeat("#", ($i - $n));
        echo $traco . "\n";
    }

}

$n = intval(trim(fgets(STDIN)));

staircase($n);
