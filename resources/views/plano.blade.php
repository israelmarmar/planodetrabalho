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
	<link rel="stylesheet" href="{{{ URL::asset('assets/css/main.css')}}}" />
	<link rel="stylesheet" href="{{{ URL::asset('assets/css/modal.css')}}}" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>


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
			<a href="index.html" class="logo">{{$Plano["NomePlano"]}}</a>
			<button class="voltar" onclick="goBack()">Voltar</button>
		</div>
	</header>

	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<header>
				<h1>Plano de Trabalho</h1>
				<br>
			</header>

			<div class="flex ">

				<div>
					<!-- ícone -->
					<h3>METAS</h3>
					<br>
					<footer>
						@foreach($Metas as $Meta)
						<a href={{"/metas/".$Meta["id"]}} class="button">{{$Meta["Atividade"]}}</a>
						<br>
						@endforeach
						<button class="button" id="btnaddmeta">+ Adicionar meta</button>
					</footer>
				</div>

				<div>
					<!-- ícone -->
					<h3>PROCESSOS</h3>
					<br>
					<footer>
						@foreach($Atividades as $Atividade)
						<a href={{"/atividades/".$Atividade["id"]}} class="button">{{$Atividade["NomeProcesso"]}}</a>
						<br>
						@endforeach
						<button class="button" id="btnaddatividade">+ Adicionar atividade</button>
					</footer>
				</div>

	</section>

	<div id="MetaModal" class="modal">

		<!-- metaModal content -->
		<div class="modal-content">
			<span class="close" id="closemeta">×</span>
			<form id="formmeta">

				<div class="field half first">

					<input type="hidden" name="planodetrabalho_id" id="id" value={{$id}}>

					<label for="Atividade">Atividade</label>
					<input name="Atividade" id="Atividade" type="text" placeholder="Atividade">

					<label for="Responsavel">Responsavel</label>
					<input name="Responsavel" id="Responsavel" type="text" placeholder="Responsavel">
				</div>

				<input type="submit" class="button" value="Salva" />

			</form>
		</div>

	</div>

	<div id="atividademodal" class="modal">
		<!-- atividadeModal content -->
		<div class="modal-content">
			<span class="close" id="closeatividade">×</span>
			<form id="formatividade">

				<div class="field half first">

					<input type="hidden" name="planodetrabalho_id" id="id" value={{$id}}>

					<label for="NomeProcesso">Nome do processo</label>
					<input name="NomeProcesso" id="NomeProcesso" type="text" placeholder="Nome do processo">


				</div>

				<input type="submit" class="button" value="Salva" />

			</form>
		</div>

	</div>




	<!-- Three -->

	<!-- Footer -->
	<!-- Scripts -->
	<script>
		// Get the modal
		var metamodal = document.getElementById('MetaModal');

		// Get the button that opens the modal
		var btn = document.getElementById("btnaddmeta");
		console.log(btn);

		// Get the <span> element that closes the modal
		var span = document.getElementById("closemeta");

		// When the user clicks the button, open the modal
		btn.onclick = function() {
			metamodal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			metamodal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == metamodal) {
				metamodal.style.display = "none";
			}
		}



		// Get the modal
		var atividademodal = document.getElementById('atividademodal');

		// Get the button that opens the modal
		var btn = document.getElementById("btnaddatividade");
		console.log(btn);

		// Get the <span> element that closes the modal
		var span = document.getElementById("closeatividade");

		// When the user clicks the button, open the modal
		btn.onclick = function() {
			atividademodal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			atividademodal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == atividademodal) {
				atividademodal.style.display = "none";
			}
		}

		$(document).ready(function() {
			$('#formmeta').submit(function() {
				var formdata = $(this).serialize();
				$.ajax({
					type: "GET",
					url: "{{ route('criarmeta') }}",
					data: formdata,
					success: function(data) {
						alert("Meta salva!");
						location.reload();
					}
				});
				return false;
			});

			$('#formatividade').submit(function() {
				var formdata = $(this).serialize();
				$.ajax({
					type: "GET",
					url: "{{ route('criaratividade') }}",
					data: formdata,
					success: function(data) {
						alert("Atividade salva!");
						location.reload();
					}
				});
				return false;
			});
		});
	</script>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>