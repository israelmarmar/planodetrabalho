<!DOCTYPE HTML>


<html>
	<head>
		<title>Metas-{{$tipo}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css')}}" />

		<script>
		function goBack() {
  			window.history.back();
		}
		</script>

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>Metas {{$tipo}}</strong></a>
					<button class="voltar" onclick="goBack()">Voltar</button>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					

					<div class="metas">

						<div class="row">
						    <div class="col1">
						    	<div>
								<span class=""></span>
								<h3>Progresso Geral</h3>
								<button class="button">Clique</button>
								<p></p> <br>
								</div>  
						    
							    <div>
								<span class=""></span>
								<h3>Backups</h3>
								<button class="button">Clique</button>
								</div>
							</div>	
						    
						    <div class="col2">
						    	<div>
								<span class=""></span>
								<h3>Manutenção</h3>
								<button class="button">Clique</button>
								<p></p> <br>
								</div>

							    <div>
								<span class=""></span>
								<h3>Rotinas</h3>
								<button class="button">Clique</button>
								<p></p>
								</div>
						    </div>

						    </div>

						<div>
							
				</div>

			</div>
			</section>


		<!-- Three -->
			
	</body>
</html>
