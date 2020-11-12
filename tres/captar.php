<?php
$numero1=0;
$numero2=0;

	if (isset($_POST["txt_numero1"])&& isset($_POST["txt_numero2"])) {
		
		if (is_numeric($_POST["txt_numero1"])&& is_numeric($_POST["txt_numero2"])) {
			
			$numero1 = $_POST["txt_numero1"];
			$numero2 = $_POST["txt_numero2"];
			
			echo "Número 1: " .$numero1. "<br>";
			echo "Número 2: " .$numero2. "<br>";
		}
		else{

			return "Erro";
		}
	}
//função da soma
		function soma($numero1,$numero2)
		{
			$soma=0;
			$soma=$numero1 + $numero2;
			return $soma;
		}

//função da subtração

		function subtracao($numero1,$numero2)
		{
			$sub=0;
			$sub=$numero1 - $numero2;
			return $sub;
		}

//função da divisão

		function divisao($numero1,$numero2)
		{
			if ($numero2!=0) {
				
				$div=0;
				$div=$numero1 / $numero2;
				return $div;
			}
			else{
				return "erro";
			}
		}

//função da multiplicação

		function multiplicacao($numero1,$numero2)
		{
			if ($numero1!= &&$numero2!=0) {
				$mul=0;
				$mul=$numero1 * $numero2;
				return $mul;
			}
			else{
				return "erro";
			}
		}
	
	if ($_POST["operacao"]=="soma") {
		
		echo "A soma é: ";
		echo soma($numero1,$numero2);
		echo "<br>";
	}

	elseif ($_POST["operacao"]=="subtracao") {
		
		echo "A subtração é: ";
		echo subtracao($numero1,$numero2);
		echo "<br>";
	}
		
	elseif ($_POST["operacao"]=="divisao") {
		
		echo "A divisão é: ";
		echo divisao($numero1,$numero2);
		echo "<br>";
	}
	
	elseif ($_POST["operacao"]=="multiplicacao") {
		
		echo "A multiplicação é: ";
		echo multiplicacao($numero1,$numero2);
		echo "<br>";
	}
		
?> 