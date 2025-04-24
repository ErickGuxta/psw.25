<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Cadastrar</title>
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
            <div class="conteudo">
                <div class="titulo">
                    <h2>REGISTRAR ALUNO</h2>
                </div>

                <form action="listaaluno.php" class="formulario-registro" method="post">
                    <div class="item-grupo">
                        <label for="">Nome</label>
                        <input type="text" placeholder="Nome completo do aluno" name="nome" minlength="4" maxlength="60" required>
                    </div>
                    <div class="item-grupo">
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="endereco" required
                            placeholder="Rua, número, complemento">
                    </div>

                    <div class="grupo">

                        <div class="item-grupo">
                            <label for="bairro">Bairro</label>
                            <input type="text" id="bairro" name="bairro" required placeholder="Nome do bairro">
                        </div>
                        <div class="item-grupo">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" required placeholder="Cidade">
                        </div>


                        <div class="item-grupo">
                            <label for="uf">UF</label>
                            <select id="uf" name="uf" required>
                                <option value="">Selecione UF</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>

                    </div>

                    <div class="grupo-teste">
                        <div class="item-grupo-tel-cpf" >
                            <label for="celular">Celular</label>
                            <input type="tel" id="celular" name="celular" required placeholder="(DD) 99999-9999"
                                maxlength="11">
                        </div>
                        <div class="item-grupo-tel-cpf">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" required placeholder="000.000.000-00" maxlength="14">
                        </div>
                    </div>

                    <div class="grupo">
                        <div class="item-grupo">
                            <label>Disciplinas Cursadas</label>
                            <div class="sub-itens">
                                <div>
                                    <input type="checkbox" id="disciplina1" name="disciplinas[]" value="PSW" >
                                    <label for="disciplina1">PSW</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="disciplina2" name="disciplinas[]" value="BANCO DE DADOS" >
                                    <label for="disciplina2">Banco de Dados</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="disciplina3" name="disciplinas[]" value="REDES">
                                    <label for="disciplina3">Redes</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="disciplina4" name="disciplinas[]" value="ASW">
                                    <label for="disciplina4">ASW</label>
                                </div>
                            </div>
                            <div class="sub-itens">
                                <div>
                                    <input type="checkbox" id="disciplina5" name="disciplinas[]" value="MATEMATICA">
                                    <label for="disciplina5">Matemática</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="disciplina6" name="disciplinas[]" value="FISICA">
                                    <label for="disciplina6">Física</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="disciplina7" name="disciplinas[]" value="PORTUGUES">
                                    <label for="disciplina7">Português</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="disciplina8" name="disciplinas[]" value="QUIMICA">
                                    <label for="disciplina8">Química</label>
                                </div>
                            </div>
                        </div>

                        <div class="item-grupo">
                            <label>Disciplinas Favoritas</label>
                            <div class="sub-itens">
                                <div>
                                    <input type="checkbox" id="favorita1" name="favoritas[]" value="PSW">
                                    <label for="favorita1">PSW</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="favorita2" name="favoritas[]" value="BANCO DE DADOS">
                                    <label for="favorita2">Banco de Dados</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="favorita3" name="favoritas[]" value="REDES">
                                    <label for="favorita3">Redes</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="favorita4" name="favoritas[]" value="ASW">
                                    <label for="favorita4">ASW</label>
                                </div>
                            </div>
                            <div class="sub-itens">
                                <div>
                                    <input type="checkbox" id="favorita5" name="favoritas[]" value="MATEMATICA">
                                    <label for="favorita5">Matemática</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="favorita6" name="favoritas[]" value="FISICA">
                                    <label for="favorita6">Física</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="favorita7" name="favoritas[]" value="PORTUGUES">
                                    <label for="favorita7">Português</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="favorita8" name="favoritas[]" value="QUIMICA">
                                    <label for="favorita8">Química</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="botao-enviar">
                        <button type="submit">ENVIAR REGISTRO</button>
                    </div>
                </form>
            </div>
        </main>
    </section>

    <footer>
        <span>© 2024 ErickGustavo. Todos os direitos reservados.</span>
    </footer>

</body>

</html>