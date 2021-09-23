<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("meta-tags.php"); ?>

		<title>Criar conta &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				main { min-height: calc(100vh - 22rem); }
				@media (max-width: 575.98px) {
					body { padding-top: 4rem; }
				}
			</style>

	</head>
	<body>

<?php include_once("navegacao-1.php"); ?>

<main>
<div class="container-xxl">
<div class="col-xxl-10 mx-auto p-3 ty-md-5">

		<!--<img src="<?php //echo $logo; ?>" class="img-fluid mx-auto d-block" alt="Logotipo Cobib" />-->

		<div class="row col-xs-12 col-lg-6 offset-lg-3 mt-4 px-4">

			<h1 class="mt-2 mb-4">Crie sua conta</h1>

			<form action="catalogo">
				<div class="form-floating mb-3">
					<input type="text" class="form-control" id="campoNome" placeholder="Seu nome">
					<label for="campoNome">Nome</label>
				</div>
				<div class="form-floating mb-3">
					<input type="email" class="form-control" id="campoEmail" placeholder="nome@example.com">
					<label for="campoEmail">E-mail</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" id="campoSenha" placeholder="**********">
					<label for="campoSenha">Senha</label>
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="aceitarTermos">
					<label class="form-check-label fw-normal" for="aceitarTermos">Informo que li e concordo com os <a href="termos-uso">Termos de uso</a> e com a <a href="politica-privacidade">Política de privacidade</a> do Cobib.</label>
				</div>
				<p class="text-muted"></p>

				<div class="d-grid gap-2 col-4 mx-auto">
					<button type="submit" class="btn btn-lg  btn-secondary bg-purple-800 text-center">Criar conta</button>
				</div>

				<p class="mt-4 text-center">Já tem conta? <a href="login">Faça login</a> :)</p>

			</form>

		</div>

</main>
</div>
<?php include_once("rodape.php"); ?>