<?php
$numero1=0;
$numero2=0;

	if (isset($_POST["txt_numero1"])&& isset($_POST["txt_numero2"])) {
		
		$numero1 = $_POST["txt_numero1"];
		$numero2 = $_POST["txt_numero2"];
		
		echo "Número 1: " .$numero1. "<br>";
		echo "Número 2: " .$numero2. "<br>";
	}

	//função da soma

		function soma($numero1,$numero2)
		{
			$soma=0;
			$soma=$numero1 + $numero2;
			return $soma;
		}
		echo soma($numero1,$numero2);
		echo "<br>";

	//função da subtração

		function subtracao($numero1,$numero2)
		{
			$sub=0;
			$sub=$numero1 - $numero2;
			return $sub;
		}
		echo subtracao($numero1,$numero2);
		echo "<br>";

	//função da divisão

		function divisao($numero1,$numero2)
		{
			$div=0;
			$div=$numero1 / $numero2;
			return $div;
		}
		echo divisao($numero1,$numero2);
		echo "<br>";
	
	//função da multiplicação

		function multiplicacao($numero1,$numero2)
		{
			$mul=0;
			$mul=$numero1 * $numero2;
			return $mul;
		}
		echo multiplicacao($numero1,$numero2);
		echo "<br>";
?>