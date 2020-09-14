<?php

for ($contador = 0; $contador <= 10; $contador++):
  echo " 1 x $contador = ". ($contador*1)."<br>";
endfor;
echo "<br>";
echo "<hr>";
for ($contador = 0; $contador <= 10; $contador++):
  echo " 2 x $contador = ". ($contador*2)."<br>";
endfor;
echo "<br>";
echo "<hr>";
for ($contador = 0; $contador <= 10; $contador++):
    echo " 3 x $contador = ". ($contador*3)."<br>";
endfor;
echo "<br>";
echo "<hr>";
for ($contador = 0; $contador <= 10; $contador++):
    echo " 4 x $contador = ". ($contador*4)."<br>";
endfor;
echo "<br>";
echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul");

foreach($cores as $indice => $valor):
    echo $indice."-". $valor."<br>";
endforeach;

?>