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
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Projeto de Programas</a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">

					<div class="flex ">

						<div>
						<!-- ícone -->	
                            <h3>Planos</h3>
                            <br>
						<footer>
                            @foreach($Planodetrabalho as $P)
                                <a href= {{"/plano/".$P["id"]}} class="button">{{$P["NomePlano"]}}</a>
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