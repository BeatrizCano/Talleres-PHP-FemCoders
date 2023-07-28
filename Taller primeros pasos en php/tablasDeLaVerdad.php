<?php

//suponiendo estas variables
$es_un_michi_grande = true;
var_dump($es_un_michi_grande);
echo "<br>";

$le_gusta_comer = true;
var_dump($le_gusta_comer);
echo "<br>";

$sabe_volar = false;
var_dump($sabe_volar);
echo "<br>";

$tiene_dos_patas = false;
var_dump($tiene_dos_patas);
echo "<br>";

//¿Cuál es el resultado según las tablas de la verdad?
var_dump($es_un_michi_grande && $le_gusta_comer); //true
echo "<br>";

var_dump($es_un_michi_grande || $sabe_volar); //true
echo "<br>";

var_dump($sabe_volar || $tiene_dos_patas); //false
echo "<br>";

var_dump(!$le_gusta_comer); //false
echo "<br>";

var_dump(!$le_gusta_comer || $es_un_michi_grande); //true
echo "<br>";

?>