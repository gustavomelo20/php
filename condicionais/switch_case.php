<?php
 $cor = "Azul";

 switch ($cor):
    case "Vermelho":
    echo "Sua cor preferida é o vermleho";

    break;

    case "Verde":
    echo "Sua cor preferida é o verde"; 
    break;

    case "Azul":
    echo "Sua cor preferida é Azul";

    default: 
    echo "Sua cor preferida não é vermelho, verde ou azul.";
endswitch;
?>