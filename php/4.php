<h1>Estructura for</h1>
<?php 
/*
for(variable iteradora; condicon variable; variable++)
   bloque de instrucciones
*/
for($i = 0; $i <=10; $i++){
    echo "El nro es: $i <br>";
}

echo "<h1>Foreach para recorrer matrices</h1>";
$colores = array("rojo", "verde", "azul", "amarillo");
foreach($colores as $valores){
   echo "$valores <br>";
}

echo "<h1>Foreach para recorrer matrices con indices de datos</h1>";
$año = array("Pedro"=>"35", "Juan" =>"37", "Maria" =>"28");
foreach($año as $nombre => $edad){
     echo "$nombre = $edad <br>";
}

echo "<h1>Break para parar la ejecuciòn</h1>";
  for ($a =0; $a <10; $a++){
    if($a ==5){
        break;

    }
    echo "Ek nro es: $a <br>";
  }

  echo "<h1>Continue para parar la ejecuciòn</h1>";
  for ($b =0; $b <10; $b++){
    if($b ==5){
        continue;

    }
    echo "Ek nro es: $b <br>";
  }



?>