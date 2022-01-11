<?php include "cabecalho.php "?>

<body>
    <!---cabeçalho--->
    <nav class="nav-extended  blue darken-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Lista</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header">
            <img src="imagens/game.png" alt="Gamelist" width="30%" height="30%">
        </div>
    </nav>
    
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card ">
                <!--- conteudo do formulario---->
                <div class="card-content">
                    <span class="card-title">Cadastrar Jogo</span>
                    <!--- input nome---->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" require>
                            <label for="titulo">Título do jogo</label>
                        </div>
                    </div>
                    <!--- input descricao---->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="descricao" class="materialize-textarea"></textarea>
                                    <label for="descricao">Descrição do jogo</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--- input valor---->
                    <div class="row">
                        <form class="col s4">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" step=".05" min=0 id="valor" class="validate" require></input>
                                    <label for="valor">Valor do jogo</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!---input imagem--->
                    <div class="file-field input-field">
                        <div class="btn blue darken-2">
                            <span>Imagem</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light btn grey" href="#">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn blue darken-4">Salvar</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>