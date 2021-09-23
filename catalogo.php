<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("meta-tags.php"); ?>

		<title>Catálogo &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				.nav-catalogo { border-bottom: 2px solid #59359A; }
			</style>

	</head>
	<body>

<?php include_once("navegacao-demo.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>
		<div class="row mt-4">
			<h2>Catálogo</h2>
		</div>
		<div class="row">
			<form class="row row-cols-lg-auto g-3 align-items-center">
				<div class="col-9">
					<label class="visually-hidden" for="buscarCatalogo">Busca</label>
					<input type="text" class="form-control" id="buscarCatalogo" placeholder="Busque por título, autor, ISBN, ou anotações">
				</div>

				<div class="col-2">
					<button type="submit" class="btn btn-secondary bg-purple-800">Buscar</button>
				</div>
			</form>
		</div>

		<div class="row">

			<form class="row gy-2 gx-3 align-items-center">
				<div class="col-auto"><i class="bi-filter" role="img"></i> 
					<label for="autoSizingSelect">Filtrar por</label>
					<select class="form-select" id="autoSizingSelect">
					  <option selected>Mostrar todos</option>
					  <option value="">Meus livros</option>
					  <option value="">Dos coabitantes</option>
					  <option value="">Lidos</option>
					  <option value="">Lendo</option>
					  <option value="">Não lidos</option>
					  <option value="">Emprestados</option>
					</select>
				</div>
				<div class="col-auto"><i class="bi-sort-down" role="img"></i> 
					<label for="autoSizingSelect">Ordenar por</label>
					<select class="form-select" id="autoSizingSelect">
					  <option value="" selected>Título</option>
					  <option value="">Autor</option>
					  <option value="">Melhor avaliado</option>
					</select>
				</div>

			</form>
			<p class="mt-3 mb-0 text-muted fst-italic">Mostrando 1-16 (de 153 livros).</p>
		</div>

		<div class="row mt-4 px-4">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="<?php echo $url_site; ?>/assets/img/9788522111299.jpg" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="catalogo/9788522111299">Algoritmos e lógica de programação: um texto introdutório para engenharia</a></li>
						<li>Marco Antonio Furlan de Souza <em>e outros</em></li>
						<li class="fs-md-5">
							<i class="text-success bi-bookmark-check-fill me-2" role="img" aria-label="Lido" title="Lido"></i>
							<i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star-half" role="img"></i>
						</li>
						<li>
							<a href="catalogo/9788522111299#emprestimo" class="text-danger me-2" title="Ver para quem está emprestado"><i class="bi-person-check-fill" role="img" aria-label="Emprestado" title="Ver para quem está emprestado"></i> </a>
							<a href="catalogo/9788522111299#anotacoes" class="text-dark me-2" title="Ver anotações"><i class="bi-chat-square-quote" role="img" aria-label="Ver anotações" title="Ver anotações"></i> Anotações</a>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="<?php echo $url_site; ?>/assets/img/9788580556148.jpg" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><i class="bi-intersect text-primary" role="img" aria-label="Compartilhado" title="Compartilhado"></i> <a href="catalogo/9788580556148">As bases farmacológicas da terapêutica de Goodman &amp; Gilman</a></li>
						<li>Laurence L. Brunton, Randa Hilal-Dandan, Björn C. Knollmann</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="<?php echo $url_site; ?>/assets/img/9788543106632.jpg" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="catalogo/9788543106632">Comece pelo porquê: como grandes lideres inspiram pessoas e equipes a agir</a></li>
						<li>Simon Sinek</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3">
				<div class="col-5 col-md-2">
					<img src="<?php echo $url_site; ?>/assets/img/9788550813820.jpg" class="img-fluid cover" alt="Capa do livro" />
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="catalogo/9788550813820">Inspirado: como criar produtos de tecnologia que os clientes amam</a></li>
						<li>Marty Cagan, Luciana Palhanos</li>
						<li class="fs-md-5">
							<i class="text-success bi-bookmark-star me-2" role="img" aria-label="Lendo desde 24/08/2021" title="Lendo desde 24/08/2021"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
						<li><a href="catalogo/9788550813820#anotacoes" class="text-dark me-2" title="Ver anotações"><i class="bi-chat-square-quote" role="img" aria-label="Ver anotações" title="Ver anotações"></i> Anotações</a></li>

					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3">
				<div class="col-5 col-md-2">
					<img src="<?php echo $url_site; ?>/assets/img/9788589731355.jpg" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><i class="bi-intersect text-primary" role="img" aria-label="Compartilhado" title="Compartilhado"></i> <a href="catalogo/9788589731355">Princípios Físico-Químicos em Farmácia</a></li>
						<li>Alexander T. Florence, David Attwood, Zuleika Rothschild</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">



			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-success bi-bookmark-check-fill me-2" role="img" aria-label="Lido" title="Lido"></i>
							<i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-success bi-bookmark-check-fill me-2" role="img" aria-label="Lido" title="Lido"></i>
							<i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star-fill" role="img"></i> <i class="text-warning bi-star-half" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><i class="bi-intersect text-primary" role="img" aria-label="Compartilhado" title="Compartilhado"></i> <a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><i class="bi-intersect text-primary" role="img" aria-label="Compartilhado" title="Compartilhado"></i> <a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>

			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>


			<hr class="mt-3 mb-5 d-md-none">

			<div class="row col-md-6 my-3 mt-md-4">
				<div class="col-5 col-md-2">
					<img src="https://via.placeholder.com/150x220/ccc?text=Capa" class="img-fluid cover" alt="Capa do livro" />
					
				</div>
				<div class="col-7 col-md-10">
					<ul class="list-unstyled">
						<li class="fw-bold"><a href="#">Título de um livro</a></li>
						<li>Maria da Silva, Fulana Souza</li>
						<li class="fs-md-5">
							<i class="text-secondary bi-bookmark-x-fill text-danger me-2" role="img" aria-label="Não lido" title="Não lido"></i>
							<i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i> <i class="text-warning bi-star" role="img"></i>
						</li>
					</ul>
				</div>
			</div>


			<div class="col-12 my-5">
				<nav aria-label="Page navigation">
					<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1" aria-disabled="true">&laquo;</a>
					</li>
					<li class="page-item disabled"><a class="page-link" href="#" aria-disabled="true">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item disabled"><a class="page-link" href="#" aria-disabled="true">...</a></li>
					<li class="page-item"><a class="page-link" href="#">9</a></li>
					<li class="page-item"><a class="page-link" href="#">10</a></li>
					<li class="page-item">
						<a class="page-link" href="#">&raquo;</a>
					</li>
					</ul>
				</nav>
			</div>

		</div>

</main>
</div>
<?php include_once("rodape.php"); ?>
