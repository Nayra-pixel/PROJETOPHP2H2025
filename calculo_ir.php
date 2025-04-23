<?php 
   
   $salbrut = 7500.00; 

   function ir($salbrut){
 	GLOBAL $alq;
 	if($salbrut >= 2428.81 && $salbrut <= 2826.65){
 		$alq = 7.5;
 	 	$desc = $salbrut * (7.5 / 100);
 		$saliq = $salbrut - $desc;    
 	}

    elseif($salbrut >= 2826.66 && $salbrut <= 3751.05){
    	$alq = 15;
 		$desc = $salbrut * (15 / 100);
 		$saliq = $salbrut - $desc;
 	}
 	elseif($salbrut >= 3751.06 && $salbrut <= 4664.68){
 		$alq = 22.5;
 		$desc = $salbrut * (22.5 / 100);
 		$saliq = $salbrut - $desc;
 	}
 	elseif($salbrut > 4664.68 ){
 		$alq = 27.5;
 		$desc = $salbrut * (27.5 / 100);
 		$saliq = $salbrut - $desc;
 	}else{
 		$alq = 0;

 	}
    
     echo ("Salário Bruto: " . $salbrut . 
 		"<br>Porcentagem de Desconto: " . $alq .
 		"<br>Valor do Desconto: " . $desc .
 		"<br>Salário Líquido a Receber: " . $saliq);

   }
   
   ir($salbrut);

 ?>