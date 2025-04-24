<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $posi = 0;
    $nega = 0;
    $zero = 0;
    $total = count($arr);

    for ($i=0; $i < count($arr) ; $i++) { 
        if ($arr[$i] > 0) {
            $posi++;
        }elseif ($arr[$i] < 0){
            $nega++;
        } else{
            $zero++;
        }
    }

    $propPosi = number_format(($posi / $total), 6, '.');
    $propNega = number_format(($nega / $total), 6, '.');
    $propZero = number_format(($zero / $total), 6, '.');

    return [$propPosi, $propNega, $propZero];

}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
