<!DOCTYPE HTML>


<html>
	<head>
		<title>Metas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{{ URL::asset('assets/css/main.css')}}}" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>{{$Metas["Atividade"]}}</strong></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Qual meta você deseja verificar?</h1>
					</header>

					<div class="flex ">

						<div>
							<span class=""></span>
							<h3>Metas Diárias</h3>
							<br>
						@foreach($Diarias as $Diaria)
        					<a href= {{"diaria/".$Diaria["id"]}} class="button">{{$Diaria["RotinaDefinida"]}}</a>
        				@endforeach
							<p></p>
						</div>

						<div>
							<span class=""></span>
							<h3>Metas Semanais</h3>
							<br>
						@foreach($Semanais as $Semanal)
        					<a href= {{"semanal/".$Semanal["id"]}} class="button">{{$Semanal["RotinaDefinida"]}}</a>
        				@endforeach							<p></p>
						</div>

						<div>
							<span class=""></span>
	
						<h3>Metas Mensais</h3>
						<br>
						@foreach($Mensais as $Mensal)
        					<a href= "#" class="button">{{$Mensal["Reunioes"]}}</a>
        				@endforeach
						<p></p>
						</div>

					</div>

					<footer>
						<!--<a href="#" class="button">Get Started</a>-->
					</footer>
				</div>
			</section>


		<!-- Three -->
			
	</body>
</html>
