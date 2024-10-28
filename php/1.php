<h1>Funciones con cadenas</h1>
<?php
echo strlen("Hola mundo desde mi php");//Cantidad de valores que contiene una cadena
echo "<hr>";
$cadena = "hola mundo ";
echo trim($cadena);//Sacar espacios de cadenas de textos
echo "<hr>";
echo str_word_count ("Hola mundo desde php"); //contador de palabras
echo "<hr>";
$cadena = "Hola mundo desde php";
echo strrev($cadena);//sirve para invertir valores
echo "<hr>";
echo strpos("Hola mundo desde php","mundo");
echo "<hr>";
echo str_replace("mundo", "planeta", "Hola mundo");
echo "<hr>";
echo (pi());//Devuelve en nro pi
echo "<hr>";
echo (min(0,150,30,85,-10,-100,-102));//trae el valor minimo de una cadena de nros
echo "<hr>";
echo (max(0,150,30,85,-10,-100,-102));//trae el valor mayor de una cadena de nros
echo "<hr>";
echo "<h1>Variables constantes</h1>";
define("nombredeconstante" ," Bienvenidos al curso de php");//se define primero el nombre y luego se imprime
echo nombredeconstante;//se imprime de esta forma 
echo "<hr>";//Definir array de tipo de constante
define("auto",["BMW", "Toyota", "Nissan", "Kia"]);
echo auto[3];


?>