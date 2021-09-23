<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("meta-tags.php"); ?>

		<!-- Product -->
		<link href="<?php echo $url_site; ?>/assets/css/product.css?v=<?php echo date('YmdHis'); ?>" rel="stylesheet">

		<title>Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				body { padding-top: 0rem; }
				/*main { min-height: calc(100vh - 22rem); }*/

				@media (max-width: 575.98px) {
					body { padding-top: 0rem; }
				}
			</style>

	</head>
	<body>

<?php include_once("gtag-body.inc"); ?>

<main>
<div class="position-relative overflow-hidden p-3 p-xxl-5 mb-xxl-3 bg-purple-100">
	<div class="col-10 col-xxl-6 p-xxl-5 mx-auto my-5">
		<img class="display-4 fw-bold mb-4 img-fluid" src="<?php echo $url_site; ?>/assets/img/logo-cobib-200.png" alt="Cobib">
		<h1 class="display-4 fw-normal">Biblioteca particular e coletiva</h1>
		<p class="lead fw-normal">Liberdade para organizar seus livros pessoais e compartilhar com quem você confia.</p>
		<a class="btn btn-secondary bg-purple-800 mb-3 text-end" href="catalogo">Demonstração</a>

		<p class="mt-3">Receba novidades sobre o lançamento do <strong>Cobib</strong>:</p>
		<form class="row g-3 align-items-start">
			<div class="col">
				<label for="newsletter" class="visually-hidden">Seu e-mail</label>
				<input id="newsletter" type="text" class="form-control" placeholder="Seu e-mail">
			</div>
			<div class="col align-items-start">
				<button class="btn btn-secondary bg-purple-400" type="button">Cadastrar</button>
			</div>
		</form>
	</div>
	<div class="product-device shadow-sm d-none d-xxl-block"></div>
	<div class="product-device product-device-2 shadow-sm d-none d-xxl-block"></div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
	<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
		<div class="my-3 py-3">
		<h2 class="display-5">Catalogue seus livros</h2>
		<p class="lead">Organize sua coleção pessoal de livros impressos ou digitais.</p>
		<p>Cadastre seus livros a partir do ISBN ou inserindo os dados manualmente. Tenha acesso fácil de qualquer dispositivo e nunca mais compre livro duplicado!</p>
		</div>
		<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;background-image: url(<?php echo $url_site; ?>/assets/img/cobib-lfreitas-adicionar-800.png); background-size: cover; background-position: center top;"></div>
	</div>
	<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
		<div class="my-3 p-3">
		<h2 class="display-5">Coleção residencial</h2>
		<p class="lead">Busque de forma fácil no catálogo de quem mora com você.</p>
		<p>Adicione pessoas que dividem a casa com você e pesquise nos livros dela junto com os seus. Facilmente desvincule as bibliotecas em caso de mudança, sem cadastrar seus livros de novo.</p>
		</div>
		<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;background-image: url(<?php echo $url_site; ?>/assets/img/cobib-lfreitas-catalogo-800.png); background-size: cover; background-position: left top;"></div>
	</div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
	<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
		<div class="my-3 p-3">
		<h2 class="display-5">Faça anotações</h2>
		<p class="lead">Centralize suas anotações de leituras em um local só.</p>
		<p>Cansada(o) de ter anotações em diversos lugares? Registre aqui todos os destaques das suas leituras.</p>
		</div>
		<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;background-image: url(<?php echo $url_site; ?>/assets/img/cobib-lfreitas-anotacoes-800.png); background-size: cover; background-position: center top;"></div>
	</div>
	<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
		<div class="my-3 p-3">
		<h2 class="display-5">Registre empréstimo</h2>
		<p class="lead">Não esqueça mais para quem você emprestou um livro!</p>
		<p>Anote de forma fácil com quem está o livro emprestado e nunca mais perca controle de suas obras.</p>
		</div>
		<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;background-image: url(<?php echo $url_site; ?>/assets/img/cobib-lfreitas-emprestimo-800.png); background-size: cover; background-position: center top;"></div>
	</div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
	<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
		<div class="my-3 py-3">
		<h2 class="display-5">Avalie suas leituras</h2>
		<p class="lead">Dê nota aos livros e saiba quais são os seus favoritos.</p>
		<p>Avalie os livros de forma intuitiva e rápida.</p>
		</div>
		<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;background-image: url(<?php echo $url_site; ?>/assets/img/cobib-lfreitas-avaliar-800.png); background-size: cover; background-position: center top;"></div>
	</div>
	<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
		<div class="my-3 p-3">
		<h2 class="display-5">Acompanhe as leituras</h2>
		<p class="lead">Saiba os livros que já leu ou está lendo.</p>
		<p>Registre o progresso de suas leituras.</p>
		</div>
		<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;background-image: url(<?php echo $url_site; ?>/assets/img/cobib-lfreitas-leitura-800.png); background-size: cover; background-position: center top;"></div>
	</div>
</div>

<?php include_once("rodape.php"); ?>