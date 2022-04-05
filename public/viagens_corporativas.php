<!DOCTYPE HTML> 
<html>
<head>
<title>Atlanta Tour</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta http-equiv="content-language" content="pt-br" />
	<meta name="title" content="ATLANTA TOUR" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link href='css/slick.css' rel='stylesheet' type='text/css' media='screen'>
	<link href='css/slick-theme.css' rel='stylesheet' type='text/css' media='screen'>
	<link href='css/jquery-ui.css' rel='stylesheet' type='text/css' media='screen'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  rel="stylesheet">
	<link href='css/style.css?_v<?php echo time(); ?>' rel='stylesheet' type='text/css' media='screen'>

	<link rel="icon" href="img/favicon.png" type="image/x-icon">
</head>

<body class="pgViagens">
	<?php include('include/form.php'); ?>

	<header>
		<?php include('include/menu.php'); ?>
		<nav class="desk">
			<a href="index.php">HOME</a>
			<a href="#viagens" class="viagens mark">VIAGENS</a>
			<div class="submenu mark">
				<a href="viagens_lazer.php">Lazer</a>
				<a href="viagens_corporativas.php" class="mark">Corporativas <br>& Eventos</a>
			</div>
			<a href="sobre.php">SOBRE</a>
			<a href="#" class="btnFale">CONTATO</a>
		</nav>
		<img src="img/logo_virtuoso.png" class="desk">
	</header>

	<section id="cover" class="lazer">
		<h2 class="mobile">
			Viagens <br>Corporativas <br>& eventos
		</h2>
		<img src="img/img_corp.jpg">
		<div>
			<h2 class="desk">
				Viagens <br>Corporativas <br>& eventos
			</h2>
			<p>
				Contamos com uma equipe dedicada exclusivamente ao atendimento, planejamento e logística do seu evento e viagem corporativa. O nosso foco está na construção de roteiros detalhados com experiências enriquecedoras para todos os colaboradores da sua empresa.
			</p>
		</div>

		<a href="#" class="btnForm">Contato</a>
	</section>

<?php include('include/footer.php'); ?>