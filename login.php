<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("meta-tags.php"); ?>

		<title>Login &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				a.nav-login { color: #59359A!important; }
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

			<h1 class="mt-2 mb-4">Acesse sua conta</h1>

			<form action="catalogo">
				<div class="form-floating mb-3">
					<input type="email" class="form-control" id="campoEmail" placeholder="nome@example.com">
					<label for="campoEmail">E-mail</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" id="campoSenha" placeholder="**********">
					<label for="campoSenha">Senha</label>
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="manterLogado">
					<label class="form-check-label fw-normal" for="manterLogado">Manter logado neste dispositivo</label>
				</div>
				<p class="text-muted">Ao fazer login você está de acordo com os <a href="#">Termos de uso</a> e com a <a href="#">Política de privacidade</a> do Cobib.</p>

				<div class="d-grid gap-2 col-2 mx-auto">
					<button type="submit" class="btn btn-lg btn-secondary bg-purple-800 text-center">Entrar</button>
				</div>

				<p class="mt-4 text-center">Ainda não tem cadastro? <a href="cadastro">Cria uma conta agora mesmo</a> :)</p>

			</form>

		</div>

</main>
</div>
<?php include_once("rodape.php"); ?>