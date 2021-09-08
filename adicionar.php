<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("meta-tags.php"); ?>

		<title>Adicionar livro &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				.nav-exportar { border-bottom: 2px solid #59359A; }
				main { min-height: calc(100vh - 27rem); }
			</style>

	</head>
	<body>

<?php include_once("navegacao-2.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5 ">
	<main>


		<div class="row mt-4 px-4">
			<h2>Adicionar livros</h2>
		</div>

		<div class="row col-xs-12 col-lg-6 offset-lg-3 mt-4 px-4">

			<div class="list-group">
			  <a href="adicionar/ler-isbn" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<i class="bi-upc-scan fs-2" role="img"></i>
				<div class="d-flex gap-2 w-100 justify-content-between">
				  <div>
					<h6 class="mb-0">Ler ISBN</h6>
					<p class="mb-0 opacity-75">Aponte a câmera para o código de barras do livro para adicionar.</p>
				  </div>
				</div>
			  </a>
			  <a href="adicionar/digitar-isbn" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<i class="bi-upc fs-2" role="img"></i>
				<div class="d-flex gap-2 w-100 justify-content-between">
				  <div>
					<h6 class="mb-0">Digitar ISBN</h6>
					<p class="mb-0 opacity-75">Sem câmera para ler o código? Sem problemas, nesta opção você pode digitar.</p>
				  </div>
				</div>
			  </a>
			  <a href="adicionar/manualmente" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<i class="bi-input-cursor-text fs-2" role="img"></i>
				<div class="d-flex gap-2 w-100 justify-content-between">
				  <div>
					<h6 class="mb-0">Manual</h6>
					<p class="mb-0 opacity-75">O livro não tem ISBN? Você pode adicionar manualmente as informações.</p>
				  </div>
				</div>
			  </a>
			</div>

		</div>


</main>
</div>

<?php include_once("rodape.php"); ?>
