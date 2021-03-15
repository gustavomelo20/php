
<?php



$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Joao',
    'Idade'=>20
));

array_push($pessoas, array(
    'nome'=>'Gustavo',
    'Idade'=>24
));


echo json_encode($pessoas);

?>