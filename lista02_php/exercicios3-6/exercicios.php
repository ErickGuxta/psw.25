<?php
// exercicio3: Leia um número inteiro e informe se este número é par ou ímpar.


//função se é par ou impar
function parOuImpar($input_numb)
{
    if ($input_numb % 2 == 0) {
        echo ('NUMERO PAR');
    } else {
        echo ('NUMERO IMPAR');
    }
}

parOuImpar(8);
echo '<br>';

// exercicio4: Leia a idade de uma pessoa e informe se ela já chegou à maioridade. Se ela ainda não chegou, informe quantos anos faltam para a maioridade.

function maiorIdade($idade)
{
    if ($idade >= 18) {
        echo ('Você chegou à maior idade');
    } else {
        $calculo = 18 - $idade;
        echo ('Ainda falta ' . $calculo . ' ' . 'ano para você chagar à maior idade');
    }
}
maiorIdade(17);
echo '<br>';


//exercicio5: Considerando uma pista em que a velocidade máxima permitida é de 110 km/h, leia a velocidade de um veículo e informe se ele excedeu ou não a velocidade máxima permitida.

//Usando operador ternário
$velocidadeMaxima = fn($velocidade) => ($velocidade <= 110) ? "O veiculo não excedou a velocidade maxima permitida" : 'O veiculo excedou a velocidade maxima permitida';

echo $velocidadeMaxima(120);
echo '<br>';

//exercicio6: Considerando que a temperatura média ideal do corpo humano varia entre 36° C e 36,7° C, elabore um algoritmo que, dada uma temperatura lida, informe se esta pessoa está com febre.

$tempCorpo = fn($temp) => ($temp <= 36.7 && $temp >= 36 ) ? "Temperatura Ideal" : 'O paciente esta com febre';

echo $tempCorpo(38);
echo '<br>';

