<?php
$ordenado=0;
$vencimento=0;
$cantina=0;
$transporte=0;

	if (isset($_POST["txt_numero1"])) {

		if (is_numeric($_POST["txt_numero1"])) {
			
			$ordenado = $_POST["txt_numero1"];
			echo "Ordenado Bruto: " .$ordenado. " € <br>";
		}
		else{

			return "erro";
		}
	}

	//função dos vencimentos

		function vencimentos($ordenado)
		{
			$desconto = 0;
			$desconto = $ordenado * 0.15;
			return $desconto;
		}
		echo "O desconto para os vencimentos é: ";
		echo vencimentos($ordenado);
		echo " €. <br>";

		$vencimento = vencimentos($ordenado);

	//função da cantina

		function refeicao($ordenado)
		{
			$desconto = 0;
			$desconto = $ordenado * 0.10;
			return $desconto;
		}
		echo "O desconto para a refeição é: ";
		echo refeicao($ordenado);
		echo " €. <br>";

		$cantina = refeicao($ordenado);

	//função dos transportes

		function transportes($ordenado)
		{
			$desconto = 0;
			$desconto = $ordenado * 0.05;
			return $desconto;
		}
		echo "O desconto para o transporte é: ";
		echo transportes($ordenado);
		echo " €. <br>";

		$transporte = transportes($ordenado);

	//função do desconto total

		function total($vencimento,$cantina,$transporte)
		{
			$descontototal = 0;
			$descontototal = $vencimento + $cantina + $transporte;
			return $descontototal;
		}
		echo "O desconto total é: ";
		echo total($vencimento,$cantina,$transporte);
		echo " €. <br>";

		$totaldescontos = total($vencimento,$cantina,$transporte);

		$ordenadoliquido = $ordenado - $totaldescontos;
		echo "O ordenado liquido que deve receber é: " .$ordenadoliquido. " €";
?> 