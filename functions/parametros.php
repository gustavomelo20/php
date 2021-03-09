<?php
function ola($texto = "mundo", $periodo = "Bom dia"){
    return "Olá $texto! $periodo<br>";
}

echo ola('Gustavo', 'Boa tarde ');
echo ola('Felipe');
echo ola();



?>