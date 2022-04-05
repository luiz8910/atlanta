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
        <a href="{{ route('index') }}" class="mark">HOME</a>
        <a href="#viagens" class="viagens">VIAGENS</a>
        <div class="submenu">
            <a href="{{ route('lazer') }}">Lazer</a>
            <a href="{{ route('corporativas') }}">Corporativas <br>& Eventos</a>
        </div>
        <a href="{{ route('sobre') }}">SOBRE</a>
        <a href="#" class="btnFale">CONTATO</a>
    </nav>
    <img src="img/logo_virtuoso.png" class="desk">
</header>

<section id="cover">
    @if(isset($data))
        <img src="{{ $data->img_roteiros }}">
    @else
        <img src="img/img_cover.jpg">
    @endif

    <div>
        <h1>
            AT<br>LAN<br>TA<br> TOUR
        </h1>
    </div>

    <a href="#" class="btnForm">Contato</a>
</section>

<section id="roteiros">
    @if(isset($data->roteiros) && $data->roteiros)
        <?php echo htmlspecialchars_decode($data->roteiros); ?>
    @else

        <h2>Roteiros exclusivos e <br>viagens personalizadas</h2>

        <div>
            <span><b>DESDE</b> 1976</span>
        </div>

        <p>Desenhamos em detalhes todas as etapas da sua viagem.<br>
            Com a experiência e tradição de mais de 40 anos na área do turismo.<br>
            Nossos roteiros personalizados são realmente feitos sob medida.<br>
            Planejados de acordo com o perfil, a necessidade e o investimento de cada viajante.</p>
    @endif
</section>

<section id="prazer">
    <div class="LR">
        <div>
            <img @if(isset($data->img_viajar_1) && $data->img_viajar_1) src="{{ $data->img_viajar_1 }}" @else src="img/img_prazerviajar.jpg" @endif>
            <img @if(isset($data->img_viajar_2) && $data->img_viajar_2) src="{{ $data->img_viajar_2 }}" @else src="img/img_prazerviajar2.jpg" @endif class="mobile">
        </div>
        <div class="txt">
            @if(isset($data->texto_viajar) && $data->texto_viajar)
                <?php echo htmlspecialchars_decode($data->texto_viajar); ?>
            @else
                <h3>O <br>
                    prazer <br>
                    em viajar <br>
                    começa <br>
                    agora.</h3>
            @endif

            <a href="{{ route('lazer') }}" class="btn"><span>Descubra novos destinos</span></a>
        </div>
    </div>

    <img @if(isset($data->img_viajar_2) && $data->img_viajar_2) src="{{ $data->img_viajar_2 }}" @else src="img/img_prazerviajar2.jpg" @endif class="desk">
</section>

<section id="viagens">
    <div  class="LR">
        <div>
            <img @if(isset($data->img_viajar_3) && $data->img_viajar_3) src="{{ $data->img_viajar_3 }}" @else src="img/img_girafa.jpg" @endif class="mobile">

            <div class="txt">
                @if(isset($data->texto_lazer) && $data->texto_lazer)
                    <?php echo htmlspecialchars_decode($data->texto_lazer); ?>
                @else
                <h3>Viagens <br>de Lazer</h3>

                <p>Soluções personalizadas para a necessidade <br>específica de cada destino.</p>
                @endif
                <a href="{{ route('lazer') }}" class="btn btnRed">Encontre novos roteiros</a>

            </div>

            <img @if(isset($data->img_viajar_4) && $data->img_viajar_4) src="{{ $data->img_viajar_4 }}" @else src="img/img_dubai.jpg" @endif class="desk">
        </div>

        <div>
            <img @if(isset($data->img_viajar_3) && $data->img_viajar_3) src="{{ $data->img_viajar_3 }}" @else src="img/img_girafa.jpg" @endif class="desk">
            <img @if(isset($data->img_viajar_4) && $data->img_viajar_4) src="{{ $data->img_viajar_4 }}" @else src="img/img_dubai.jpg" @endif class="mobile">

            <div class="txt txtRight">
                <h3>Viagens <br>Corporativas <br><span>& eventos</span></h3>

                <p>As melhores soluções para a sua empresa divulgar <br>metas e estratégias corporativas.</p>
                <a href="{{ route('corporativas') }}" class="btn btnRed">Viva novas experiências</a>
            </div>
        </div>
</section>css

<section id="destino">
    <h4>Um novo <br class="mobile">destino <br class="mobile">espera <br class="mobile">por você</h4>
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
