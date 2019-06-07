<!DOCTYPE HTML>


<html>

<head>
	<title>Metas</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{{ URL::asset('assets/css/main.css')}}}" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="{{{ URL::asset('assets/css/modal.css')}}}" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

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
					<a href={{"diaria/".$Diaria["id"]}} class="button">{{$Diaria["RotinaDefinida"]}}</a>
					<br>
					@endforeach
					<button class="button" id="btnadddiaria">+ Adicionar meta diária</button>
					<p></p>
				</div>

				<div>
					<span class=""></span>
					<h3>Metas Semanais</h3>
					<br>
					@foreach($Semanais as $Semanal)
					<a href={{"semanal/".$Semanal["id"]}} class="button">{{$Semanal["RotinaDefinida"]}}</a>
					<br>
					@endforeach
					<button class="button" id="btnaddsemanal">+ Adicionar meta semanal</button>
					<p></p>
				</div>

				<div>
					<span class=""></span>

					<h3>Metas Mensais</h3>
					<br>
					@foreach($Mensais as $Mensal)
					<a href="#" class="button">{{$Mensal["Status"]}}</a>
					<br>
					@endforeach
					<button class="button" id="btnaddmensal">+ Adicionar meta mensal</button>
					
					<p></p>
				</div>

			</div>

			<footer>
				<!--<a href="#" class="button">Get Started</a>-->
			</footer>
		</div>
	</section>

	<div id="DiariaModal" class="modal">

		<!-- metaModal content -->
		<div class="modal-content">
			<span class="close" id="closediaria">×</span>
			<form id="formdiaria">

				<div class="field half first">

					<input type="hidden" name="meta_id" id="id" value={{$id}}>

					<label for="RotinaDefinida">Rotina Definida</label>
					<input name="RotinaDefinida" id="RotinaDefinida" type="text" placeholder="Rotina Definida">


				</div>

				<input type="submit" class="button" value="Salva" />

			</form>
		</div>

	</div>

	<div id="SemanalModal" class="modal">

		<!-- metaModal content -->
		<div class="modal-content">
			<span class="close" id="closesemanal">×</span>
			<form id="formsemanal">

				<div class="field half first">

					<input type="hidden" name="meta_id" id="id" value={{$id}}>

					<label for="RotinaDefinida">Rotina Definida</label>
					<input name="RotinaDefinida" id="RotinaDefinida" type="text" placeholder="Rotina Definida">


				</div>

				<input type="submit" class="button" value="Salva" />

			</form>
		</div>

	</div>

	<div id="MensalModal" class="modal">

		<!-- metaModal content -->
		<div class="modal-content">
			<span class="close" id="closemensal">×</span>
			<form id="formmensal">

				<div class="field half first">

					<input type="hidden" name="meta_id" id="id" value={{$id}}>

					<label for="Status">Status</label>
					<input name="Status" id="Status" type="text" placeholder="Status">


				</div>

				<input type="submit" class="button" value="Salva" />

			</form>
		</div>

	</div>

	<!-- Three -->

	<script>
		// Get the modal
		var diariamodal = document.getElementById('DiariaModal');

		// Get the button that opens the modal
		var btn = document.getElementById("btnadddiaria");
		console.log(btn);

		// Get the <span> element that closes the modal
		var span = document.getElementById("closediaria");

		// When the user clicks the button, open the modal
		btn.onclick = function() {
			diariamodal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			diariamodal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == diariamodal) {
				diariamodal.style.display = "none";
			}
		}





		// Get the modal
		var semanalmodal = document.getElementById('SemanalModal');

		// Get the button that opens the modal
		var btn = document.getElementById("btnaddsemanal");
		console.log(btn);

		// Get the <span> element that closes the modal
		var span = document.getElementById("closesemanal");

		// When the user clicks the button, open the modal
		btn.onclick = function() {
			semanalmodal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			semanalmodal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == semanalmodal) {
				semanalmodal.style.display = "none";
			}
		}





		// Get the modal
		var mensalmodal = document.getElementById('MensalModal');

		// Get the button that opens the modal
		var btn = document.getElementById("btnaddmensal");
		console.log(btn);

		// Get the <span> element that closes the modal
		var span = document.getElementById("closemensal");

		// When the user clicks the button, open the modal
		btn.onclick = function() {
			mensalmodal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			mensalmodal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == mensalmodal) {
				mensalmodal.style.display = "none";
			}
		}


		$(document).ready(function() {
			$('#formdiaria').submit(function() {
				var formdata = $(this).serialize();
				$.ajax({
					type: "GET",
					url: "{{ route('criarmetadiaria') }}",
					data: formdata,
					success: function(data) {
						alert("Meta diaria salva!");
						location.reload();
					}
				});
				return false;
			});

			$('#formsemanal').submit(function() {
				var formdata = $(this).serialize();
				$.ajax({
					type: "GET",
					url: "{{ route('criarmetasemanal') }}",
					data: formdata,
					success: function(data) {
						alert("Meta semanal salva!");
						location.reload();
					}
				});
				return false;
			});

			$('#formmensal').submit(function() {
				var formdata = $(this).serialize();
				$.ajax({
					type: "GET",
					url: "{{ route('criarmetamensal') }}",
					data: formdata,
					success: function(data) {
						alert("Meta mensal salva!");
						location.reload();
					}
				});
				return false;
			});

		});

	</script>

</body>

</html>