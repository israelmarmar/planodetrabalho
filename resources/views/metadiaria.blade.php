<!DOCTYPE HTML>


<html>
	<head>
		<title>Metas-diarias</title>
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
					<a href="index.html" class="logo"><strong>Metas Diárias</strong></a>
					<button class="voltar" onclick="goBack()">Voltar</button>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					
					<div class="metas">

						<h3> Nome da tarefa </h3>

		                		<br>
		                		<h3>Status</h3>
		                		<select name="Status" id="Status">
		                    	<option value="A fazer">A fazer</option>
		                    	<option value="Fazendo">Fazendo</option>
		                    	<option value="Pausada">Pausada</option>
		                    	<option value="Concluída">Concluída</option>
		                		</select>

							<br>
							<h3>Período</h3>
							<!--<input name="Data" id="Data" type="text" placeholder="De _/_/_ Até _/_/_">-->
							<h3>De {{$Meta["datainicio"]}} Até {{$Meta["datafim"]}}</h3>  <!--Aqui deve trazer a data salva no banco -->
							<br>	
							<h3>Comentários / Observações</h3>
							<input name="name" id="name" type="text" placeholder="Comentários">	
							<br>
							<button class="button">Salvar</button>
					</div>
						    
					

				 </div>

						

			</div>
			</section>


		<!-- Three -->
			
	</body>
</html>
