<?php

//El objetivo es acceder a las vistas mediante el controlador

class ControladorPaginas{
    Public function inicio(){
        //Para mostrar la vista inicio
        include_once ("vistas/paginas/inicio.php");

    }
    Public function carta1(){
        //Para mostrar la vista inicio
        include_once ("vistas/form1/carta1.php");
    }

    Public function convenio1(){
        //Para mostrar la vista inicio
        include_once ("vistas/form2/convenio1.php");

    }


    public function error(){

        //Para mostrar la vista error
        include_once ("vistas/paginas/error.php");
    }
}
    
?>