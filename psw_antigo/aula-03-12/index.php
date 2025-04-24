<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conteiner">
        <form action="submissao.php" method="POST">
            <h3>LOGIN</h3>
            <label >Usuário</label>
            <input type="text" name="nome_usuario">
            <label >Senha</label>
            <input type="password" name="senha_usuario">
            <input type="submit" value="Entrar">   
        </form>
    </body>
    </div>
</html>