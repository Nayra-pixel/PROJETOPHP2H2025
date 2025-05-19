<?php 

	$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");
	$chave = array($nomes);
	//$chave = array_search("Ana", $nomes);
	//$chave = array_keys($nomes);
	//$valores = array_values($nomes);
	//echo "Chave de busca realizada: ".$chave;
	
	/*if(array_key_exists("NA", $nomes)){

		echo "Nome encontrado no vetor, através da chave.";
	
	}else{

		echo("Nome não encontrado no vetor");

	}*/

	/*foreach($chave as $item){

		echo "<br>".$item;

	}

	echo "<br>";*/

	print_r($valores);

	echo "<br>Next: ".next($nomes);
	echo "<br>End: ".end($nomes);
	echo "<br>Prev: ".prev($nomes);
	echo "<br>Reset: ".reset($nomes);

	while($chave = key($nomes)){

		echo "<br>".$chave;
		next($nomes);
	}

 ?>