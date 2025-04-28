<?php 
   
   $salbrut = 2500.00; 
   GLOBAL $alq, $desc, $saliq, $salbrut;

   if($salbrut >= 2428.81 && $salbrut <= 2826.65){
      $alq = 7.5;
   }
   elseif($salbrut >= 2826.66 && $salbrut <= 3751.05){
      $alq = 15;
   }
   elseif($salbrut >= 3751.06 && $salbrut <= 4664.68){
      $alq = 22.5;
   }
   elseif($salbrut > 4664.68 ){
      $alq = 27.5;
   }
   else{
      $alq = 0;
   }

   function desc($salbrut, $alq){
      $desc = $salbrut * ($alq / 100);
      return($desc);
   }

   function saliq($desc, $salbrut){
      $saliq = $salbrut - $desc;
      return($saliq);
   }

   desc($salbrut);
   saliq($desc, $salbrut);
   echo ("Salário Bruto: R$" . $salbrut .
      "<br>Porcentagem de Desconto: " . $alq . "%" .
      "<br>Valor do Desconto: R$" . $desc .
      "<br>Salário Líquido a Receber: R$" . $saliq);


 ?>