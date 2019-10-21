<?php
session_start();
require __DIR__.'/cabecalho_geral.php';
?>

<body>

	<div class="ui width grid">
		<div class="five wide column "></div>
		<div class="six wide column">

			<div class="ui horizontal divider cor_tercearia">
				Nome da lista
			</div>


			<div class="ui divided items">
				<div class="item">
					<div class="image">
						<img src="../../imagens/index.jpg">
					</div>
					<div class="content">
						<a class="header">Nome produto</a>
						<div class="meta">
							<span class="cinema">R$5,40</span>
						</div>
						<div class="ui right floated primary button">
							Excluir
						</div>
					</div>
				</div>




				<div class="item">
					<div class="image">
						<img src="../../imagens/index.jpg">
					</div>
					<div class="content">
						<a class="header">Nome produto</a>
						<div class="meta">
							<span class="cinema">R$5,40</span>
						</div>
						<div class="ui right floated primary button">
							Excluir
						</div>
					</div>
				</div>

				<div class="item">
					<div class="image">
						<img src="../../imagens/index.jpg">
					</div>
					<div class="content">
						<a class="header">Nome produto</a>
						<div class="meta">
							<span class="cinema">R$5,40</span>
						</div>
						<div class="ui right floated primary button">
							Excluir
						</div>
					</div>
				</div>

				<div class="ui divider"></div>

			</div>

		</div>
		<div class="five wide column "></div>
	</div>

</body>
<?php include "footer.php"  ?>