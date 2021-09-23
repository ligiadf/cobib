<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("../meta-tags.php"); ?>

		<title>Categorizar &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				.nav-exportar { border-bottom: 2px solid #59359A; }
			</style>

	</head>
	<body>

<?php include_once("../navegacao-demo.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>


		<div class="row mt-4 px-4">
			<h2>Adicionar categoria ao livro</h2>
		</div>

		<div class="row mt-4 px-4">
			<dl>
				<dt>Título:</dt>
				<dd>Inspirado: como criar produtos de tecnologia que os clientes amam</dd>
				<dt>Autores:</dt>
				<dd>Marty Cagan (Autor)</dd>
				<dd>Luciana Palhanos (Tradutor)</dd>
			</dl>


		<form action="../livro">

				<p class="fw-bold">Selecione uma ou mais categorias:</p>
				<div class="list-group">
					<label class="list-group-item">
						<input class="form-check-input me-1" type="checkbox" value=""> Biblioteconomia</label>
					<label class="list-group-item">
						<input class="form-check-input me-1" type="checkbox" value=""> Gestão de produtos</label>
					<label class="list-group-item">
						<input class="form-check-input me-1" type="checkbox" value=""> Literatura</label>
					<label class="list-group-item">
						<input class="form-check-input me-1" type="checkbox" value=""> Web design</label>
				</div>

				<div class="mt-3 d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="#" class="btn btn-secondary btn-sm"><i class="bi-folder-plus" role="img"></i> Nova categoria</a>
				</div>


			<div class="row mt-5">
				<div class="col text-end">
					<button class="btn btn-success btn-md-lg " type="submit">Salvar e finalizar</button>
					<p class="text-muted">Salvar os dados e visualizar o livro</p>
				</div>
			</div>

		</form>



</div>


</main>
</div>


<?php include_once("../rodape.php"); ?>