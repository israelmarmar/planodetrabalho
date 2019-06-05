<!DOCTYPE HTML>


<html>
	<head>
		<title>Atividades</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{{ URL::asset('assets/css/main.css')}}}" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="Atividades.html" class="logo">
						<strong>{{$Atividade["NomeProcesso"]}}</strong></a>
						<button class="voltar">Voltar</button>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Qual atividade você deseja verificar?</h1>
					</header>

					<div class="flex ">

						<div class="row">
						    <div class="col1">
						    	<div>
								<span class="L1"></span>
								<h3>Configurações</h3>
								<button class="button">Clique</button>
								<p></p>
								<br>
								</div>  
						    
							    <div>
								<span class=""></span>
								<h3>Mudanças</h3>
								<button class="button">Clique</button>
								<p></p>
								</div>
							</div>	
						    
						    <div class="col2">
						    	<div>
								<span class=""></span>
								<h3>Incidentes</h3>
								<a href={{$id."/incidente"}} class="button">Clique</a>
								<p></p>
								<br>
								</div>

							    <div>
								<span class=""></span>
								<h3>Operações</h3>
								<button class="button">Clique</button>
								<p></p>
								</div>
						    </div>
						    
						    <div class="col3">
								<div>
								<span class=""></span>
	
								<h3>Problemas</h3>
								<button class="button">Clique</button>
								<p></p>
								<br>
								</div>

								<div>
								<span class=""></span>
								<h3>Gerar Relatório</h3>
							<a href={{$id . "/relatoriomensal"}} class="button">Clique</a>
							<p></p>
							</div>
							</div>      

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
