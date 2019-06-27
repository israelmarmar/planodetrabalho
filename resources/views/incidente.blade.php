<!DOCTYPE HTML>


<html>
	<head>
		<title>Incidentes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css')}}" />

		<script>
			function goBack() {
  				window.history.back();
			}
		</script>

	<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/skel.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/util.js')}}"></script>
	<script src="{{ URL::asset('assets/js/main.js')}}"></script>
		<script>
			$(document).ready( function () {
				$('form').submit( function () {
				var formdata = $(this).serialize();
				$.ajax({
			    type: "GET",
			    url: "{{ route('criarincidente') }}",
			    data: formdata,
				success:function(data){
					alert("Incidente registrado");
					location.reload();
        			}
				 });
				 return false;
				});
			});
		</script>

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="Ativ-incidentes.html" class="logo">
						<strong>Incidentes</strong></a>
						<button class="voltar" onclick="goBack()">Voltar</button>
				</div>
			</header>

		<!-- Banner -->
		<section id="banner">

			<div class="inner">
				<footer id="footer">	
					<div class="container">
						 <div class="row">

						    <div class="col-sm-1">
						    	<div>
								<h3>Registrar Novo Incidente</h3>
								
							<form name="formulario">
								

								<input type="hidden" name="Status" value="0">
								<input type="hidden" name="Implantacao_solucao" value="0">
								<input type="hidden" name="atividade_id" id="id" value={{$id}}>
									
		        					
								<div class="field half first">
									<label for="Data">Data do ocorrido</label>
									<input name="Data" id="Data" type="text" placeholder="Data do ocorrido">
								</div>
								<div class="field half first">
									<label for="local">Local</label>
									<input name="local" id="local" type="text" placeholder="Local do ocorrido">
								</div>
								<div class="field half first">
									<label for="Causa">Causa do Incidente</label>
									<input name="Causa" id="Causa" type="text" placeholder="Descrição da Causa">
								</div>
								<div class="field half first">
									<label for="Tempo">Tempo de Inatividade</label>
									<input name="Tempo" id="Tempo" type="text" placeholder="Tempo em horas ou dias">
								</div>
								<div class="Clientes">
		                			<label for="Clientes">Clientes afetados</label>
		                			<select name="Clientes" id="Clientes">
		                    		<option value="">--</option>
		                    		<option value="IFAM">IFAM</option>
		                    		<option value="UEA">UEA</option>
		                    		<option value="INPA">INPA</option>
		                			</select>
		            			</div>
								<div class="field half first">
									<label for="Resp">Incidente reportado por:</label>
									<input name="Resp" id="Resp" type="text" placeholder="Nome">
								</div>
								<div class="field half">
									<label for="email">Email</label>
									<input name="email" id="email" type="email" placeholder="E-mail">
								</div>
								<div class="field">
									<label for="solucao">Solução</label>
									<textarea name="Solucao" id="solucao" rows="6" placeholder="Solução"></textarea>
									<br>
								</div>
								<input type="submit" class="button" value="Salva" />
		    					
		    					<br>
							</form>

						    </div>
							    
						</div>	
						    
						    <div class="col-sm-2">
						    	<div>
								<span class=""></span>
								<h3>Acompanhar Incidentes</h3>

								@foreach($Incidentes as $Incidente)
									<a href={{ URL::asset('/').'regincidente/'.$Incidente['id']}} class="button">{{$Incidente["Causa"]}}</a>
									<br>
								@endforeach
						
								<p></p>
								</div>

						    </div>
						          

						</div>
						  

					</div>

						
				</footer>
			</section>


		<!-- Three -->
			
	</body>
</html>
