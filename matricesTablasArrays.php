//----Vemos ahoora un ejemplo de declaración de array multidimencional o matriz----



<?php
$pais = array (
    "Francia" => array(
        "nombre" => "Francia",
        "idioma" => "Francés",
        "moneda" => "Euro"
    ),
    "Australia" => array (
        "nombre" => "australia",
        "idioma" => "Inglés",
        "moneda" => "Dolar Australiano"
    )
);
echo $pais ["Francia"]["idioma"]; //------Muestra "Francés"
   
?>