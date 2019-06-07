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
	<link rel="stylesheet" href="assets/css/main.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

	<style>
		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1000000000;
			/* Sit on top */
			padding-top: 100px;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
			background-color: #fefefe;
			margin: auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
		}

		/* The Close Button */
		.close {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
	</style>

</head>

<body>

	<!-- Header -->
	<header id="header">
		<div class="inner">
			<a href="index.html" class="logo">Projeto de Programas</a>
		</div>
	</header>

	<!-- Banner -->
	<section id="banner">
		<div class="inner">

			<div class="flex ">

				<div>
					<!-- ícone -->
					<h3>Planos</h3>
					<br>
					<footer>
						@foreach($Planodetrabalho as $P)
						<a href={{"/plano/".$P["id"]}} class="button">{{$P["NomePlano"]}}</a>
						@endforeach
						<br>
						<button class="button" id="btnadd">+ Adicionar plano</button>
					</footer>
				</div>
			</div>

		</div>
	</section>

	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">×</span>
			<form name="formulario">

				<div class="field half first">
					<label for="NomePlano">Nome do plano</label>
					<input name="NomePlano" id="NomePlano" type="text" placeholder="Nome do plano">
				</div>

				<input type="submit" class="button" value="Salva" />

			</form>
		</div>

	</div>


	<!-- Three -->

	<!-- Footer -->
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("btnadd");
		console.log(btn);

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		$(document).ready( function () {
				$('form').submit( function () {
				var formdata = $(this).serialize();
				$.ajax({
			    type: "GET",
			    url: "{{ route('criarplano') }}",
			    data: formdata,
				success:function(data){
					alert("Plano de trabalho salvo!");
					location.reload();
        			}
				 });
				 return false;
				});
			});

	</script>
	
</body>

</html>