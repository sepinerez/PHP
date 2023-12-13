<?php

//--------------concatenación-------------

$bienvenida = "Biemvenido ";
$nombre = "Sandra";
$saludo  = $bienvenida . $nombre;

$cadena = "Esto es una variable de tipo string";
echo $cadena;

$numeros =array(1, 2, 40, 55);
$cadena = "La posicón tres contiene el dato $numeros[2]";
echo =$cadena //Este escribe la posición tres contiene el dato 40

$numeros = array('uno' => 1, 'dos' => 2, 'tres' => 40, 'cuatro' => 55);
$cadena = "La posición 'tres' contiene el datp $numeros['tres']"; //Esto produce un error
$cadena = "La posición 'tres' contiene el dato {$numeros['tres']}";

?>