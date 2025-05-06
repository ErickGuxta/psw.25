<?php

// Função da Sequência de Fibonacci COM recursividade
// A sequência de Fibonacci é: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...

function fibonacci($num)
{
    // caso basse
    if($num == 0 || $num == 1) return $num;

    return fibonacci($num -2) + fibonacci($num -1);
}

echo (fibonacci(0)) . PHP_EOL;  // 0
echo (fibonacci(1)) . PHP_EOL;  // 1
echo (fibonacci(4)) . PHP_EOL;  // 3
echo (fibonacci(6)) . PHP_EOL;  // 8
