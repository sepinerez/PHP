#----------------Operadores de asignación ------------------

//------ El simbolo "=" ES de asignación------------
//----  += suma y asignación
//----  -= resta y asignación
//----  *= multiplicación y asignación
//----  /= divición y asignación
//----  %= modulo y asignación
//----  .= concatenacion y asignación

#---------------Operadores de comparación-----------

//----  == compara si son iguales
//----  != compara si son distintos
//----  === comprueba si son iguales y del mismo Tipo
//----  !== comprueba si son distintos o de distinto tipo
//----  <> difente (igual que !=)
//----  <  menor que
//----  > mayor que
//----  <= menor o igual que 
//----  >= mayor o igual que 
//----  <=> comparador de orden 
//----  ?? uno o el otro

#----------------Operadores lógicos-------------

//---- and operación lógica "y", será verdadero si ambos son verdaderos.
//---- or operación lógica "o", será verdadero si uno de ellos es verdadero.
//---- xor operación lógica "xor", será verdadero si uno es verdadero, pero no ambos.
//---- ! operación de negación, ei era verdadero pasa a falso y viseversa.
//---- && operación lógica "y".
//---- || operación lógica "o".

#-----------------Operadores de incremento--------

//---- ++$a pre-incremento
//---- $a++ post-incremento
//---- --$a pre-decremento
//---- $a-- post-decremento

//-----------------------------------

<?php

//------------------------

$valor = "Esto es lo que se va a asignar a la variable";

//-------------------------

$a = 23;
$b = 3;
$c = $a - $b;

//--------------------------

$x = 2;
$x += 5; // $x valdrá 7

//------------------------

$a = 20;
$b = 30;
if($a < $b) {
    echo "$a es mayor que $b";
}

//---------------------------

$cadena = "Hola ";
$cadena .= "mundo"; //----- $cadena ahora vale "hola mundo" 

//----------------------------

$a = true;
$b = false;

if ($a && $b) {
    echo "$a y $b son los dos verdaderos";
}else {
    echo "uno de $a o $b son falsos, o los dos son falsos";
}

//------------------------------------

$a = 3;
$b = ++$a;
echo "\$a vale $a y \$b vale $b"; //$a vale 4 y $b vale 4

$a = 3;
$b = $a++;
echo "\$a vale $a y \$b vale $b"; // $a vale 4 y $b vale 3

//--------------concatenación-------------

$bienvenida = "Biemvenido ";
$nombre = "Sandra";
$saludo  = $bienvenida . $nombre;

?>