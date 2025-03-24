<?php 
	echo "Escolha uma opção: <br><br>	1 - Banana<br>2 - Maçã<br>3 - Melancia<br>4 - Uva<br>5 - Sair<br><br>";

	$op = 2;

	switch($op){
		case 1:
			echo "A opção 1 foi selecionada";
		break;

		case 2:
			echo "A opção 2 foi selecionada";
		break;

		case 3:
			echo "A opção 3 foi selecionada";
		break;

		case 4:
			echo "A opção 4 foi selecionada";
		break;


		default:
			echo "Opção Inválida";
			break;


	}

?>