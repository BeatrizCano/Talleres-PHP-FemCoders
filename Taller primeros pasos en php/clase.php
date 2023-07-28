<?php

//Crear una clase coche con sus atributos y un atributo puede ser de tipo array
class Coche {
    public $ruedas = 4;
    public $puertas = 5;
    public $marca = "Renault";
    public $modelos = ["Renault5", "Space", "Twingo", "Familiar"];
} 

//Crear una función que devuelva la marca del carro
function imprimir_marca($coche) {
    echo "Marca: " . $coche-> marca;
}
$mi_coche = new Coche();
imprimir_marca($mi_coche);
echo "<br>";

//Crear una función que devuelva la cantidad de puertas que tiene el carro
function imprimir_numero_puertas($coche) {
    echo "Número de puertas: " . $coche-> puertas;
}
$mi_coche = new Coche();
imprimir_numero_puertas($mi_coche);
echo "<br>";

//Crear una función que devuelva un atributo del array
function imprimir_modelos_space($coche) {
    echo "Modelo: " . $coche-> modelos[1];
}
$mi_coche = new Coche();
imprimir_modelos_space($mi_coche);
echo "<br>";

?>