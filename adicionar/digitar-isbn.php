<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("../meta-tags.php"); ?>

		<title>Digitar ISBN &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				.nav-exportar { border-bottom: 2px solid #59359A; }
				main { min-height: calc(100vh - 27rem); }
			</style>

	</head>
	<body>

<?php include_once("../navegacao-2.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>

		<div class="row mt-4 px-4">
			<h2>Digitar ISBN</h2>
		</div>

		<div class="row mt-4 px-4">
			<p>Informe o ISBN para adicionar o livro.</p>

			<form class="row col-md-6 offset-md-3 g-3 align-items-center text-end">
				<div class="col-8">
					<input type="text" class="form-control form-control-lg" id="digitarISBN" value="9788550813820">
				</div>

				<div class="col-2">
					<a href="categorizar" type="submit" class="btn btn-secondary bg-purple-800 btn-lg">Adicionar</a>
				</div>
			</form>

</div>
</main>
</div>

<?php include_once("../rodape.php"); ?>