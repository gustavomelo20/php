<?php

interface Veiculo {
 
    public function acelerar($velocidade);
    public function freinar($velocidade);
    public function trocarMacha($macha);


}
 
abstract class Automovel implements Veiculo{


   public function acelerar($velocidade){

         echo "O veiculo acelerou até " . $velocidade . "km/h";

   }

   public function freinar($velocidade){


        echo "O veiculo frenou até" . $velocidade . "km/h";

   }

   public function trocarMacha($macha){

      echo "O veiculo engatou a marcha" . $marcha;

   }


}

class DelRey extends Automovel{

    public function empurar(){
      
    }

}

$carro = new DelRey();

$carro->acelerar(200);

?>