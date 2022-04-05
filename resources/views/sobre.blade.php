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

<body>
	@include('include.form')

	<header>
		@include('include.menu')
		<nav class="desk">
			<a href="{{ route('index') }}">HOME</a>
			<a href="#viagens" class="viagens">VIAGENS</a>
			<div class="submenu">
				<a href="{{ route('lazer') }}">Lazer</a>
				<a href="{{ route('corporativas') }}">Corporativas <br>& Eventos</a>
			</div>
			<a href="{{ route('sobre') }}" class="mark">SOBRE</a>
			<a href="#" class="btnFale">CONTATO</a>
		</nav>
		<img src="img/logo_virtuoso.png" class="desk">
	</header>

	<section id="coverSobre">
		<p><b>Somos especialistas em viagens e a nossa história comprova.</b><br>
		São mais de 45 anos de serviços em viagens de lazer, corporativas
		& eventos. E uma equipe com agentes altamente capacitados com certificações e premiações nacionais e internacionais, apta a atender clientes no mundo todo.</p>
		<br>
		<br>
		<p>Nosso propósito se mantém o mesmo desde a fundação da empresa em 1976: <b>transformar viagens em experiências realmente únicas.</b> Do primeiro contato com o cliente ao estudo do roteiro, do embarque ao desembarque, em todas as etapas, oferecemos um atendimento dedicado, eficiente e humanizado para tudo o que você precisar.</p>

		<a href="#" class="btnForm">Contato</a>
	</section>


	<section id="parceiros">
		<div>
			<h4>Parceiros</h4>

			<ul class="slick">
				<li> <img src="img/logo_leading.png"> </li>
				<li> <img src="img/logo_ritz.png"> </li>
				<li> <img src="img/logo_relais.png"> </li>
				<li> <img src="img/logo_oberoi.png"> </li>
				<li> <img src="img/logo_four_seasons.png"> </li>
				<li> <img src="img/logo_leading.png"> </li>
				<li> <img src="img/logo_ritz.png"> </li>
				<li> <img src="img/logo_relais.png"> </li>
				<li> <img src="img/logo_oberoi.png"> </li>
				<li> <img src="img/logo_four_seasons.png"> </li>
			</ul>
		</div>
		<br><br>
		<div>
			<h4>Prêmios & Certificados</h4>

			<ul class="slick">
				<li> <img src="img/logo_virtuoso_member.png"> </li>
				<li> <img src="img/logo_stars.png"> </li>
				<li> <img src="img/logo_four_seasons_partner.png"> </li>
				<li> <img src="img/logo_jumeirah.png"> </li>
				<li> <img src="img/logo_belmond.png"> </li>
				<li> <img src="img/logo_virtuoso_member.png"> </li>
				<li> <img src="img/logo_stars.png"> </li>
				<li> <img src="img/logo_four_seasons_partner.png"> </li>
				<li> <img src="img/logo_jumeirah.png"> </li>
				<li> <img src="img/logo_belmond.png"> </li>
			</ul>
		</div>
	</section>


@include('include.footer')
