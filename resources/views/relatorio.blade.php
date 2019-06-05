<!DOCTYPE HTML>


<html>
	<head>
		<title>Relatorio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{{ URL::asset('assets/css/main.css')}}}" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="Ativ-incidentes.html" class="logo">
						<strong>Relatório</strong></a>
						<button class="voltar">Voltar</button>
				</div>
			</header>

		<!-- Banner -->
		<section id="banner">

			
			<div class="inner">
				<footer id="footer">	
					<div class="config">

						    <!-- <div class="col1"> -->
						    	<div>
								<h3>Gerar Relatório</h3>
								
						<form action={{URL::asset('generate-pdf')}}>
                            <input type="hidden" id="id" name="id" value={{$id}}>
							<div>
							   <label for="diaa">De:</label>
							   <input type="date" id="diaa" name="datai">
							</div>
							<div>
							   <label for="diaa">Até:</label>
							   <input type="date" id="diaa" name="dataf">
                            </div>
                            <br>
                            <div>
                                <input type="submit" class="button" value="Gerar">
                            </div>
						</form>

						

					<!-- <form action="#" method="post">
						<fieldset>
        					<div class="N-processo">
							<label for="id-inc">Nº/ID do Incidente</label>
							<input name="id-inc" id="id-inc" type="text" placeholder="Nº do Incidente">
						</div>
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
							<textarea name="solucao" id="solucao" rows="6" placeholder="Solução"></textarea>
							<br>
						</div>
						<button class="button">Salvar</button>
    					</fieldset>
    					<br>
					</form> -->

						    
							    
							</div>	
						    
						          
						</div>
						  

					</div>

						
				</footer>
			</section>


		<!-- Three -->
			
	</body>
</html>
