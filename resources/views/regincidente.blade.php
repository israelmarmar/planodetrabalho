<!DOCTYPE HTML>


<html>

<head>
	<title>Incidentes</title>
	<meta charset="utf-8" />
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
			<a href="registro_incidentes.html" class="logo">
				<strong>Incidente Nº 00{{$id}}</strong></a>
			<button class="voltar" onclick="goBack()">Voltar</button>
		</div>
	</header>

	<!-- Banner -->
	<section id="banner">

	<form class="incidente" id="formincidente">

		<div class="inner">
			<footer id="footer">

				<div class="row">

					<div class="col-sm-1">

						<div>
							<h3>Data do ocorrido</h3>
							{{$Incidente["created_at"]}}
						</div>

						<div>
							<h3>Local da ocorrência</h3>

						</div>

						<div>
							<h3>Tempo de Inatividade</h3>
							{{$Incidente["Tempo"]}}
						</div>

						<div>
							<h3>Cliente afetado</h3>

						</div>

						<div>
							<h3>E-mail do cliente</h3>
						</div>

						<div>
							<h3> Incidente reportado por:</h3>

						</div>

					</div>

					<div class="col-sm-2">
						<div>
							<h3>Causa do Incidente</h3>
							{{$Incidente["Causa"]}}
						</div>
						<form action="#" method="post">
							<fieldset>
								<div class="Descricao">
									<label for="id-inc">Descrição</label>
									<input name="id-inc" id="id-inc" type="text" placeholder="Informações">
								</div>
							</fieldset>
						</form>
						<div>
							<h3>Solução</h3>
							{{$Incidente["Solucao"]}}
						</div>

						<div class="Status">
							<label for="Status">Status da ocorrência</label>
							<select name="Status" id="Status">
								<option value="">{{$Incidente["Status"]}}</option>
								<option value="Em analise">Em análise</option>
								<option value="Em andamento">Em andamento</option>
								<option value="Resolvida">Resolvida</option>
							</select>
							<br>
						</div>
						<br>
						<input type="submit" class="button" value="Salvar" />
					</div>

				</div>

			</footer>
		</div>

	</form>

	</section>
	<!-- Three -->

	<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/skel.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/util.js')}}"></script>
	<script src="{{ URL::asset('assets/js/main.js')}}"></script>

	<script>
		$(document).ready(function() {

			$('#formincidente').submit(function() {
				var formdata = $(this).serialize();
				$(this).find("input.button").attr("disabled", true);
				console.log(formdata);
				$.ajax({
					type: "POST",
					url: "{{ URL::asset('/incidente') }}" + "/atualizar/" + "{{$id}}",
					data: formdata,
					success: function(data) {
						console.log(data);
						alert("Incidente atualizado!");
						location.reload();
					}
				});
				return false;
			});

		});
	</script>

</body>

</html>