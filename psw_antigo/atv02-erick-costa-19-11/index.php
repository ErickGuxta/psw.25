<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro</title>

</head>
<body>
    <header>
        <div class="logo">
            <h1>SOUZA</h1>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#">CRIAR</a></li>
                <li><a href="#">EXPLORAR</a></li>
                <li><a href="#">BIBLIOTECA</a></li>
                <li><a href="#">TENDÊNCIAS</a></li>
            </ul>
        </div>
        <div class="botao-entrar">
            <li><a href="#">ENTRAR</a></li>
        </div>
    </header>
    <main>
        <div class="conteudo">
            <form action="" class="form-registro">
                <div class="titulo"><h2>REGISTRAR</h2></div>
                
                <div class="item-grupo">
                    <label for="">Nome</label>
                    <input type="text" placeholder="Digite seu nome" name="nome">
                </div>
                
                <div class="item-grupo">
                        <label for="">Email</label>
                        <input type="email" placeholder="Digite seu email" name="email">
                    </div>
                
                <div class="grupo">
                    <div class="item-grupo">
                        <label for="">Senha</label>
                        <input type="password" placeholder="Digite sua senha" name="senha">
                    </div>
                    <div class="item-grupo">
                        <label for="">Telefone</label>
                        <input type="tel" placeholder="(00) 00000-0000" name="telefone" maxlength="11">
                    </div>
                </div>
                
                <div class="grupo">
                    <div class="item-grupo">
                        <label for="">Idade</label>
                        <input type="number" placeholder="idade" name="idade" min="18" max="100">
                    </div>
                    <div class="item-grupo">
                        <label for="">Data de Nascimento</label>
                        <input type="date" name="nascimento">
                    </div>
                    <div class="item-grupo">
                        <label for="">Horário de preferência</label>
                        <input type="time"  name="horario">
                    </div>
                </div>

            <div class="grupo">
                <div class="item-grupo">
                    <label>Mês de preferência</label>
                    <input type="month" name="mes">
                </div>

                <div class="item-grupo">
                    <label>Semana do ano</label>
                    <input type="week" name="semana">
                </div>

                
            </div>

            <div class="grupo">
                <div class="item-grupo">
                        <label>Data e hora do evento</label>
                        <input type="datetime-local" name="evento">
                </div>
                <div class="item-grupo">
                    <label>Seu site</label>
                    <input type="url" name="url" placeholder="https:\\">
                </div>
            </div>
            

            <div class="grupo">
                
                    <div class="item-grupo">
                        <label>Satisfação</label>
                        <input type="range" name="satisfacao" min="0" max="100">
                    </div>
                    <div class="item-grupo">
                        <label>Cor favorita:</label>
                        <input type="color" name="cor">
                    </div>

            </div>


            <div class="grupo">
                <div class="item-grupo">
                    <label>Foto de perfil</label>
                    <input type="file" name="foto" accept="image/*">
                </div>

                <div class="item-grupo">
                    <label>Pesquisar</label>
                    <input type="search" name="pesquisa" >
                </div>
            </div>
            

            <div class="grupo">
                <div class="item-grupo">
                    <label>Gênero:</label>
                    <input type="radio" name="genero" value="m"> Masculino
                    <input type="radio" name="genero" value="f"> Feminino
                    <input type="radio" name="genero" value="o"> Outro
                </div>

                <div class="item-grupo">
                    <label>Interesses:</label>
                    <input type="checkbox" name="interesses[]" value="esporte"> Esportes
                    <input type="checkbox" name="interesses[]" value="musica"> Música
                    <input type="checkbox" name="interesses[]" value="tecnologia"> Tecnologia
                </div>
            </div>
            

            <div class="grupo-botoes">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
                <input type="button" value="Botão ">
            </div>
            
                
            </form>
        </div>
        <div class="imagem">
            <img src="img/Personagem.png" alt="personagem">
        </div>
    </main>
</body>
</html>