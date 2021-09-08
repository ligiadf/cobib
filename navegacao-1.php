<?php include_once("gtag-body.inc"); ?>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
	<div class="container-fluid col-xxl-8">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="/">Cobib <span class="d-none d-lg-inline-block">&ndash; Biblioteca particular e coletiva</span></a>

		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link nav-apresentacao" href="<?php echo $url_site; ?>">Apresentação</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-funcionalidades" href="<?php echo $url_site; ?>/funcionalidades">Funcionalidades</a>
				</li>
				<!--<li class="nav-item">
					<a class="nav-link nav-planos" aria-current="page" href="<?php //echo $url_site; ?>/planos">Planos</a>
				</li>-->
				<li class="nav-item">
					<a class="nav-link nav-login" href="<?php echo $url_site; ?>/login">Login</a>
				</li>
				<li class="nav-item">
					<a class="btn btn-secondary bg-purple-800 nav-cadastrar ms-lg-3" href="<?php echo $url_site; ?>/catalogo">Acessar a demo</a>
				</li>
			</ul>
		</div>
	</div>
</nav>