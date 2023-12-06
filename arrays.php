<?php

//------Arrays con índices numericos-------------
$estaciones[0] = "Primavera";
$estaciones[1] = "Verano";
$estaciones[2] = "Otoño";
$estaciones[3] = "Invierno";

//-------Arrays asociados------------------------
$idioma["Francia"] = "Frances";
$idioma["Australia"] = "Ingles";
$idioma["Italia"] = "Italiano";
$Idioma["Japon"] = "Japones";

//--------Arrays más apropiada si es más complejo----------------
$idioma = array ("Colombia" => "Epañol", "Japon" => "Japones", "China" => "Chino");
$materias = array ("mates" => "Matematicas", "Lengua" => "Español", "Historia" => "Geografia");

#----Array Globals------------------

$variable1 = "valor";
$variable2 = "45";

function mifuncion(){
    //---Estoy dentro de la función, accedo a las variables utilizando $GLOBALS

    echo $GLOBALS["variable1"];
    echo $GLOBALS["variable2"];
}

#-------Otra forma de usar variables globales en una función

function mifuncion2(){
    //--Con la siguiente linea declaramos el uso de las variables globales
    global $variable1, $variable2;

    echo $variable1;
    echo $variable2;
}






?>
