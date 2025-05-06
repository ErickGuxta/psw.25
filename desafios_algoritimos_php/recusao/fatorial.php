<?php

function fatorial($x)
{
    $fatorial = 1;
    for ($i=$x; $i > 0 ; $i--) { 
        $fatorial *= $i;
    }
    return $fatorial;
}

echo fatorial(5);

// Com recursao

function fatorial_recursao($x)
{   
    if ($x == 1) return 1;
    else return $x * fatorial_recursao($x -1);
}

echo fatorial_recursao(5);