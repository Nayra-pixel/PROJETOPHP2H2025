<?php 	

		$emp = array(
			array(1,"Arthur",4000),
			array(2,"Giovana",5000),
			array(3,"João",3000)
		);
			echo "<pre>";
		var_dump($emp);
			echo "</pre>";

			echo "Table<br>";

		for($linha=0;$linha<3;$linha++){
			for($coluna=0;$coluna<3;$coluna++){
				echo $emp[$linha][$coluna]." ";
			} 
			echo "<br>";
		}

		$arr = array('v'=> 'Vermelho', 've' => 'Verde', 'a' => 'Azul',
			array ('azul', 'marrom', 'preto'));

		echo json_encode($arr);

 ?>		
