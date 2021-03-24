<?php

spl_autoload_register(function($nameClasses){
  
     $dirClass =  "class";
     $filename =  $dirClass.DIRECTORY_SEPARATOR .$nameClasses. ".php";

     if(file_exists($filename) === true){
       
        require_once($filename);

     }

});



?>