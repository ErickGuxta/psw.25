<?php
$alunos = [];

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
    

    $alunos[] = $aluno;
}


if (isset($_POST['limpar_registros'])) {
    $alunos = []; 
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
                        <tr>
                            <td>Erick Gustavo Costa de Souza</td>
                            <td>Rua Dom Bosco, S/N, Casa</td>
                            <td>Bairro São Francisco</td>
                            <td>Carinhanha</td>
                            <td>BA</td>
                            <td>77998094236</td>
                            <td>86656505554</td>
                            <td>PSW, REDES,ASW,BANCO DE DADOS</td>
                            <td>MATEMATICA,PSW,BANCO DE DADOS</td>
                        </tr>
                        <tr>
                            <td>Maria de Fátima Costa de Souza</td>
                            <td>Rua Dom Bosco, S/N, Casa</td>
                            <td>Bairro São Francisco</td>
                            <td>Carinhanha</td>
                            <td>BA</td>
                            <td>77998504236</td>
                            <td>530.029.845-68</td>
                            <td>PSW,REDES,ASW,BANCO DE DADOS</td>
                            <td>MATEMATICA PSW</td>
                        </tr>
                        <?php foreach ($alunos as $aluno): ?>
                            <tr>
                                <td><?php echo ($aluno['nome']); ?></td>
                                <td><?php echo ($aluno['endereco']); ?></td>
                                <td><?php echo ($aluno['bairro']); ?></td>
                                <td><?php echo ($aluno['cidade']); ?></td>
                                <td><?php echo ($aluno['uf']); ?></td>
                                <td><?php echo ($aluno['celular']); ?></td>
                                <td><?php echo ($aluno['cpf']); ?></td>
                                <td><?php echo implode(', ', $aluno['disciplinas']); ?></td>
                                <td><?php echo implode(', ', $aluno['favoritas']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="botao-limpar-registros">
                    <form action="listaaluno.php" method="post">
                        <button type="submit" name="limpar_registros">Limpar Registros</button>
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