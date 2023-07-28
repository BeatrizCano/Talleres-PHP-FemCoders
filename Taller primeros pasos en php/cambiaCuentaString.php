<?php

//convertir a mayúsculas todos los caracteres del string sin modificar la variable original
$minusculas_a_mayusculas = "Paco es un gato grande y le gusta dormir ";
$minusculas_a_mayusculas = strtoupper($minusculas_a_mayusculas);
echo $minusculas_a_mayusculas;
echo "<br>";

//longitud de la varible tipo string
echo strlen($minusculas_a_mayusculas);
echo "<br>";

//contar la cantidad de palabras de la variable incluyendo concatenacion
echo " Hay ".str_word_count($minusculas_a_mayusculas, 0). " palabras en la cadena '$minusculas_a_mayusculas ' ";
echo "<br>";

//cambiar a orden inverso los caracteres de la variable, sin modificar la original
echo  strrev($minusculas_a_mayusculas);
echo "<br>";

//reemplazar la palabra "gato" por "michi" (tienes que poner la cadena de string que quieres cambiar justo encima para que funcione)
$minusculas_a_mayusculas = " Paco es un gato grande y le gusta dormir";
$search = "gato";
$replace = "michi";
$nueva_frase = str_replace($search, $replace, $minusculas_a_mayusculas); 
echo $nueva_frase;
echo "<br>";

?>
