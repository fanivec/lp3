<!DOCTYPE html>
<html>
<body>
<?php
    //Comentario de linea simple
    /*Comentario extendido*/
    //variable
    $variable = 5;
    echo $variable;
    echo "<hr>"; //Ingresar còdigo html en php
    $cadena = "Hola mundo desde PHP";
    print $cadena;
    echo "<hr>"; //Ingresar còdigo html en php
    $cadena2 = 'Hola mundo desde PHP';
    echo "<h1>$cadena2</h1>";
    echo "Esto es ", "String "," SE Pueden escribir separados entre ,";
    echo "<hr>";
    $variablebuleana = false;
    var_dump($variablebuleana); //sirve para saber que contiene un avariable
    echo "<hr>";
    $variabledecimal = 3.14;
    var_dump($variabledecimal);
?>
   <h1>Tipos de datos objetos</h1>
   <?php

   class Auto {
       function Auto(){
         $this->marca ="kia";
         $this->modelo ="picanto";
         $this->motor =2.0;
       }
   }

   $automovil = new Auto();
   echo $automovil->marca;
   echo $automovil->modelo;

   echo "<hr>";
   echo "<h1>Variables null</h1>";
   $x = "Hola mundo";
   $x = null;
   var_dump($x);

   ?>
</body>
</html>