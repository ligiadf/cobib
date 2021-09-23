<div class="container">
	<footer class="row row-cols-3 d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		<div class="col-12 col-md-4 mt-5 mt-md-1">
			<p class="mb-0 text-muted">&copy; 2021 Cobib &ndash; Biblioteca particular e coletiva, um protótipo de <a href="https://lfreitas.info?utm_source=prototipo&utm_medium=link&utm_campaign=ecpm" title="Visite o site de Lígia Freitas">Lígia Freitas</a> para o curso de Product Management da Awari. <a href="https://lfreitas.info/portfolio/cobib?utm_source=prototipo&utm_medium=link&utm_campaign=ecpm" title="Mais informações sobre o projeto">Saiba mais sobre o projeto</a> ou <a href="mailto:lfreitas@lfreitas.info?subject=Feedback%20sobre%20Cobib" title="Enviar e-mail com feedback" target="_blank">entre em contato</a> :)</p>
		</div>

		<div class="col-12 col-md-4 mt-5 mt-md-1">
			<a href="<?php echo $url_site; ?>" class="d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
				<img src="<?php echo $url_site; ?>/assets/img/logo-cobib-footer.png" alt="">
			</a>
		</div>

		<div class="col-12 col-md-4 mt-5 mt-md-1">
			<ul class="nav justify-content-md-end">
				<li class="nav-item"><a href="<?php echo $url_site; ?>" class="nav-link px-1 text-muted">Apresentação</a></li>
				<li class="nav-item"><a href="<?php echo $url_site; ?>/catalogo" class="nav-link px-1 text-muted">Demonstração</a></li>
				<li class="nav-item"><a href="https://lfreitas.info/portfolio/cobib?utm_source=prototipo&utm_medium=link&utm_campaign=ecpm" class="nav-link px-1 text-muted">Sobre o projeto</a></li>
			</ul>
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