<?php 
print("Usando print para exibir na tela <br/>");

$data = "17 de Março de 2025" ;
$salario = 1509.00;
$cargo = "Estagiário Kiko";

echo "Arquivo criado em $data.<br/>";

printf("Salário mínimo: R$ %.2f por mês. <br/>", $salario);

$texto = sprintf("%s recebe R$ %.2f por mês.",$cargo,$salario*2);

echo ($texto);

 ?>