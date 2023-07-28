<?php

//crear una funcion que imprima un array de numeros en forma de lista
function array_number() {
    $array = [12, 23, 34, 45, 56, 67, 78, 89, 90, 11];
    //var_dump($array);
    print_r($array);
}

array_number();
echo "<br>";

//crear una función que añade un número al array
function añadir_numero() {
    $array = [12, 23, 34, 45, 56, 67, 78, 89, 90, 11];
    array_push($array, 987);
    var_dump($array);
    echo "<br>";
}

añadir_numero();
echo "<br>";

//crear función que elimine los numeros pares del array
function borrar_pares() {
    $array = [12, 23, 34, 45, 56, 67, 78, 89, 90, 11];
    $resultado = array();
   
    foreach ($array as $numero) {
        if ($numero % 2 != 0) {
            $resultado[] = $numero;
        }
    }

    return $resultado;
}


$arraySinPares = borrar_pares();


echo "Array sin números pares: ";
var_dump($arraySinPares);
echo "<br>";

//crear una función que devuelva el número mayor de un array
function numero_mayor()
{
    $array = [12, 23, 34, 45, 56, 67, 78, 89, 90, 11];
    echo max($array);
}

numero_mayor();
echo "<br>";

//crear una función que devuelva el número menor de un array
function numero_menor()
{
    $array = [12, 23, 34, 45, 56, 67, 78, 89, 90, 11];
    echo min($array);
}

numero_menor();
echo "<br>";

?>