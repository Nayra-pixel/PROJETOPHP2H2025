<?php 
   
   $salbrut = 4664;

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

   function desc($salbrut){
      GLOBAL $alq, $desc;
      $desc = $salbrut * ($alq / 100);
      return($desc);
   }

   function saliq($salbrut,$desc){
      GLOBAL $saliq;
      $saliq = $salbrut - $desc;
      return($saliq);
   }

   function exibir($salbrut,$desc,$alq,$saliq){
      echo ("Salário Bruto: R$" . $salbrut .
      "<br>Porcentagem de Desconto: " . $alq . "%" .
      "<br>Valor do Desconto: R$" . $desc .
      "<br>Salário Líquido a Receber: R$" . $saliq);
   }

   desc($salbrut);
   saliq($salbrut,$desc);
   exibir($salbrut,$desc,$alq,$saliq);


 ?>