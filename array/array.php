<?php

 $carros = array("BMW","Veloster","Hilux");
 print_r ($carros);

 echo "<br>";

 $motos = array();
 $motos[] = "Yamaha";
 $motos[] = "Honda";
 $motos[] = "Suzuki";
 print_r ($motos);

 echo "<hr>";

 $totalMotos = count($motos);
 echo $totalMotos;

 echo "<br>";

 foreach($carros as $valor){
     echo $valor."<br>";
 }

 $pessoa = array("nome"=> "Rodrigo", "idade" => 23, "altura" => 1.73 );
 $pessoa["cidade"] = "Itabuna";

 foreach($pessoa as $indice => $valor){

    echo $indice.":".$valor."<br>";
 }
 echo "<hr>";
 $times = array(
     "cariocas"=> array("campeao" => "vasco","vice" => "flamengo","terceiro" =>"botafogo"),
     "paulistas" => array("santos", "sao paulo", "palmeiras"),
     "baianos" => array("bahia","vitoria","itabuna") 
    );
    echo $times["paulistas"][1];
    echo "<br>";

    foreach($times["cariocas"] as $indice => $valor){

        echo $indice.":".$valor."<br>";
    }
 ?>