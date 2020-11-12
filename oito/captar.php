<?php
	if (isset($_POST["idade"])) {	
		if (is_numeric($_POST["idade"])) {
			
			$idade = $_POST["idade"];
		
			if ($idade>0) {
				
					if ($idade<18) {
						echo "Você tem " .$idade. " - é MENOR de idade.";
					}
					elseif ($idade<=100) {
						echo "Você tem " .$idade. " - é MAIOR de idade.";
					}
					elseif ($idade>100) {
						echo "Você é um dinaussaro.";
					}
			}
			else
			{
				echo "Insira um valor númerico positivo.";
			}
		}
		else{

			return "Erro";
		}
	}
?>