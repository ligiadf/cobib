<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("../meta-tags.php"); ?>

		<title>Adicionar manualmente &ndash; Cobib &ndash; Biblioteca particular e coletiva</title>

			<style type="text/css">
				.nav-exportar { border-bottom: 2px solid #59359A; }
			</style>

	</head>
	<body>

<?php include_once("../navegacao-2.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>


		<div class="row mt-4 px-4">
			<h2>Adicionar livro manualmente</h2>
		</div>

		<div class="row mt-4 px-4">

		<form action="categorizar">
			<div class="row g-3">
				<div class="col-md-9">
					<label for="titulo" class="form-label">Título e subtítulo <span class="text-muted">*</span></label>
					<input type="text" class="form-control" id="titulo" aria-describedby="tituloAjuda">
					<div id="tituloAjuda" class="form-text">Título: subtítulo</div>
				</div>

				<div class="col-md-3">
					<label for="iniciarEm" class="form-label">Ordem alfabética a partir</label>
					<select class="form-select" id="iniciarEm" aria-describedby="iniciarEmAjuda">
						<option value="1" selected>do início</option>
						<option value="2">da 2ª letra</option>
						<option value="3">da 3ª letra</option>
						<option value="4">da 4ª letra</option>
						<option value="5">da 5ª letra</option>
						<option value="6">da 6ª letra</option>
						<option value="7">da 7ª letra</option>
						<option value="8">da 8ª letra</option>
						<option value="9">da 9ª letra</option>
						<option value="10">da 10ª letra</option>
					</select>
					<div id="iniciarEmAjuda" class="form-text">Exemplo: se o título é "A Casa", selecione "da 3ª letra".</div>
				</div>

				<div class="col-md-9">
					<label for="primeiroAutor" class="form-label">Primeiro(a) autor(a)</label>
					<input type="text" class="form-control" id="primeiroAutor" aria-describedby="autorAjuda">
					<div id="autorAjuda" class="form-text">Sobrenome, Nome</div>
				</div>

				<div class="col-md-3">
					<label for="funcaoPrimeiroAutor" class="form-label">Função do(a) primeiro(a) autor(a)</label>
					<select class="form-select" id="funcaoPrimeiroAutor" aria-describedby="funcaoPrimeiroAutorAjuda">
						<option value="Autor" selected>Autor(a)</option>
						<option value="Editor">Editor(a)</option>
						<option value="Ilustrador">Ilustrador(a)</option>
						<option value="Organizador">Organizador(a)</option>
						<option value="Tradutor">Tradutor(a)</option>
						<option value="Outro">Outro(a)</option>
					</select>
					<div id="funcaoPrimeiroAutorAjuda" class="form-text">Indique o tipo de responsabilidade da pessoa na obra</div>
				</div>

				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="#" class="btn btn-secondary btn-sm"><i class="bi-person-plus-fill" role="img"></i> Adicionar mais autores</a>
				</div>

				<div class="col-md-5">
					<label for="cidade" class="form-label">Cidade</label>
					<input class="form-control" list="cidadeOpcoes" id="cidade" placeholder="Comece a digitar..." aria-describedby="cidadeAjuda">
						<datalist id="cidadeOpcoes">
							<option value="Aracaju">
							<option value="Assunção">
							<option value="Belo Horizonte">
							<option value="Belém">
							<option value="Berlim">
							<option value="Boa Vista">
							<option value="Bogotá">
							<option value="Boston">
							<option value="Brasília, DF">
							<option value="Buenos Aires">
							<option value="Caiena">
							<option value="Campo Grande">
							<option value="Caracas">
							<option value="Chicago">
							<option value="Cuiabá">
							<option value="Curitiba">
							<option value="Dublin">
							<option value="Florianópolis">
							<option value="Fortaleza">
							<option value="Georgetown">
							<option value="Goiânia">
							<option value="João Pessoa">
							<option value="La Paz">
							<option value="Lima">
							<option value="Lisboa">
							<option value="Macapá">
							<option value="Maceió">
							<option value="Madrid">
							<option value="Manaus">
							<option value="Montevidéu">
							<option value="Natal">
							<option value="New York">
							<option value="Ottawa">
							<option value="Palmas">
							<option value="Paramaribo">
							<option value="Paris">
							<option value="Porto Alegre">
							<option value="Porto Velho">
							<option value="Recife">
							<option value="Rio Branco">
							<option value="Rio de Janeiro">
							<option value="Salvador">
							<option value="Santiago">
							<option value="São Luís">
							<option value="São Paulo">
							<option value="Teresina">
							<option value="Toronto">
							<option value="Vancouver">
							<option value="Vitória">
							<option value="Washington D.C.">
						</datalist>
					<div id="cidadeAjuda" class="form-text">Local de publicação: selecione um pré-cadastrado ou adicione um novo.</div>
				</div>

				<div class="col-md-5">
					<label for="editora" class="form-label">Editora</label>
						<input class="form-control" list="editoraOpcoes" id="editora" placeholder="Comece a digitar..." aria-describedby="editoraAjuda">
						<datalist id="editoraOpcoes">
							<option value="Companhia das letras">
							<option value="Ediouro">
							<option value="Record">
							<option value="Intrínseca">
							<option value="Rocco">
							<option value="Globo">
							<option value="Saraiva">
							<option value="FTD">
							<option value="Sextante">
							<option value="Alta Books">
							<option value="Pearson">
							<option value="Thomson Reuters">
							<option value="Wiley">
							<option value="O'Reilly">
							<option value="Fórum">
							<option value="Springer Nature">
						</datalist>
						<div id="editoraAjuda" class="form-text">Local de publicação: selecione um pré-cadastrado ou adicione um novo.</div>

				</div>

				<div class="col-md-2">
					<label for="ano" class="form-label">Ano de publicação <span class="text-muted">*</span></label>
					<input type="text" class="form-control" id="ano" aria-describedby="anoAjuda">
					<div id="anoAjuda" class="form-text">Ano exato ou aproximado.</div>
				</div>

				<div class="col-md-3">
					<label for="paginas" class="form-label">Páginas</label>
					<input type="text" class="form-control" id="paginas" aria-describedby="paginasAjuda">
					<div id="paginasAjuda" class="form-text">Total de páginas do livro. Exemplo: 305</div>
				</div>

				<div class="w-100"></div>

				<div class="col-md-3">
					<label for="edicao" class="form-label">Edição</label>
					<input type="text" class="form-control" id="edicao" aria-describedby="edicaoAjuda">
					<div id="edicaoAjuda" class="form-text">Exemplo: 3. ed. rev.</div>
				</div>

				<div class="w-100"></div>

				<div class="col-md-2">
					<p class="fw-bold">Formato do livro <span class="text-muted">*</span></p>
					<div class="form-check">
						<input id="impresso" name="formato" type="radio" class="form-check-input" checked required>
						<label class="form-check-label fw-normal" for="impresso">Impresso</label>
					</div>
					<div class="form-check">
						<input id="digital" name="formato" type="radio" class="form-check-input" required>
						<label class="form-check-label fw-normal" for="digital">Digital (e-book)</label>
					</div>

					<div class="form-check">
						<input id="audiolivro" name="formato" type="radio" class="form-check-input" required>
						<label class="form-check-label fw-normal" for="audiolivro">Audiolivro</label>
					</div>
				</div>

				<div class="w-100"></div>

				<div class="col-md-4">
					<label for="isbn" class="form-label">ISBN</label>
					<input type="text" class="form-control" id="isbn" aria-describedby="isbnAjuda">
					<div id="isbnAjuda" class="form-text">Informe sem o hífen.</div>
				</div>

				<div class="w-100"></div>

				<div class="col-md-4">
					<label for="capa" class="form-label">Enviar capa do livro</label>
					<input class="form-control" type="file" id="capa" onchange="previewFile()">
				</div>

				<div class="col-md-4">
					<img id="previa" class="text-muted fst-italic" alt="Capa do livro" />
				</div>

			</div>

			<div class="row mt-5">
				<div class="col">
					<a href="/adicionar" class="btn btn-link text-danger">Cancelar</a>
				</div>

				<div class="col text-end">
					<button class="btn btn-success btn-md-lg " type="submit">Salvar e avançar</button>
					<p class="text-muted">Salvar os dados e selecionar categoria</p>
				</div>
			</div>

		</form>



</div>


</main>
</div>


<?php include_once("../rodape.php"); ?>