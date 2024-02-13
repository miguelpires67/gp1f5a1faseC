<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Resultats de l'Examen</title>
	</head>
	<body>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$nombre = $_POST["nombre"];
				$nota = 0;

				for ($i = 1; $i <= 25; $i++) {
					$pregunta = "pregunta$i";
					$respuestas[$pregunta] = isset($_POST[$pregunta]) ? $_POST[$pregunta] : "";
				}

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
				echo "<br>";
				echo date("l jS \of F Y h:i:s A") . "<br>";
			}
		?>
	</body>
</html>
