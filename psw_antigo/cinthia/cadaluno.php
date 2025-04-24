<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">Registro Web</div>
        <div class="links">
            <a href="index.php" class="button-link">Home</a>
            <a href="listaaluno.php" class="button-link">Lista de Alunos</a>
        </div>
    </header>
    <main>
        <section class="container">
            <h2>Formulário de Cadastro</h2>
            <form action="listaaluno.php" method="post" class="formulario-registro">
                <div class="item-grupo">
                    <label for="nome">Nome</label>
                    <input type="text" placeholder="Nome completo do aluno" name="nome" minlength="4" maxlength="60" required>
                </div>
                <div class="item-grupo">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco" required placeholder="Rua, número, complemento">
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
                    <div class="item-grupo-tel-cpf">
                        <label for="celular">Celular</label>
                        <input type="tel" id="celular" name="celular" required placeholder="(DD) 99999-9999" maxlength="11">
                    </div>
                    <div class="item-grupo-tel-cpf">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" required placeholder="000.000.000-00" maxlength="14">
                    </div>
                </div>

                <div class="grupo">
                    <div class="item-grupo">
                        
                        <div class="disciplinas-favoritas-container">
                            <div class="disciplinas-container">
                                <h3>Disciplinas Cursadas</h3>
                                <input type="checkbox" name="disciplinas[]" value="PSW"> 
                                <label><input type="checkbox" name="disciplinas[]" value="Banco de Dados"> Banco de Dados</label>
                                <label><input type="checkbox" name="disciplinas[]" value="Redes"> Redes</label>
                                <label><input type="checkbox" name="disciplinas[]" value="ASW"> ASW</label>
                                <label><input type="checkbox" name="disciplinas[]" value="Matemática"> Matemática</label>
                                <label><input type="checkbox" name="disciplinas[]" value="Física"> Física</label>
                                <label><input type="checkbox" name="disciplinas[]" value="Português"> Português</label>
                                <label><input type="checkbox" name="disciplinas[]" value="Química"> Química</label>
                            </div>
                            <div class="favoritas-container">
                                <h3>Disciplinas Favoritas</h3>
                                <label><input type="checkbox" name="favoritas[]" value="PSW"> PSW</label>
                                <label><input type="checkbox" name="favoritas[]" value="Banco de Dados"> Banco de Dados</label>
                                <label><input type="checkbox" name="favoritas[]" value="Redes"> Redes</label>
                                <label><input type="checkbox" name="favoritas[]" value="ASW"> ASW</label>
                                <label><input type="checkbox" name="favoritas[]" value="Matemática"> Matemática</label>
                                <label><input type="checkbox" name="favoritas[]" value="Física"> Física</label>
                                <label><input type="checkbox" name="favoritas[]" value="Português"> Português</label>
                                <label><input type="checkbox" name="favoritas[]" value="Química"> Química</label>
                            </div>
                        </div>

                    </div>
                    <div class="botao-enviar">
                        <button type="submit">ENVIAR REGISTRO</button>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 - Cinthia Nunes. Todos os direitos reservados.</p>
    </footer>

</body>

</html>