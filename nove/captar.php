<?php
$nota=0;

	if (isset($_POST["chb_valor"])) {	
		
		$nota = $_POST["chb_valor"];
		
	}

	if ($nota==1) {
		echo "Aluno MAU com nota de 1  valor.";
	}
	elseif ($nota==2) {
		echo "Aluno MEDIOCRE com nota de 2 valores.";
	}
	elseif ($nota ==3) {
		echo "Aluno MÉDIO com nota de 3 valores.";
	}
	elseif ($nota==4) {
		echo "Aluno BOM com nota de 4 valores.";
	}
	elseif ($nota==5) {
		echo "Aluno MUITO BOM com nota de 5 valores.";
	}

	/*switch ($nota) {
		case ($nota=1):
			echo "Aluno MAU com nota de 1  valor.";
			break;
		
		case ($nota=2):
			echo "Aluno MEDIOCRE com nota de 2 valores.";
			break;

		case ($nota=3):
			echo "Aluno MÉDIO com nota de 3 valores.";
			break;

		case ($nota=4):
			echo "Aluno BOM com nota de 4 valores.";
			break;

		case ($nota=5):
			echo "Aluno MUITO BOM com nota de 5 valores.";
			break;
	}*/
?> 