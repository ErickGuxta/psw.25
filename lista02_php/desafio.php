<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["versao"]) && $_POST["versao"] == "switch_case") {
    $num1 = isset($_POST["num1"]) ? floatval($_POST["num1"]) : 0;
    $num2 = isset($_POST["num2"]) ? floatval($_POST["num2"]) : 0;
    $operacao = isset($_POST["operacao"]) ? $_POST["operacao"] : "";
    $resultado = 0;
    $mensagem = "";

    switch ($operacao) {
        case "soma":
            $resultado = $num1 + $num2;
            $mensagem = "A soma de $num1 e $num2 é: $resultado";
            break;
            
        case "diferenca":
            $resultado = $num1 - $num2;
            $mensagem = "A diferença entre $num1 e $num2 é: $resultado";
            break;
            
        case "produto":
            $resultado = $num1 * $num2;
            $mensagem = "O produto de $num1 e $num2 é: $resultado";
            break;
            
        case "divisao":
            if ($num2 == 0) {
                $mensagem = "Erro: Divisão por zero não é permitida!";
            } else {
                $resultado = $num1 / $num2;
                $mensagem = "A divisão de $num1 por $num2 é: $resultado";
            }
            break;
            
        case "resto":
            if ($num2 == 0) {
                $mensagem = "Erro: Divisão por zero não é permitida!";
            } else {
                $resultado = $num1 % $num2;
                $mensagem = "O resto da divisão de $num1 por $num2 é: $resultado";
            }
            break;
            
        default:
            $mensagem = "Selecione uma operação válida.";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        .calculadora {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }
        
        h2 {
            color: #333;
        }
        
        .input-group {
            margin-bottom: 15px;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        .input-group input, .input-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .resultado {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9f7ef;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Calculadora em PHP</h1>
    
    
    <div class="calculadora">
        <h2>Versão com SWITCH/CASE</h2>
        <form method="POST" action="">
            <input type="hidden" name="versao" value="switch_case">
            
            <div class="input-group">
                <label for="num1_switch">Primeiro número:</label>
                <input type="number" id="num1_switch" name="num1" step="any" required>
            </div>
            
            <div class="input-group">
                <label for="num2_switch">Segundo número:</label>
                <input type="number" id="num2_switch" name="num2" step="any" required>
            </div>
            
            <div class="input-group">
                <label for="operacao_switch">Operação:</label>
                <select id="operacao_switch" name="operacao" required>
                    <option value="">Selecione uma operação</option>
                    <option value="soma">Soma</option>
                    <option value="diferenca">Diferença</option>
                    <option value="produto">Produto</option>
                    <option value="divisao">Divisão</option>
                    <option value="resto">Resto da divisão</option>
                </select>
            </div>
            
            <button type="submit">Calcular</button>
            
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["versao"]) && $_POST["versao"] == "switch_case"): ?>
                <div class="resultado">
                    <strong>Resultado:</strong> <?php echo $mensagem; ?>
                </div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>