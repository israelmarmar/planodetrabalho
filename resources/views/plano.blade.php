<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Projeto de Programas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{{ URL::asset('assets/css/main.css')}}}" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">{{$Plano["NomePlano"]}}</a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Plano de Trabalho</h1>
						<br>
					</header>

					<div class="flex ">

						<div>
						<!-- ícone -->	
                            <h3>METAS</h3>
                            <br>
						<footer>
                            @foreach($Metas as $Meta)
                                <a href= {{"/metas/".$Meta["id"]}} class="button">{{$Meta["Atividade"]}}</a>
                            @endforeach
						</footer>
						</div>

						<div>
						<!-- ícone -->	
							<h3>ATIVIDADES</h3>
							<br>
						<footer>
                        @foreach($Atividades as $Atividade)
                                <a href= {{"/atividades/".$Atividade["id"]}} class="button">{{$Atividade["NomeProcesso"]}}</a>
                            @endforeach
						</footer>
						</div>

			</section>


		<!-- Three -->

		<!-- Footer -->
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>