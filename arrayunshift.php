<?php 

	$nomes = array("Maria","José","Pedro");
	//array_push($nomes, "Ana");
	//$excl = array_shift($nomes);
	//array_unshift($nomes, "Ana");
	//$excl = array_pop($nomes);



	foreach ($nomes as $item) {

		echo "<br>" . $item;

	}

	echo "<br>Nome removido: " . $excl;

	//var_dump($nomes);

	echo "<br>";

 ?>