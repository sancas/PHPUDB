<!DOCTYPE html>
<html>
<head>
	<title>Condiciones</title>
</head>
<body>
	<?php
		echo "<h3>Calculando Índice de Masa Corporal</h3>";
		$peso = 50;
		$altura = 1.70;

		$IMC = (($peso)/(pow($altura,2)));
		echo "El IMC es: " . round($IMC, 2) . " kg/m^2<br>";
		if ($IMC < 18.5)
			echo "Bajo peso<br>";
		else if ($IMC >= 18.5 & $IMC<=24.9)
			echo "Sobrepeso<br>";
		else if ($IMC > 29.9 & $IMC <= 39.9)
			echo "Obesidad<br>";
		else
			echo "Obesidad severa<br>";
	?>
</body>
</html>