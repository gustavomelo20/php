<?php

$condicao = true;

while($condicao) {
    
    $numero = rand(1, 1000);

    if( $numero === 3){
         echo "TRÊS!!!";
         $condicao = false;
    }

    echo $numero . "  ";

}


?>