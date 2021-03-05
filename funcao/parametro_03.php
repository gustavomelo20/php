<?php
$a = 10;

function trocaValor($a){
     $a = 50;

     return $a;
}
 
echo trocaValor($a);
echo '<br>';
echo $a;

echo '<br>';
echo '<br>';
echo '<br>';

$b = 20;

function trocaValor2(&$b){
    $b = 50;

    return $b;
}
//passagem de valor da função para o escopo  |  &
echo trocaValor2($b);
echo '<br>';
echo $b;
?>