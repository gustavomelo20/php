<?php

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Gustavo Melo");
$cad->setEmail("infogustavomelo@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>