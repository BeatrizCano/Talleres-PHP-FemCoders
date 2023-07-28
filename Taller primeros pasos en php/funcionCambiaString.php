<?php

//convertir el texto a minúsculas
function cambia_string_may() {
    $texto = "MI PERRO SE LLAMABA LUCAS";
    $texto = strtolower($texto);
    print_r($texto);
}

cambia_string_may();
echo "<br>";

//convertir el texto a mayúsculas
function cambia_string_min() {
    $texto = "mi perrita se llamaba lola";
    $texto = strtoupper($texto);
    print_r($texto);
}

cambia_string_min();
echo "<br>";

//crear una función que reciba un array de nombres y convierta la primera letra de cada nombre en mayúscula
function convertir_primera_letra_a_mayuscula($nombres) {
    $resultado = array();

    foreach ($nombres as $nombre) {
        $nombre_convertido = ucfirst($nombre);
        $resultado[] = $nombre_convertido;
    }
    
    return $resultado;
}

$nombres = ['paco', 'lola', 'juanjo', 'hector', 'ana', 'helena'];
$nombres_mayuscula = convertir_primera_letra_a_mayuscula($nombres);


echo "Nombres con primera letra en mayúscula: ";
foreach ($nombres_mayuscula as $nombre) {
    echo $nombre . ", ";
}



?>