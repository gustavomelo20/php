<?php

interface Veiculo{
   
    public function acelerar($velocidade);
    public function freinar($velocidade);
    public function trocarMacha($marcha);

}

class Civic implements Veiculo{

    public function acelerar($velocidade){

        echo "O veículo acelerou até" . $velocidade . "km/h"  . "<br/>";
    }
    public function freinar($velocidade){

        echo "O veículo freou até" . $velocidade . "km/h" . "<br/>";
    }
    public function trocarMacha($marcha){

        echo "O veículo engatou a macha" . $marcha . "km/h";
    }
}


$carro = new Civic();
$carro->acelerar(" 130");
$carro->freinar(" 70");
$carro->trocarMacha(" 4");


?>