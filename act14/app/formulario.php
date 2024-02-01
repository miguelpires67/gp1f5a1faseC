<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <title>Examen de DevOps</title>
</head>
        <body>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$nombre = $_POST["nombre"];
				$nota = 0;

				$respuestas = array(
					"pregunta1" => isset($_POST["pregunta1"]) ? $_POST["pregunta1"] : "",
					"pregunta2" => isset($_POST["pregunta2"]) ? $_POST["pregunta2"] : "",
					"pregunta3" => isset($_POST["pregunta3"]) ? $_POST["pregunta3"] : "",
					"pregunta4" => isset($_POST["pregunta4"]) ? $_POST["pregunta4"] : "",
					"pregunta5" => isset($_POST["pregunta5"]) ? $_POST["pregunta5"] : "",
					"pregunta6" => isset($_POST["pregunta6"]) ? $_POST["pregunta6"] : "",
					"pregunta7" => isset($_POST["pregunta7"]) ? $_POST["pregunta7"] : "",
					"pregunta8" => isset($_POST["pregunta8"]) ? $_POST["pregunta8"] : "",
					"pregunta9" => isset($_POST["pregunta9"]) ? $_POST["pregunta9"] : "",
					"pregunta10" => isset($_POST["pregunta10"]) ? $_POST["pregunta10"] : "",
					"pregunta11" => isset($_POST["pregunta11"]) ? $_POST["pregunta11"] : "",
					"pregunta12" => isset($_POST["pregunta12"]) ? $_POST["pregunta12"] : "",
					"pregunta13" => isset($_POST["pregunta13"]) ? $_POST["pregunta13"] : "",
					"pregunta14" => isset($_POST["pregunta14"]) ? $_POST["pregunta14"] : "",
					"pregunta15" => isset($_POST["pregunta15"]) ? $_POST["pregunta15"] : "",
					"pregunta16" => isset($_POST["pregunta16"]) ? $_POST["pregunta16"] : "",
					"pregunta17" => isset($_POST["pregunta17"]) ? $_POST["pregunta17"] : "",
					"pregunta18" => isset($_POST["pregunta18"]) ? $_POST["pregunta18"] : "",
					"pregunta19" => isset($_POST["pregunta19"]) ? $_POST["pregunta19"] : "",
					"pregunta20" => isset($_POST["pregunta20"]) ? $_POST["pregunta20"] : "",
					"pregunta21" => isset($_POST["pregunta21"]) ? $_POST["pregunta21"] : "",
					"pregunta22" => isset($_POST["pregunta22"]) ? $_POST["pregunta22"] : "",
					"pregunta23" => isset($_POST["pregunta23"]) ? $_POST["pregunta23"] : "",
					"pregunta24" => isset($_POST["pregunta24"]) ? $_POST["pregunta24"] : "",
					"pregunta25" => isset($_POST["pregunta25"]) ? $_POST["pregunta25"] : "",
				);

				foreach ($respuestas as $respuesta) {
					if ($respuesta === "ok") {
						$nota += 1;
					} elseif ($respuesta === "ko") {
						$nota -= 1/3;
					}
				}

				$nota_final = $nota / 2.5;

				echo "<h2>Resultados para $nombre</h2>";
				echo "<p>Nota: " . number_format($nota_final, 1) . "</p>";
			}
		?>
	</body>
</html>
