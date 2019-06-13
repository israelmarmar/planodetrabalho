<!DOCTYPE HTML>


<html>

<head>
	<title>Metas</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{{ URL::asset('assets/css/main.css')}}}" />
	<link rel="stylesheet" href="{{{ URL::asset('assets/css/modal.css')}}}" />

	<style>
		.close:hover {
			background-color: #f44336;
			color: white;
		}
	</style>

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
			<a href="index.html" class="logo"><strong>{{$Metas["Atividade"]}}</strong></a>
			<button class="voltar" onclick="goBack()">Voltar</button>
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
					<button class="button" id="btnadddiaria">+ Criar meta diária</button>
					<br>
					@foreach($Diarias as $Diaria)
					<div class="button btnlist" data-tipo="diaria" id={{$Diaria["id"]}}>
						<a href={{"diaria/".$Diaria["id"]}}>{{$Diaria["RotinaDefinida"]}}</a>
						<span class="close">×</span>
					</div>
					<br>
					@endforeach
					<p></p>
				</div>

				<div>
					<span class=""></span>
					<h3>Metas Semanais</h3>
					<br>
					<button class="button" id="btnaddsemanal">+ Criar meta semanal</button>
					<br>
					@foreach($Semanais as $Semanal)
					<div class="button btnlist" data-tipo="semanal" id={{$Semanal["id"]}}>
						<a href={{"semanal/".$Semanal["id"]}}>{{$Semanal["RotinaDefinida"]}}</a>
						<span class="close">×</span>
					</div>
					<br>
					@endforeach
					<p></p>
				</div>

				<div>
					<span class=""></span>

					<h3>Metas Mensais</h3>
					<br>
					<button class="button" id="btnaddmensal">+ Criar meta mensal</button>
					<br>
					@foreach($Mensais as $Mensal)
					<div class="button btnlist" data-tipo="mensal" id={{$Mensal["id"]}}>
						<a href="#">{{$Mensal["Status"]}}</a>
						<span class="close">×</span>
					</div>
					<br>
					@endforeach


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
			<div class="close" id="closediaria">×</div>
			<form id="formdiaria">

				<div class="field half first">

					<input type="hidden" name="meta_id" id="id" value={{$id}}>

					<label for="RotinaDefinida">Rotina Definida</label>
					<input name="RotinaDefinida" id="RotinaDefinida" type="text" placeholder="Rotina Definida">


					<label for="diaa">De:</label>
					<input type="date" id="diaa" name="datainicio">


					<label for="diaa">Até:</label>
					<input type="date" id="diaa" name="datafim">

					<input type="hidden" name="observacoes" id="obs" value="&nbsp">

				</div>

				<input type="submit" class="button" value="Salva" />

			</form>
		</div>

	</div>

	<div id="SemanalModal" class="modal">

		<!-- metaModal content -->
		<div class="modal-content">
			<div class="close" id="closesemanal">×</div>
			<form id="formsemanal">

				<div class="field half first">

					<input type="hidden" name="meta_id" id="id" value={{$id}}>

					<label for="RotinaDefinida">Rotina Definida</label>
					<input name="RotinaDefinida" id="RotinaDefinida" type="text" placeholder="Rotina Definida">

					<label for="diaa">De:</label>
					<input type="date" id="diaa" name="datainicio">


					<label for="diaa">Até:</label>
					<input type="date" id="diaa" name="datafim">

				</div>

				<input type="submit" class="button" value="Salva" />

			</form>
		</div>

	</div>

	<div id="MensalModal" class="modal">

		<!-- metaModal content -->
		<div class="modal-content">
			<div class="close" id="closemensal">×</div>
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

	<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/skel.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/util.js')}}"></script>
	<script src="{{ URL::asset('assets/js/main.js')}}"></script>

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

			$("span.close").click(function() {
				var div=$(this).parent();
				var id=div.prop("id");
				var tipo=div.data("tipo");

				if(confirm("Deseja realmente remover esta meta?")){
				$.ajax({
					type: "POST",
					url: "{{ URL::asset('/') }}"+tipo+"/delete/"+id,
					success: function(data) {
						div.slideUp();
					}
				});
				}
				return false;
			});

			$('#formdiaria').submit(function() {
				var formdata = $(this).serialize();
				$(this).find("input.button").attr("disabled", true);
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
				$(this).find("input.button").attr("disabled", true);
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
				$(this).find("input.button").attr("disabled", true);
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