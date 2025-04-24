<?php 

//variáveis e verificação de variáveis

    $var = "bill gates";
    $tipo = gettype($var);
    echo "$var ($tipo) <br>";

    if (is_string($var)) {
        echo "Isso é uma variável do tipo string";
    } else{
        echo "Isso não é uma variável do tipo string";
    }

    echo "<br>";

    $var2 = true;
    if (is_bool($var2)) {
        echo "Isso é uma variável do tipo boolean";
    } else{
        echo "Isso não é uma variável do tipo boolean";
    }

    echo "<br>";

    $var3 = null;

    if (is_null($var3)) {
        echo "Variavel \$var3 é nula/vazia! <br>";
    } 

//array

$nota = [1, 2, 3, 4];

    //acesando índice
    echo "Esse é o valor da posição 3: " . "$nota[3] <br>";

    //imprimir valores vetor
    for ($i = 0; $i < count($nota); $i++){
        echo "$nota[$i]";
    }

    echo "<br>";

    //usando foreach + codigo para não colocar virgula no final
    $ultimo = end($nota);
    foreach($nota as $i){
        if($i == $ultimo){
            echo "$i";
        } else {
            echo "$i" . ",";
        }
    }



?>