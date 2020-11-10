<?php
	if (isset($_POST["txt_numero1"])&& isset($_POST["txt_numero2"])&& isset($_POST["txt_numero3"])&& isset($_POST["txt_numero4"])) {
		
		$numero1 = $_POST["txt_numero1"];
		$numero2 = $_POST["txt_numero2"];
		$numero3 = $_POST["txt_numero3"];
		$numero4 = $_POST["txt_numero4"];
		echo "Número 1: " .$numero1. "<br>";
		echo "Número 2: " .$numero2. "<br>";
		echo "Número 3: " .$numero3. "<br>";
		echo "Número 4: " .$numero4. "<br>";

		$soma=0;
		$soma= $numero1 + $numero2 + $numero3 + $numero4;
		echo "A soma dos números é: " .$soma;
	}
?>