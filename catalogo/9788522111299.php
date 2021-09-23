<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("../meta-tags.php"); ?>

		<title>Algoritmos e lógica de programação: um texto introdutório para engenharia &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				main { min-height: calc(100vh - 8rem); }
			</style>

	</head>
	<body>

<?php include_once("../navegacao-demo.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>

		<div class="row mt-4 px-4">
			<h2>Algoritmos e lógica de programação: um texto introdutório para engenharia</h2>
			<div class="my-3">
				<span class="badge bg-purple-800">Lógica de programação</span>
				<span class="badge bg-purple-800">Técnico</span>
			</div>
			<div>

				<ul class="list-inline">
					<li class="list-inline-item text-warning fs-5"><a data-bs-toggle="modal" data-bs-target="#editAvaliacao" title="Avaliar livro" class="text-warning" style="cursor: pointer;"><i class="bi-star-fill" role="img"></i> <i class="bi-star-fill" role="img"></i> <i class="bi-star-fill" role="img"></i> <i class="bi-star-fill" role="img"></i> <i class="bi-star-half" role="img"></i></a></li>
					<li class="list-inline-item"><i class="bi-bookmark-check" role="img"></i> Lido</li>
					<li class="list-inline-item"><i class="bi-chat-square-quote" role="img"></i> <a href="#anotacoes" class="text-dark">Ver anotações</a></li>
					<li class="list-inline-item text-danger"><i class="bi-person-check-fill" role="img"></i> <a href="#emprestimo" class="text-danger">Emprestado</a></li>
				</ul>

			</div>
		</div>

		<div class="row mt-4 px-4">
			<div class="col-12 col-md-3">
				<img src="<?php echo $url_site; ?>/assets/img/9788522111299.jpg" class="img-fluid cover" alt="Capa do livro" />
			</div>
			<div class="col-12 col-md-9 my-4 my-md-0">
				<dl>
					<dt>Título:</dt>
					<dd>Algoritmos e lógica de programação: um texto introdutório para engenharia</dd>
					<dt>Autores:</dt>
					<dd>Marco Antonio Furlan de Souza (Autor)</dd>
					<dd>Marcelo Marques Gomes (Autor)</dd>
					<dd>Marcio Vieira Soares (Autor)</dd>
					<dd>Ricardo Concilio (Autor)</dd>
					<dt>Dados de publicação</dt>
					<dd>São Paulo : Cengage Learning, 2016</dd>
					<dt>Edição</dt>
					<dd>2. ed. rev. e ampl.</dd>
					<dt>Descrição física</dt>
					<dd>Impresso &ndash; 234 p.</dd>
					<dt>ISBN</dt>
					<dd>9788522111299</dd>
				</dl>

				<p class="fw-bold">Ações:</p>

				<div class="d-grid gap-2 d-md-flex justify-content-md-start">
					<a href="#" title="Editar dados do livro" class="btn btn-secondary btn-sm"><i class="bi-pencil" role="img"></i> Editar</a>
					<a data-bs-toggle="modal" data-bs-target="#editLeitura" title="Alterar progresso de leitura" class="btn btn-secondary btn-sm"><i class="bi-bookmark-check" role="img"></i> Leitura</a>
					<a data-bs-toggle="modal" data-bs-target="#editAnotacao" title="Editar anotações" class="btn btn-secondary btn-sm"><i class="bi-chat-square-quote" role="img"></i> Anotações</a>
					<a data-bs-toggle="modal" data-bs-target="#editEmprestimo" title="Registrar empréstimo" class="btn btn-secondary btn-sm"><i class="bi-people-fill" role="img"></i> Empréstimo</a>
				</div>

				<h3 class="mt-4" id="anotacoes"><i class="bi-chat-square-quote" role="img"></i> Anotações <small><a data-bs-toggle="modal" data-bs-target="#editAnotacao" title="Editar anotações" class="btn btn-link text-dark btn-sm">[Editar]</a></small></h3>
				<p>Donec eu elementum quam, in bibendum elit. Donec sagittis sodales gravida. Vestibulum viverra felis nec ligula fringilla, in vestibulum eros mollis. Curabitur aliquet nisl eu turpis lobortis mattis. Maecenas quis neque fringilla, pulvinar lacus in, suscipit erat. Praesent vitae sodales nisl.</p>
				<p>"Nunc pretium ligula nec efficitur sagittis. Pellentesque eget semper nibh. Mauris ipsum est, sodales a odio sit amet, ullamcorper lacinia libero. Suspendisse eu mi eget purus elementum facilisis. Proin faucibus ante sit amet mauris convallis, id ullamcorper velit lobortis." (p. 95)</p>

				<h3 class="mt-4" id="emprestimo"><i class="bi-people-fill" role="img"></i> Empréstimo <small><a data-bs-toggle="modal" data-bs-target="#editEmprestimo" title="Editar anotações" class="btn btn-link text-dark btn-sm">[Editar]</a></small></h3>
				<ul>
					<li>Maria Silva, em 01/08/2019</li>
				</ul>

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
Donec eu elementum quam, in bibendum elit. Donec sagittis sodales gravida. Vestibulum viverra felis nec ligula fringilla, in vestibulum eros mollis. Curabitur aliquet nisl eu turpis lobortis mattis. Maecenas quis neque fringilla, pulvinar lacus in, suscipit erat. Praesent vitae sodales nisl.
"Nunc pretium ligula nec efficitur sagittis. Pellentesque eget semper nibh. Mauris ipsum est, sodales a odio sit amet, ullamcorper lacinia libero. Suspendisse eu mi eget purus elementum facilisis. Proin faucibus ante sit amet mauris convallis, id ullamcorper velit lobortis." (p. 95)
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
					<input type="text" class="form-control" id="nome" aria-describedby="nomeAjuda" value="Maria Silva">
					<div id="nomeAjuda" class="form-text">Nome da pessoa para quem você emprestou</div>
				</div>

				<div class="col-12 mt-3">
					<label for="data" class="form-label">Data</label>
					<input type="text" class="form-control" id="data" aria-describedby="dataAjuda" value="01/08/2019">
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

				<p id="avaliaLivro" class="fs-3 text-warning">
					<i class="bi-star-fill" role="img"></i> <i class="bi-star-fill" role="img"></i> <i class="bi-star-fill" role="img"></i> <i class="bi-star-fill" role="img"></i> <i class="bi-star-half" role="img"></i>
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
							<input class="form-check-input" type="radio" name="statusLeitura" id="lendo" value="">
							<label class="form-check-label" for="lendo">Lendo</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="statusLeitura" id="lido" value="" checked>
							<label class="form-check-label" for="lido">Lido</label>
						</div>
					</div>

					<div class="col-6 mt-3">
						<label for="data" class="form-label">Data início leitura <small>(opcional)</small></label>
						<input type="text" class="form-control" id="data" aria-describedby="dataInicioAjuda" placeholder="dd/mm/aaaa">
						<div id="dataInicioAjuda" class="form-text">Dia em que você começou a ler</div>
					</div>

					<div class="col-6 mt-3">
						<label for="data" class="form-label">Data fim leitura <small>(opcional)</small></label>
						<input type="text" class="form-control" id="data" aria-describedby="dataFimAjuda" placeholder="dd/mm/aaaa">
						<div id="dataFimAjuda" class="form-text">Dia em que você terminou de ler</div>
					</div>

					<div class="col-12 mt-3">
						<label for="progressoLeitura" class="form-label">Progresso da leitura</label>
						<input type="range" class="form-range" min="0" max="234" value="234" id="progressoLeitura" onchange="atualizaProgressoLeitura(this.value);">
						<div class="row align-items-center">
							<div class="col-3">
								<input type="text" class="form-control" id="valorProgresso" value="234">
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