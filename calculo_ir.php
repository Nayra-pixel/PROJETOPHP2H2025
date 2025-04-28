<?php 
   
   $salbrut = 2500.00; 

   function ir($salbrut){
 	 GLOBAL $alq, $desc, $saliq;
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
 	 }
    else{
 		$alq = 0;
      $desc = 0;
      $saliq = $salbrut - $desc;

 	 }
    
      return($salbrut);
      return($alq);
      return($desc);
      return($saliq);

   }
   
   ir($salbrut);
   echo ("Salário Bruto: R$" . $salbrut .
      "<br>Porcentagem de Desconto: " . $alq . "%" .
      "<br>Valor do Desconto: R$" . $desc .
      "<br>Salário Líquido a Receber: R$" . $saliq);

 ?>