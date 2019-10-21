<?php
session_start();
require __DIR__.'/cabecalho_geral.php';
?>

<body>

	<div class="ui width grid">
		<div class="one wide column "></div>
		<div class="fourteen wide column">

			<section class="novaLista margin">
				<a href="usuario_nl.php"><button class="ui primary button direita">+ Nova lista</button></a>
			</section>
            <?php
            if (isset($_GET['atualizado']) and $_GET['atualizado'] == 'sim'){
                echo '
            <div class="ui horizontal  cor_tercearia">
                Foi
            </div>
            <?php
            ';}elseif(isset($_GET['atualizado']) and $_GET['atualizado'] == 'nao'){
            echo '   
            ?>
             <div class="ui horizontal  cor_tercearia">
                nao Foi
            </div>
            <?php
            ';}
            ?>
			<div class="ui horizontal divider cor_tercearia">
				Minhas listas
			</div>

			<div class="cardMercado margin">
				<div class="ui card">
					<div class="content">
						<div class="header">Nome da Lista</div>
					</div>
					<div class="content">
						<img class="img_mercado" src="../../imagens/index.jpg">
						<div class="ui sub header">
              <span class="right floated">
                R$23,87
              </span>
              <span class= "floated">
                21/10/2019
              </span>
            </div>

          </div>
          <div class="extra content">
            <button class="ui right floated button">Editar</button>
            <button class="ui left button">Excluir</button>
          </div>
        </div>

			</div>

		</div>
		<div class="one wide column "></div>
	</div>

</body>
<?php include "footer.php"  ?>