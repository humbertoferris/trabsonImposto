<?php
// CALCULO DO INSS
//Declara variáveis (faixa dos valores da tabela do inss
$imp_1 = 1556.94;
$imp_2 = 2594.92;
$imp_3 = 5189.82;

// Declara as porcentagens para aplicar no calculo 
$poc_1 = 0.08;
$poc_2 = 0.09;
$poc_3 = 0.11;


// Busca valor do Salário informado
$salario = $_POST["salario"];
$valor_float = floatval ($salario);
// Variável usada para calcular o IR
$novoSal;
// Calculo do INSS
if ($valor_float <= $imp_1) {
      $novoSal = $valor_float * (1 - $poc_1);
       echo "$novoSal";
      }
elseif ($valor_float > $imp_1 and $valor_float <= $imp_2) {
      $novoSal = $valor_float * (1 - $poc_2);
       echo "$novoSal";
      }

elseif ($valor_float > $imp_2 and $valor_float <= $imp_3) {
         $novoSal = $valor_float * (1 - $poc_3);
          echo "$novoSal  ";
      }

else ($valor_float > $imp_3) 
         $novoSal = $valor_float - (5189.82 * $poc_3);
          echo "$novoSal ";
}        


// CALCULO DO IR
//Declara variáveis (faixa dos valores da tabela do IR)
$imp_1 = 1903.98;
$imp_2 = 2826.65;
$imp_3 = 3751.05;
$imp_4 = 4664.68;

// Declara as porcentagens para aplicar no calculo 
$poc_1 = 0.075;
$poc_2 = 0.15;
$poc_3 = 0.225;
$poc_4 = 0.275;

//Salario liquido que será exibido no final
$salLiq

//Calculo do IR baseado na variavel $novoSal

if ($novoSal <= $imp_1) {
       echo "ISENTO";
      }
elseif ($novoSal > $imp_1 and $novoSal <= $imp_2) {
      $salLiq = $novoSal * (1 - $poc_1);
       echo (float) "$salLiq";
      }

elseif ($novoSal > $imp_2 and $novoSal <= $imp_3) {
         $salLiq = $novoSal * (1 - $poc_2);
          echo (float) "$salLiq  ";
      }

elseif ($novoSal > $imp_3 and $novoSal <= $imp_4) {
         $salLiq = $novoSal * (1 - $poc_3);
          echo (float) "$salLiq  ";
      }

else ($novoSal > $imp_4) {
         $salLiq = $novoSal * (1 - $poc_4);
          echo (float) "$salLiq ";
        }

?>