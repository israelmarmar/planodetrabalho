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
			<a href="index.html" class="logo"><strong>Metas {{$tipo}}</strong></a>
			<button class="voltar" onclick="goBack()">Voltar</button>
		</div>
	</header>

	<!-- Banner -->
	<section id="banner">
		<div class="inner">

			<form class="metas" id="formmeta">

				<h3> Nome da tarefa </h3>
				<p>{{$Meta["RotinaDefinida"]}}</p>
				<br>

				<h3> Meta a ser alcançada </h3>
				<p>{{$Meta["metamensuravel"]}}</p>
				<br>

				<h3> Tempo restante </h3>
				<p id='time'>{{$Meta["restante"]}}</p>
				<br>


				<h3>Status</h3>
				<select name="Status" id="Status">
					<option selected>{{$Meta["Status"]}}</option>
					<option value="A fazer">A fazer</option>
					<option value="Fazendo">Fazendo</option>
					<option value="Pausada">Pausada</option>
					<option value="Concluída">Concluída</option>
				</select>

				<br>
				<h3>Período</h3>
				<!--<input name="Data" id="Data" type="text" placeholder="De _/_/_ Até _/_/_">-->
				<h3>De {{$Meta["datainicio"]}} Até {{$Meta["datafim"]}}</h3>
				<!--Aqui deve trazer a data salva no banco -->
				<br>
				<h3>Resultado</h3>
				<input name="resultado" type="text" id="resultado" placeholder="Resultado" value="{{$Meta["resultado"]}}">
				<br>
				<h3>Comentários / Observações</h3>
				<input name="observacoes" type="text" id="name" placeholder="Comentários" value="{{$Meta["observacoes"]}}">
				<br>
				<input type="submit" class="button" value="Salvar" />
			</form>



		</div>



		</div>
	</section>


	<!-- Three -->

	<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/skel.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/util.js')}}"></script>
	<script src="{{ URL::asset('assets/js/main.js')}}"></script>


	<script>
		var h1 = document.getElementById('time'),
			seconds = h1.textContent.split(":")[2],
			minutes = h1.textContent.split(":")[1],
			hours = h1.textContent.split(":")[0],
			t;

		function timer() {
			seconds--;
			if (seconds <= -1) {
				seconds = 59;
				minutes--;
				if (minutes <= -1) {
					minutes = 59;
					hours--;
				}
			}

			h1.textContent = hours + ":" + minutes + ":" + seconds;

		}

		setInterval(timer, 1000);

		$(document).ready(function() {

			$('#formmeta').submit(function() {
				var formdata = $(this).serialize();
				$(this).find("input.button").attr("disabled", true);
				console.log(formdata);
				$.ajax({
					type: "POST",
					url: "{{ URL::asset('/'.$type) }}" + "/atualizar/" + "{{$id}}",
					data: formdata,
					success: function(data) {
						console.log(data);
						alert("Meta atualizada!");
						location.reload();
					}
				});
				return false;
			});

		});

	</script>

</body>

</html>