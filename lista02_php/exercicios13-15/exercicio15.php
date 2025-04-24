<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área</title>
</head>
<body>
    <div style="border: 1px solid black; padding: 20px; width: 320px;">
        <form method="post" action="">
            <div>
                <label for="base">Base: </label>
                <input type="text" id="base" name="base" style="width: 200px;">
            </div>
            <br>
            <div>
                <label for="altura">Altura: </label>
                <input type="text" id="altura" name="altura" style="width: 200px;">
            </div>
            <br>
            <button type="submit" name="calcular">Calcular</button>
        </form>
        
        <?php
        function calculaAreaRetangulo($largura, $altura) {
            return $largura * $altura;
        }
        
        if (isset($_POST['calcular'])) {

            $largura = isset($_POST['base']) ? floatval($_POST['base']) : 0;
            $altura = isset($_POST['altura']) ? floatval($_POST['altura']) : 0;
            
            $area = calculaAreaRetangulo($largura, $altura);
            echo "<br><strong>A área do retângulo é: " . $area . "</strong>";
        }
        ?>
    </div>
</body>
</html>