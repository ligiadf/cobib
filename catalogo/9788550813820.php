<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("../meta-tags.php"); ?>

		<title>Inspirado: como criar produtos de tecnologia que os clientes amam &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				main { min-height: calc(100vh - 8rem); }
			</style>

	</head>
	<body>

<?php include_once("../navegacao-2.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>

		<div class="row mt-4 px-4">
			<h2>Inspirado: como criar produtos de tecnologia que os clientes amam</h2>
			<div class="my-3">
				<span class="badge bg-purple-800">Gestão de produtos</span>
				<span class="badge bg-purple-800">Técnico</span>
			</div>
			<div>

				<ul class="list-inline">
					<li class="list-inline-item fs-5"><a data-bs-toggle="modal" data-bs-target="#editAvaliacao" title="Avaliar livro" class="text-warning" style="cursor: pointer;"><i class="bi-star" role="img"></i> <i class="bi-star" role="img"></i> <i class="bi-star" role="img"></i> <i class="bi-star" role="img"></i> <i class="bi-star" role="img"></i></a></li>
					<li class="list-inline-item"><i class="bi-bookmark-check" role="img"></i> Lendo desde 24/08/2021</li>
					<li class="list-inline-item"><i class="bi-chat-square-quote" role="img"></i> <a href="#anotacoes" class="text-dark">Ver anotações</a></li>
					<li class="list-inline-item"><i class="bi-people-fill" role="img"></i> Não emprestado</li>
				</ul>

			</div>
		</div>

		<div class="row mt-4 px-4">
			<div class="col-12 col-md-3">
				<img src="<?php echo $url_site; ?>/assets/img/9788550813820.jpg" class="img-fluid cover" alt="Capa do livro" />
			</div>
			<div class="col-12 col-md-9 my-4 my-md-0">
				<dl>
					<dt>Título:</dt>
					<dd>Inspirado: como criar produtos de tecnologia que os clientes amam</dd>
					<dt>Autores:</dt>
					<dd>Marty Cagan (Autor)</dd>
					<dd>Luciana Palhanos (Tradutor)</dd>
					<dt>Dados de publicação</dt>
					<dd>Rio de Janeiro: Alta Books, 2021</dd>
					<dt>Descrição física</dt>
					<dd>Impresso &ndash; 344 p.</dd>
					<dt>ISBN</dt>
					<dd>9788550813820</dd>
				</dl>

				<p class="fw-bold">Ações:</p>

				<div class="d-grid gap-2 d-md-flex justify-content-md-start">
					<a href="#" title="Editar dados do livro" class="btn btn-secondary btn-sm"><i class="bi-pencil" role="img"></i> Editar dados</a>
					<a data-bs-toggle="modal" data-bs-target="#editLeitura" title="Alterar progresso de leitura" class="btn btn-secondary btn-sm"><i class="bi-bookmark-check" role="img"></i> Leitura</a>
					<a data-bs-toggle="modal" data-bs-target="#editAnotacao" title="Editar anotações" class="btn btn-secondary btn-sm"><i class="bi-chat-square-quote" role="img"></i> Anotações</a>
					<a data-bs-toggle="modal" data-bs-target="#editEmprestimo" title="Registrar empréstimo" class="btn btn-secondary btn-sm"><i class="bi-people-fill" role="img"></i> Empréstimo</a>
				</div>

				<h3 class="mt-4" id="anotacoes"><i class="bi-chat-square-quote" role="img"></i> Anotações <small><a data-bs-toggle="modal" data-bs-target="#editAnotacao" title="Editar anotações" class="btn btn-link text-dark btn-sm">[Editar]</a></small></h3>
				<p>"[...] os princípios de produto falam sobre a natureza dos produtos que você quer criar." (p. 141)</p>
				<p>Princípios de protótipos: ver p. 235</p>
				<p>"[...] a ideia é escrever apenas o código suficiente para mitigar o risco de viabilidade técnica." (p. 238)</p>

			</div>
		</div>

<!-- Modal Anotações-->
<div class="modal fade" id="editAnotacao" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editarAnotacoes" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editarAnotacoes"><i class="bi-chat-square-quote" role="img"></i> Anotações</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">
				<textarea class="form-control" rows="15">
"[...] os princípios de produto falam sobre a natureza dos produtos que você quer criar." (p. 141)
Princípios de protótipos: ver p. 235
"[...] a ideia é escrever apenas o código suficiente para mitigar o risco de viabilidade técnica." (p. 238)
				</textarea>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Salvar</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Empréstimos-->
<div class="modal fade" id="editEmprestimo" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editarEmprestimos" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editarEmprestimos"><i class="bi-people-fill" role="img"></i> Empréstimo</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">


			<form action="9788522111299">
				<div class="col-12">
					<label for="nome" class="form-label">Emprestado para</label>
					<input type="text" class="form-control" id="nome" aria-describedby="nomeAjuda">
					<div id="nomeAjuda" class="form-text">Nome da pessoa para quem você emprestou</div>
				</div>

				<div class="col-12 mt-3">
					<label for="data" class="form-label">Data</label>
					<input type="text" class="form-control" id="data" aria-describedby="dataAjuda">
					<div id="dataAjuda" class="form-text">Dia em que você emprestou o livro</div>
				</div>
			</form>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Salvar</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal Avaliação-->
<div class="modal fade" id="editAvaliacao" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editarAvaliacao" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editarAvaliacao"><i class="bi-star-half" role="img"></i> Avaliação</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">

				<p id="avaliaLivro" class="fs-3 text-secondary">
					<i class="bi-star-fill" role="img"></i>
					<i class="bi-star-fill" role="img"></i>
					<i class="bi-star-fill" role="img"></i>
					<i class="bi-star-fill" role="img"></i>
					<i class="bi-star-fill" role="img"></i>
				</p>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Salvar</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Leitura-->
<div class="modal fade" id="editLeitura" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editarLeitura" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editarLeitura"><i class="bi-bookmark-check" role="img"></i> Progresso leitura</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">

				<form action="9788522111299">
					<div class="col-12">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="statusLeitura" id="aLer" value="">
							<label class="form-check-label" for="aLer">A ler</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="statusLeitura" id="lendo" value="" checked>
							<label class="form-check-label" for="lendo">Lendo</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="statusLeitura" id="lido" value="">
							<label class="form-check-label" for="lido">Lido</label>
						</div>
					</div>

					<div class="col-6 mt-3">
						<label for="data" class="form-label">Data início leitura <small>(opcional)</small></label>
						<input type="text" class="form-control" id="data" aria-describedby="dataInicioAjuda" value="24/08/2021">
						<div id="dataInicioAjuda" class="form-text">Dia em que você começou a ler</div>
					</div>

					<div class="col-6 mt-3">
						<label for="data" class="form-label">Data fim leitura <small>(opcional)</small></label>
						<input type="text" class="form-control" id="data" aria-describedby="dataFimAjuda" placeholder="dd/mm/aaaa">
						<div id="dataFimAjuda" class="form-text">Dia em que você terminou de ler</div>
					</div>
					<div class="col-12 mt-3">
						<label for="progressoLeitura" class="form-label">Progresso da leitura</label>
						<input type="range" class="form-range" min="0" max="344" value="100" id="progressoLeitura" onchange="atualizaProgressoLeitura(this.value);">
						<div class="row align-items-center">
							<div class="col-3">
								<input type="text" class="form-control" id="valorProgresso" value="100">
							</div>
							<div class="col-auto">
								<span class="form-text">Páginas lidas</span>
							</div>
						</div>

					</div>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Salvar</button>
			</div>
		</div>
	</div>
</div>

</main>
</div>

<?php include_once("../rodape.php"); ?>