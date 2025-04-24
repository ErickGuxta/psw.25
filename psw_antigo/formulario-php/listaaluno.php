<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['limpar_sessao'])) {
    session_unset(); 
    session_destroy(); 
    header("Location: listaaluno.php"); 
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = [
        'nome' => $_POST['nome'] ?? '',
        'endereco' => $_POST['endereco'] ?? '',
        'bairro' => $_POST['bairro'] ?? '',
        'cidade' => $_POST['cidade'] ?? '',
        'uf' => $_POST['uf'] ?? '',
        'celular' => $_POST['celular'] ?? '',
        'cpf' => $_POST['cpf'] ?? '',
        'disciplinas' => isset($_POST['disciplinas']) ? $_POST['disciplinas'] : [],
        'favoritas' => isset($_POST['favoritas']) ? $_POST['favoritas'] : []
    ];

    if (!isset($_SESSION['alunos'])) {
        $_SESSION['alunos'] = [];
    }
    $_SESSION['alunos'][] = $aluno;

    header("Location: listaaluno.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Lista Alunos</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>PSW</h1>
        </div>

        <div class="sessao-direita-header">
            <div class="caixa1">
                <div class="imgs-logo">
                    <a href="#"><img src="img/facebook-icon.png" alt=""></a>
                    <a href="#"><img src="img/instagram-icon.png" alt=""></a>
                    <a href="#"><img src="img/linkedin-icon.png" alt=""></a>
                    <a href="#"><img src="img/github-icon.png" alt=""></a>
                </div>
            </div>
            <div class="caixa2">
                <img src="img/image-user-qualquer.png" alt="">
            </div>
        </div>
    </header>

    <section>
        <aside>
            <nav>
                <ul>
                    <div>
                        <span><img src="img/imagem-home.png" alt="imagem home"></span>
                        <li class="nav-item"> <a href="index.php">Home</a></li>
                    </div>
                    <div>
                        <span><img src="img/imagem-registro.png" alt="imagem registro"></span>
                        <li class="nav-item"> <a href="cadaluno.php">Cadastrar Aluno</a></li>

                    </div>
                    <div>
                        <span><img src="img/imgem-usuario.png" alt="imagem usuario"></span>
                        <li class="nav-item"> <a href="listaaluno.php">Lista de Alunos</a></li>
                    </div>

                    <div>
                        <span><img src="img/imagem-ti.png" alt="imagem TI"></span>
                        <li class="nav-item"> <a href="#">Tec. da Informação</a></li>
                    </div>
                </ul>
            </nav>
        </aside>

        <main>
            <div class="conteudo-listaaluno">
                <table class="tabela-informacoes">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>UF</th>
                            <th>Celular</th>
                            <th>CPF</th>
                            <th>Disciplinas Cursando</th>
                            <th>Disciplinas Favoritas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($_SESSION['alunos'])): ?>
                            <?php foreach ($_SESSION['alunos'] as $aluno): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
                                    <td><?php echo htmlspecialchars($aluno['endereco']); ?></td>
                                    <td><?php echo htmlspecialchars($aluno['bairro']); ?></td>
                                    <td><?php echo htmlspecialchars($aluno['cidade']); ?></td>
                                    <td><?php echo htmlspecialchars($aluno['uf']); ?></td>
                                    <td><?php echo htmlspecialchars($aluno['celular']); ?></td>
                                    <td><?php echo htmlspecialchars($aluno['cpf']); ?></td>
                                    <td><?php echo htmlspecialchars(implode(', ', $aluno['disciplinas'])); ?></td>
                                    <td><?php echo htmlspecialchars(implode(', ', $aluno['favoritas'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9">Nenhum aluno registrado.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>

                <div class="botao-limpar-registros">
                    <form action="listaaluno.php" method="post">
                        <button type="submit" name="limpar_sessao">Limpar Registros</button>
                    </form>
                </div>
            </div>
        </main>
    </section>

    <footer>
        <span>©CadAluno. Todos os direitos reservados.</span>
    </footer>
</body>

</html>