<!DOCTYPE HTML>


<html>
	<head>
		
<title>Metas mensais</title>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1" />
         <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css')}}" />
	</head>

	<script>
		function goBack() {
  			window.history.back();
		}
	</script>

	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>Metas Mensais</strong></a>
					<button class="voltar" onclick="goBack()">Voltar</button>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
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
		                	<h3> Dependente de metas semanais? </h3>

							<br>
							<h3>Mês de Referência</h3>
							<!--<input name="Data" id="Data" type="text" placeholder="De _/_/_ Até _/_/_">-->
							<!-- <h3>De DD/MM/AA Até DD/MM/AA</h3>  Aqui deve trazer a data salva no banco -->
							<br>	
							<h3>Comentários / Observações</h3>
							<input name="name" id="name" type="text" placeholder="Comentários">	
							<br>
							<button class="button">Salvar</button>
								
				</div>
					
			</section>


        <!-- Three -->
        
    <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/skel.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/util.js')}}"></script>
	<script src="{{ URL::asset('assets/js/main.js')}}"></script>
			
	</body>
</html>
