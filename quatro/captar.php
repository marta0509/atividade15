<?php
$numero1=0;
$numero2=0;
$numero3=0;
$numero4=0;

	if (isset($_POST["txt_numero1"])&& isset($_POST["txt_numero2"])&& isset($_POST["txt_numero3"])&& isset($_POST["txt_numero4"])) {
		
		$numero1 = $_POST["txt_numero1"];
		$numero2 = $_POST["txt_numero2"];
		$numero3 = $_POST["txt_numero3"];
		$numero4 = $_POST["txt_numero4"];
		
		echo "Número 1: " .$numero1. "<br>";
		echo "Número 2: " .$numero2. "<br>";
		echo "Número 3: " .$numero3. "<br>";
		echo "Número 4: " .$numero4. "<br>";
	}

	//função da soma

		function soma($numero1,$numero2,$numero3,$numero4)
		{
			$soma=0;
			$soma=$numero1  + $numero2 + $numero3 + $numero4;
			return $soma;
		}
		echo "A soma é: ";
		echo soma($numero1,$numero2,$numero3,$numero4);
		echo "<br>";


	//função da media	

		$soma=soma($numero1,$numero2,$numero3,$numero4);

		function media($numero1,$numero2,$numero3,$numero4,$soma)
		{
			$med=0;
			$med=$soma/4;
			return $med;
		}
		echo "A média é: ";
		echo media($numero1,$numero2,$numero3,$numero4,$soma);
		echo "<br>";

?> 