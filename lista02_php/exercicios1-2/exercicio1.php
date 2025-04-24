<!-- A média aritmética de dois ou mais termos é o quociente do resultado da divisão da soma dos números dados pela quantidade de números somados. Elabore um algoritmo que leia as 4 notas de um aluno e escreva sua média aritmética. -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['notas'])) {
            $entrada = $_POST['notas'];
            
            //transformando string em array
            $notas = array_map('floatval', explode(' ', trim($entrada)));

            //soma das notas
            $soma = 0;
            foreach($notas as $nota){
                $soma += $nota;
            }

            //quantidade de notas
            $quant = count($notas);

            //media de notas
            $media = $soma / $quant;

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
        <h4>Media aritimetica</h4>
        <form action="" method="POST">
            <input type="text" placeholder="Digite as notas separadas por virgulas ou espaço" name="notas">
            <br>
            <button type="submit">Enviar</button>
        </form>
        <?php
                    echo "<h4> Média aritimética:  ". number_format($media, 2, ',', '.') . " </h4>";
        ?>       
    </div>
</body>
</html>

