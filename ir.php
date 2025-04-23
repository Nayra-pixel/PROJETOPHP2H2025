<?php 
   
   $salbrut = 1500.00; 
   $desc = 0;

   function ir($salbrut){
 	
 	if($salbrut >= 2428.81 && $salbrut <= 2826.65){
 	 	$desc = $salbrut * (7.5 / 100);
 		$saliq = $salbrut - $desc;

 		echo ("Salário Bruto: " . $salbrut . 
 		"<br>Porcentagem de Desconto: 7,5%" . 
 		"<br>Valor do Desconto: " . $desc .
 		"<br>Salário Líquido a Receber: " . $saliq);
    }

    elseif($salbrut >= 2826.66 && $salbrut <= 3751.05){
 		$desc = $salbrut * (15 / 100);
 		$saliq = $salbrut - $desc;

 		echo ("Salário Bruto: " . $salbrut . 
 		"<br>Porcentagem de Desconto: 15%" . 
 		"<br>Valor do Desconto: " . $desc .
 		"<br>Salário Líquido a Receber: " . $saliq);
 	}
 	elseif($salbrut >= 3751.06 && $salbrut <= 4664.68){
 		$desc = $salbrut * (22.5 / 100);
 		$saliq = $salbrut - $desc;

 		echo ("Salário Bruto: " . $salbrut . 
 		"<br>Porcentagem de Desconto: 22,5%" . 
 		"<br>Valor do Desconto: " . $desc .
 		"<br>Salário Líquido a Receber: " . $saliq);
 	}
 	elseif($salbrut > 4664.68 ){
 		$desc = $salbrut * (27.5 / 100);
 		$saliq = $salbrut - $desc;

 		echo ("Salário Bruto: " . $salbrut . 
 		"<br>Porcentagem de Desconto: 27,5%" . 
 		"<br>Valor do Desconto: " . $desc .
 		"<br>Salário Líquido a Receber: " . $saliq);
 	}else{
 		GLOBAL $desc;
 		echo ("Salário Bruto: " . $salbrut . 
 		"<br>Porcentagem de Desconto: 0%" . 
 		"<br>Valor do Desconto: " . $desc .
 		"<br>Salário Líquido a Receber: " . $salbrut);

 	}
   }

   ir($salbrut);

 ?>