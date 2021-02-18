<?php

function autocargarControllers($clase)
{
//busca  y trae el nombre de las clases desde la carpeta controllers
    $nombreClase=$clase.'.php';
 //@ para que no salgan los warnings   
   @include 'controllers/'.$nombreClase;
}

spl_autoload_register('autocargarControllers');