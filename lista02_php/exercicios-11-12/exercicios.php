<?php
//exercicio 11 Com um vetor, leia 5 números inteiros e imprima-os.

$vet = [];

for ($i=0; $i<5; $i++) { 
    $num = (int) trim(fgets(STDIN));
    $vet[] = $num;
}

// Print all numbers
for ($i=0; $i<5; $i++) {
    echo $vet[$i] . "\n";
}


//exercicio 12 Com um vetor, leia 5 nomes e imprima-os.

$vet = [];

for ($i=0; $i<5; $i++) { 
    $nome = (string) trim(fgets(STDIN));
    $vet[] = $nome;
}

// aqui é para imprimir todos os numeros 
for ($i=0; $i<5; $i++) {
    echo $vet[$i] . " ";
}
