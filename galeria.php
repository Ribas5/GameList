<?php include "cabecalho.php "?>

<?php
  $jogo1 =["nome"=>"Dead Cells"
  ,"valor" =>23.75
  ,"descricao" =>"Dead Cells é um rogue-lite de ação em plataforma estilo Metroidvania. Você vai explorar um castelo extenso e em constante mutação... considerando que consiga enfrentar seus guardiões em combates 2D inspirados em Dark Souls. Sem checkpoints. Mate, morra, aprenda, repita."
  ,"imagem" =>"https://cdn2.unrealengine.com/egs-deadcells-motiontwin-s1-2560x1440-312502186.jpg"
];
  $jogo2 =["nome"=>"Darknest Dungeon"
  ,"valor" =>13.50
  ,"descricao" =>"Darkest Dungeon é um jogo gótico desafiante em turnos de RPG sobre os estresses psicológicos vivenciados em aventuras. Recrute, treine e lidere uma equipe de heróis imperfeitos através de florestas corrompidas, labirintos esquecidos, criptas arruinadas e além."
  ,"imagem" =>"https://1.bp.blogspot.com/-rU2QrxS8yFU/YYHE2R8GjjI/AAAAAAAAgro/Y7sG1pTWVOYnZfdvfVtcMyuE9pU71584gCLcBGAsYHQ/s1280/darkest-dungeon-2-capa.jpg"
 ];
 $jogos = [$jogo1,$jogo2]
?>

<body>
<nav class="nav-extended  blue darken-2">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Lista</a></li>
        <li ><a href="cadastrar.php">Cadastrar</a></li>
    </ul>
    </div>
    <div class="nav-header " >
        <img src="imagens/game.png" alt="Gamelist" width="30%" height="30%">
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent blue darken-4">
        <li class="tab"><a class="active" href="galeria.php">Todos</a></li>
        <li class="tab"><a href="#test2">Adquiridos</a></li>
        <li class="tab"><a href="#test4">Favoritos</a></li>
      </ul>
    </div>
  </nav>
<div class="row">
<?php foreach($jogos as $jogo) :?>
  <div class ="col s4">
    <div class="card hoverable">
      <div class="card-image">
        <img src=<?= $jogo["imagem"]?>>
        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite</i></a>
      </div>
      <div class="card-content">
        <p class="valign-wrapper">
            <i class="material-icons amber-text">attach_money</i><?= number_format($jogo["valor"],2)?>
        </p> 
        <span class="card-title"><?= $jogo["nome"]?></span>

        <p><?= $jogo["descricao"]?></p>
      </div>
    </div>
  </div>
<?php endforeach ?>


</div>

        
</body>
</html>