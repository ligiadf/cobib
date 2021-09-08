<div class="container">
	<footer class="py-3 my-4">
		<ul class="nav justify-content-center border-bottom border-top py-3 my-3">
			<li class="nav-item"><a href="<?php echo $url_site; ?>" class="nav-link px-2 text-muted">Apresentação</a></li>
			<li class="nav-item"><a href="<?php echo $url_site; ?>/catalogo" class="nav-link px-2 text-muted">Demonstração</a></li>
		</ul>

		<div class="row">
			<div class="col-lg-4 text-center text-lg-start">
				<p class="text-muted">Protótipo de produto criado por <a href="https://lfreitas.info?utm_source=prototipo&utm_medium=link&utm_campaign=ecpm" title="Visite o site">Lígia Freitas</a> para o curso de Product Management da Awari, em agosto 2021.</p>
				<p class="text-muted"><a href="https://lfreitas.info/portfolio/cobib?utm_source=prototipo&utm_medium=link&utm_campaign=ecpm" class="btn btn-secondary bg-purple-300">Saiba mais sobre o projeto</a></p>
			</div>

			<div class="col-lg-4 offset-lg-4 text-center text-lg-end">
				<p class="text-muted">Gostou? Tem alguma sugestão ou comentário? Gostaria de conversar sobre o produto?</p>
				<p><a class="btn btn-secondary bg-purple-300" href="mailto:lfreitas@lfreitas.info?subject=Feedback%20sobre%20Cobib" title="Enviar e-mail com feedback" target="_blank">Entre em contato</a></p>

				
			</div>
		</div>
		
	</footer>
</div>



	<script src="<?php echo $url_site; ?>/assets/js/bootstrap.bundle.min.js"></script>

<!-- Previa capa -->
	<script src="<?php echo $url_site; ?>/assets/js/preview-capa.js"></script>
	<script src="<?php echo $url_site; ?>/assets/js/range-leitura.js"></script>

<!-- Abrir links em nova aba -->
	<script type="text/javascript">
		var all_links = document.querySelectorAll('a');
		for (var i = 0; i < all_links.length; i++){
				var a = all_links[i];
				if(a.hostname != location.hostname) {
					a.rel = 'noopener';
					a.target = '_blank';
				}
		}
	</script>

	</body>
</html>