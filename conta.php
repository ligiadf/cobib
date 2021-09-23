<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("meta-tags.php"); ?>

		<title>Gerenciar sua conta &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

	</head>
	<body>

<?php include_once("navegacao-demo.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>


		<div class="row mt-4 px-4">
			<h2>Configurações de seu catálogo e de sua conta</h2>
		</div>

		<div class="row px-4 my-4">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="configCatalogo-tab" data-bs-toggle="tab" data-bs-target="#configCatalogo" type="button" role="tab" aria-controls="configCatalogo" aria-selected="true">Catálogo</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="configConta-tab" data-bs-toggle="tab" data-bs-target="#configConta" type="button" role="tab" aria-controls="configConta" aria-selected="false">Conta</button>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="my-4 tab-pane fade show active" id="configCatalogo" role="tabpanel" aria-labelledby="configCatalogo-tab">

					<h3>Categorias</h3>
					<p>Gerencie as categorias que organizam seus livros. Você pode criar novas, renomear existentes ou excluir categorias fora de uso.</p>
					
					<a href="#" class="btn btn-secondary"><i class="bi-folder" role="img"></i> Editar categorias</a>

					<hr class="my-4">

					<h3 class="mt-4">Exportar dados</h3>
					<p>Salve em seu dispositivo os dados de seus livros em formato CSV.</p>

					<a href="#" class="btn btn-secondary"><i class="bi-cloud-download-fill" role="img"></i> Exportar dados</a>

					<hr class="my-4">

					<h3 class="mt-4">Coleção residencial</h3>
					<p>Gerencie as pessoas que fazem parte da sua coleção residencial. <a href="#">Saiba mais</a>.</p>
					<p>Em seu catálogo, os livros pertencentes a elas são indicados pelo ícone <i class="bi-intersect text-primary" role="img" aria-label="Compartilhado" title="Compartilhado"></i></p>
					
					<table class="table table-sm">
						<tr>
							<th>Nome</th>
							<th>Situação</th>
							<th>Ação</th>
						</tr>
						<tr>
							<td>Tainara Matos<br>
							(t.mt@fake.com)</td>
							<td>Ativo desde 28/08/2021</td>
							<th><a href="#" title="Desvincular" class="btn btn-danger"><i class="bi-person-dash-fill" role="img"></i> </a></th>
						</tr>
					</table>

					<a href="#" title="Desvincular" class="btn btn-success my-2"><i class="bi-person-plus-fill" role="img"></i> Adicionar pessoa</a>

					<p><strong>Nota</strong>: Após inserir o e-mail é necessário que a pessoa confirme a vinculação. Caso ela não possua conta no Cobib, será necessário primeiro criar uma.</p>

				</div>
				<div class="my-4 tab-pane fade" id="configConta" role="tabpanel" aria-labelledby="configConta-tab">
					<h3>Seus dados</h3>
						<dl>
							<dt>Nome:</dt>
							<dd>Lígia F.</dd>
							<dt>E-mail:</dt>
							<dd>meuemail@gmail.com</dd>
						</dl>

						<a href="#" class="btn btn-secondary"><i class="bi-pencil" role="img"></i> Editar seus dados</a>


					<h3 class="mt-4">Sobre o uso do Cobib</h3>

						<p>Ao criar a conta e utilizar o sistema, você concorda com os <a href="#">Termos de uso</a> e <a href="#">Política de privacidade</a>.</p>

						<p>Conforme a Lei Geral de Proteção de Dados (LGPD), você pode solicitar uma cópia dos seus dados armazenados em nosso servidor.</p>

						<a href="#" class="btn btn-secondary"><i class="bi-pencil" role="img"></i> Solicitar cópia de seus dados</a>

					<h3 class="mt-4">Excluir sua conta</h3>

						<p>Caso você não queria mais utilizar o Cobib, você pode excluir sua conta utilizando a opção a seguir. Recomendamos <a href="#">exportar os seus dados</a> antes de excluir a conta.</p>

						<a href="#" class="btn btn-danger"><i class="bi-trash" role="img"></i> Excluir sua conta e todos os seus dados</a>
				</div>
			</div>


		</div>

</main>
</div>
<?php include_once("rodape.php"); ?>