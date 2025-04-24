<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            list-style: none;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        .tabela-informacoes {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
        }
        .tabela-informacoes th, .tabela-informacoes td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .tabela-informacoes th {
            background-color: #4CAF50;
            color: white;
        }
        footer {
            text-align: center;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Formulário de Submissão</h1>
    </header>
    <main>
        <table class="tabela-informacoes">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>SENHA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><? echo $_POST['nome_usuario']?></td>
                    <td><? echo $_POST['senha_usuario']?></td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <button><a href="index.php">HOME</a></button>
    </footer>
</body>
</html>