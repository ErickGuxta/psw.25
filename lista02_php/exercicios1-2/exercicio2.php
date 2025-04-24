<!-- Alguns países de língua inglesa, como os EUA, utilizam da unidade de medida grau Fahrenheit como escala de temperatura. Para converter uma temperatura de Celsius para Fahrenheit, podemos aplicar a fórmula F=(9*C+160)/5 ou a fórmula F=C*1.8+32, onde F é a temperatura em Fahrenheit e C a temperatura em Celsius. Elabore um algoritmo que leia uma temperatura em graus Celsius e a escreva convertida em graus Fahrenheit. -->

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['temp'])) {
            
            $temp_f = $_POST['temp'];
            $temp_c = ($temp_f - 32) / 1.8;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>

    <style>
        body {width: 100vw; height: 100vh; display: flex; justify-content: center; align-items: center;}

        .container{ display: flex; justify-content: center; align-items: center; flex-direction: column; border: 1px solid black; padding: 20px; border-radius: 8px; width: 300px;}
        form{display: flex; justify-content: center; flex-direction: column; width: 100%;}

        input {padding: 8px; margin-bottom: 10px; }

        button {padding: 8px 15px; margin-bottom: 15px; cursor: pointer;}
    </style>
</head>
<body>
    <div class="container">
        <h3 style="text-align: center; color:midnightblue;">Converta a temperatura Fahrenheit em Celsius aqui:</h3>
        <form action="" method="POST">
            <input type="text" placeholder="Temperatura °F: " name="temp">
            <br>
            <button type="submit">Calcular</button>
        </form> 
        <?php
            echo "<h4> Temperatura em Celsius:  ". number_format($temp_c, 2, ',', '.') . " </h4>";
        ?>       
    </div>
</body>
</html>

