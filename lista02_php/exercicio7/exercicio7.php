<?php

$nomeUsuario = "";
$displayDiv = "display: none;";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['usuario'])) {

    $nomeUsuario = $_POST['usuario'];

    //dar boas vindas e aparecer menu
    if (!empty($nomeUsuario)) {
        $displayDiv = "";
    }

    $nomeLanche = null;
    $precoLanche = null;
    $mensagemErro = null;
    
    //lanches
    $lanches = [
        "1"=> [
            "nome" => 'X-Wolverine',
            "preco" => 'R$ 25,90'
        ],
        "2"=> [
            "nome" => 'Magneto Supreme',
            "preco" => 'R$ 23,50'
        ],
        "3"=> [
            "nome" => 'Jean Grey',
            "preco" => 'R$ 22,90'
        ],
        "4"=> [
            "nome" => 'Super Tempestade',
            "preco" => 'R$ 18,50'
        ],
        "5"=> [
            "nome" => 'X-Místiga',
            "preco" => 'R$ 89,90'
        ],
        "6"=> [
            "nome" => 'Scott Prime',
            "preco" => 'R$ 27,90'
        ]
    ];


    if (isset($_POST['option'])) {
        $lancheEscolhido = $_POST['option'];

        switch ($lancheEscolhido) {
            case '1':
                $nomeLanche = $lanches['1']['nome'];
                $precoLanche = $lanches['1']['preco'];
                break;

            case '2':
                $nomeLanche = $lanches['2']['nome'];
                $precoLanche = $lanches['2']['preco'];
                break;

            case '3':
                $nomeLanche = $lanches['3']['nome'];
                $precoLanche = $lanches['3']['preco'];
                break;

            case '4':
                $nomeLanche = $lanches['4']['nome'];
                $precoLanche = $lanches['4']['preco'];
                break;

            case '5':
                $nomeLanche = $lanches['5']['nome'];
                $precoLanche = $lanches['5']['preco'];
                break;

            case '6':
                $nomeLanche = $lanches['6']['nome'];
                $precoLanche = $lanches['6']['preco'];
                break;

            default:
                $mensagemErro = "Opção inválida.";
                break;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete Sabor Expresso</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            color: #333;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            color: #e63946;
            font-size: 2.5rem;
            margin-bottom: 5px;
        }

        .welcome-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .menu-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed #ccc;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .menu-item img {
            width: 60px;
            height: 60px;
            border-radius: 5px;
            object-fit: cover;
            margin-right: 15px;
        }

        .menu-item-content {
            flex-grow: 1;
        }

        .menu-item-name {
            font-weight: bold;
            font-size: 1.1rem;
            color: #333;
        }

        .menu-item-description {
            color: #666;
            font-size: 0.9rem;
            margin: 5px 0;
        }

        .menu-item-price {
            font-weight: bold;
            color: #e63946;
            align-self: center;
            min-width: 80px;
            text-align: right;
        }

        .selection-form {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #eee;
        }

        input,
        button {
            padding: 10px;
            margin: 5px 0;
        }

        button {
            background-color: #e63946;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #c1121f;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
            border-left: 4px solid #e63946;
        }
    </style>
</head>

<body>
    <header>
        <h1>Lanchonete X-Lanche</h1>
        <p>Sabores únicos que você nunca experimentou!</p>
    </header>

    <div class="welcome-section">
        <h2>Bem-vindo(a)!</h2>
        <form method="POST" action="">
            <label>Por favor, digite seu nome:</label>
            <input type="text" placeholder="Seu nome" required name="usuario">
            <button type="submit">Continuar</button>
        </form>
        <div style="<?php echo $displayDiv ?? 'display: none;'; ?>">
            <h4>Bem-vindo(a) <strong><?= $nomeUsuario ?></strong> </h4>
        </div>
    </div>


    <div class="menu-container" style="<?php echo $displayDiv ?? 'display: none'; ?>">
        <h2>Nosso Cardápio</h2>
        <p>Escolha uma das opções abaixo:</p>

        <div class="menu-item">
            <div class="menu-item-content">
                <div class="menu-item-name">1. X-Wolverine</div>
                <div class="menu-item-description">Hambúrguer artesanal, queijo cheddar, alface, tomate e molho especial</div>
            </div>
            <div class="menu-item-price">R$ 25,90</div>
        </div>

        <div class="menu-item">
            <div class="menu-item-content">
                <div class="menu-item-name">2. Magneto Supreme</div>
                <div class="menu-item-description">Hambúrguer de grão de bico, queijo, rúcula, cebola caramelizada e maionese verde</div>
            </div>
            <div class="menu-item-price">R$ 23,50</div>
        </div>

        <div class="menu-item">
            <div class="menu-item-content">
                <div class="menu-item-name">3. Jean Grey</div>
                <div class="menu-item-description">Filé de frango empanado, queijo, bacon, alface e molho ranch</div>
            </div>
            <div class="menu-item-price">R$ 22,90</div>
        </div>

        <div class="menu-item">
            <div class="menu-item-content">
                <div class="menu-item-name">4. Super Tempestade</div>
                <div class="menu-item-description">Hot dog com salsicha especial, queijo derretido, batata palha e molho de tomate</div>
            </div>
            <div class="menu-item-price">R$ 18,50</div>
        </div>

        <div class="menu-item">
            <div class="menu-item-content">
                <div class="menu-item-name">5. X-Místiga</div>
                <div class="menu-item-description">4 X-Burguers, 2 porções de batata frita e 2 refrigerantes de 2L</div>
            </div>
            <div class="menu-item-price">R$ 89,90</div>
        </div>

        <div class="menu-item">
            <div class="menu-item-content">
                <div class="menu-item-name">6. Scott Prime</div>
                <div class="menu-item-description">Pão sírio, contra-filé, queijo, tomate, alface, cebola e molho especial</div>
            </div>
            <div class="menu-item-price">R$ 27,90</div>
        </div>

        <div class="selection-form">
            <form action="" method="POST">
                <label>Digite o número do seu pedido:</label>
                <input type="number" min="1" max="6" name="option" required>

                <!-- O input type="hidden" reenvia o nome do usuario junto com o pedido, já que o PHP depende da existencia dessa variável -->
                <input type="hidden" name="usuario" value="<?= $nomeUsuario ?>">


                <button type="submit">Fazer Pedido</button>
            </form>
        </div>

        <!-- Imprimindo os resultados aqui -->
        <?php if (isset($nomeLanche) && isset($precoLanche)) : ?>
            <div id="order-result" class="result" style="<?php echo $displayDiv ?? 'display: none'; ?>">
                <h4>
                    Muito obrigado! Você selecionou o lanche: <strong><?= $nomeLanche ?></strong><br>
                    Valor: <strong><?= $precoLanche ?></strong>
                </h4>
            </div>
        <?php elseif (isset($mensagemErro)) : ?>
            <div class="result" style="<?php echo $displayDiv ?? 'display: none'; ?>">
                <h4 style="color: red;"><?= $mensagemErro ?></h4>
            </div>
        <?php endif; ?>


    </div>
</body>

</html>