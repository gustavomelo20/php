<?php

$json = '[{"nome":"Joao","Idade":20},{"nome":"Gustavo","Idade":24}]';


$data = json_decode($json, true);


var_dump($data);
?>