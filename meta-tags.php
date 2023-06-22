		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-5TCKFRKKVT"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-5TCKFRKKVT');
		</script>

		<?php include_once("config.php"); ?>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:url" content="<?php echo $url_site; ?>" />
		<meta property="og:title" content="Cobib - Biblioteca particular e coletiva" />
		<meta property="og:image" content="<?php echo $url_site; ?>/assets/img/logo-cobib.png" />
		<meta property="og:description" content="Liberdade para organizar seus livros pessoais e compartilhar com quem você confia - cobib.freitas.info" />

		<meta name="author" content="Lígia Lilly Freitas" />
		<meta name="description" content="Organize sua biblioteca pessoal" />
		<meta name="keywords" content="Biblioteca pessoal, Catálogo, Livros" />

		<meta name="theme-color" content="#654F9C">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url_site; ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url_site; ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url_site; ?>/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $url_site; ?>/site.webmanifest">

		<link rel="canonical" href="<?php echo $url_site; ?>/">

		<!-- Bootstrap core CSS -->
		<link href="<?php echo $url_site; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $url_site; ?>/assets/icons/bootstrap-icons.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 

		<!-- Tema LF -->
		<link href="<?php echo $url_site; ?>/assets/css/tema-lf.css?v=<?php echo date('YmdHis'); ?>" rel="stylesheet">