<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    
    sort($arr);
    $somaTotal = 0;
    $numMaior = $arr[0];
    $numMenor = $arr[0];
    
    for ($i=0; $i < count($arr) ; $i++) { 
        $somaTotal += $arr[$i];

        if ($arr[$i] > $numMaior) {
            $numMaior = $arr[$i];
        } elseif ($arr[$i] < $numMaior) {
            $numMenor = $arr[$i];
        }
    }

    $sumMaior = $somaTotal - $numMenor;
    $sumMenor = $somaTotal - $numMaior;
    
    echo $sumMenor . " " . $sumMaior;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
