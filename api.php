<?php
require_once("teste.class.php");
$teste = new Teste();

if($_POST){
	$teste->add();
}
