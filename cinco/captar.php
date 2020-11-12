<?php
$raparigas=0;
$rapazes=0;

	if (isset($_POST["txt_numero1"])&& isset($_POST["txt_numero2"])) {
		if (is_numeric($_POST["txt_numero1"])&& is_numeric($_POST["txt_numero2"]) {
			
			$raparigas = $_POST["txt_numero1"];
			$rapazes = $_POST["txt_numero2"];
			
			echo "Raparigas: " .$raparigas. "<br>";
			echo "Rapazes: " .$rapazes. "<br>";
		}
	}

	//função do total da turma

		function turma($raparigas,$rapazes)
		{
			$soma=0;
			$soma=$raparigas+$rapazes;
			return $soma;
		}
		echo "A turma tem: ";
		echo turma($raparigas,$rapazes);
		echo " alunos. <br>";

	//total de alunos

		$turma=turma($raparigas,$rapazes);

	//função da percentagem de raparigas

		function raparigas($turma,$raparigas)
		{
			$perc_raparigas=0;
			$perc_raparigas=$raparigas / $turma * 100;
			return $perc_raparigas;
		}
		echo "A percentagem das raparigas é: ";
		echo raparigas($turma,$raparigas);
		echo " % <br>";

	//função da percentagem de raparigas

		function rapazes($turma,$rapazes)
		{
			$perc_rapazes=0;
			$perc_rapazes=$rapazes / $turma * 100;
			return $perc_rapazes;
		}
		echo "A percentagem dos rapazes é: ";
		echo rapazes($turma,$rapazes);
		echo " % <br>";

?>