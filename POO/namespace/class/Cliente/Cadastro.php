<?php
namespace Cliente;
class Cadastro  extends \Cadastro{
 
    public function registrarVenda(){
 
         echo "Foi registada uma venda para o cliente".$this->getNome();
        
    }

}