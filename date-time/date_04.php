<?php

$dt = new DateTime();
$periodo = new DateIntervaL("P15D");

echo $dt->format('d/m/Y H:i:s');

$dt->add($periodo);

echo "<br>"; 

echo $dt->format('d/m/Y H:i:s');


?>