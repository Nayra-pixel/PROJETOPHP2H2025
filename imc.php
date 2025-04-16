<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator IMC</title>
</head>
<body>
<h1>Qual o seu peso ideal?</h1>
<img src="img/tabela_imc.jpg" alt="Tabela IMC">
<?php 

	$altura = 1.69;
	$peso = 70;
	$imc = 0;

  	function imc($altura, $peso){

  		$imc = $peso / $altura ** 2; 

  		if($imc < 18.5){

  		printf("<br/>O seu IMC é %.2f.<br/>Você está abaixo do peso ideal. :/ ", $imc);
  		}elseif($imc >= 18.5 && $imc <= 24.9){

  		printf("<br/>O seu IMC é %.2f.<br/>Você está no peso ideal. :) ", $imc);
  		}elseif($imc >= 25 && $imc <= 29.9){

  		printf("<br/>O seu IMC é %.2f.<br/>Você está com excesso de peso. :/ ", $imc);
  		}elseif($imc >= 30 && $imc <= 34.9){

  		printf("<br/>O seu IMC é %.2f.<br/>Você está com obesidade de classe I. ", $imc);
  		}elseif($imc >= 35 && $imc <= 39.9){

  		printf("<br/>O seu IMC é %.2f.<br/>Você está com obesidade de classe II. ", $imc);
  		}else{

  		printf("<br/>O seu IMC é %.2f.<br/>Você está com obesidade de classe III. ", $imc);
  		}
  	}

  	$imc = imc($altura,$peso);
  	echo $imc;
    
 ?>
</body>
</html>