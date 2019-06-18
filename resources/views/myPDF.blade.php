<!DOCTYPE html>
<html>
<head>
	<title>Relatorio</title>
</head>
<body>
	<h1>{{$Titulo}}</h1>
	<p>
		<?php
		foreach($Metas as $Meta){

			$Metas_diaria = (array) json_decode(json_encode($Meta["metas_diaria"]),true);

			for ($i = 0; $i < sizeof($Metas_diaria); $i++) {
				$resultado = (float) $Metas_diaria[$i]["resultado"];
				$metamensuravel = (float) $Metas_diaria[$i]["metamensuravel"];
				echo "Ação: " . $Metas_diaria[$i]["RotinaDefinida"] . " alcançado: " . $resultado / $metamensuravel * 100 . "% <br>";
			}

		}
		?>
	</p>
</body>
</html>