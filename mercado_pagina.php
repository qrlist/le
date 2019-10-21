<?php
session_start();
require __DIR__.'/cabecalho_geral.php';
?>

<body>

	<div class="ui width grid">
		<div class="one wide column "></div>
		<div class="fourteen wide column">

			<section class="novaLista margin">
				<button class="ui primary button direita">+ Nova lista</button>
				<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Modal Title
  </div>
  <div class="image content">
    <div class="image">
      An image can appear on left or an icon
    </div>
    <div class="description">
      A description can appear on the right
    </div>
  </div>
  <div class="actions">
    <div class="ui button">Cancel</div>
    <div class="ui button">OK</div>
  </div>
</div>	
			</section>
			<div class="ui horizontal divider cor_tercearia">
				Mercados cadastrados
			</div>

			<div class="cardMercado margin">
				<div class="ui card">
					<div class="content">
						<div class="header">Mercado Albino</div>
					</div>
					<div class="content">
						<img class="img_mercado" src="../../imagens/index.jpg">
						<h4 class="ui sub header">informação extra (endereço)</h4>
					</div>
				</div>

			</div>

		</div>
		<div class="one wide column "></div>
	</div>

</body>
<?php include "footer.php"  ?>