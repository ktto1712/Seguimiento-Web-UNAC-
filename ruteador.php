<?php


// el controlador y accion que obtiene por la url
// estamos canalizando la informacion
//echo $controlador;
//echo $accion;




//ayuda a canalizar ciertos elementos o entrar directamente al controlador
include_once ("controladores/controlador_".$controlador.".php");

//include_once ("controladores/controlador_".$controlador.".php");

//include_once("controladores/controlador_paginas.php");

//include_once("controladores/controlador_form1.php");

//include_once("controladores/controlador_form2.php");



$objControlador="Controlador".ucfirst($controlador);

$controlador =new $objControlador();
//acceder al controlador, intanciar
// ojeto que sirve para crear la instancia del controlador que quiero acceder
// y el controlador inicio es la accion a la que quiero entrar 
//$controlador= new ControladorPaginas();
//el controlador esta accediendo al inicio

$controlador -> $accion();

?>