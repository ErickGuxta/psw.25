<?php
//exercicio8 Elabore um algoritmo que escreva todos os números inteiros de 1 a 100.

for ($i=1; $i <=100 ; $i++) { 
    echo $i;
}

//exercicio9 Elabore um algoritmo que escreva apenas os números pares de 1 a 100.
// echo '<br></br>';


for ($i=1; $i <=100 ; $i++) { 
    if ($i % 2 === 0) {
        echo $i;
    }
}

echo '<br></br>';



//exercicio10 Construa um algoritmo que leia a idade de várias pessoas e, ao fim da execução, escreva o total de pessoas com menos de 18 anos e o total de pessoas com mais de 65 anos. Seu algoritmo deve parar de ler idades quando o usuário digitar uma idade menor que 1.

$menores18 = 0;
$maiores65 = 0;

while (true) {
    echo "Digite a idade (ou um número menor que 1 para sair): ";
    $idade = (int) trim(fgets(STDIN));

    if ($idade < 1) {
        break;
    }

    if ($idade < 18) {
        $menores18++;
    } elseif ($idade > 65) {
        $maiores65++;
    }
}
echo "\nTotal de pessoas com menos de 18 anos: $menores18\n";
echo "Total de pessoas com mais de 65 anos: $maiores65\n";
