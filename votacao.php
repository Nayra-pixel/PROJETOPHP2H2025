<?php 

	include("cabecalho.php");

	$idade = 17;

    if($idade < 16){
		include("votacao_menor.php");
		}
	elseif($idade >= 16 && $idade < 18){
		include("votacao_dseis.php");
		}
	else{
		include("votacao_maior.php");
		}

	include("rodape.php");


 ?>