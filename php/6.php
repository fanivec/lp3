<h1>Arrays</h1>
<?php 
 $autos = array("volvo ", " Toyota", " kia");
 echo "Tengo un: ".$autos[0].",".$autos[1]." y".$autos[2].".";
 
 echo "<h2>Recorrer array con foreach y traer el valor del array</h2>";
 foreach($autos as $auto){
    echo $auto;
 }
 echo "<h2>Recorrer array con foreach y tarer el valor del array y el indice</h2>";
 foreach($autos as $index => $auto){
    echo "El indice es: ".$index." y la marca es: ".$auto. "<br>";
 }

 echo "<h1>Bidimencionales</h1>";
 $auto=array(
    array("volvo",22,18),
    array("BMW",15,13),
    array("Toyota",15,13),
    array("Nissan",15,13),
   
 );

 echo $auto[0][0].": En stock : ".$auto[0][1]." El salso es: ".$auto[0][2]."<br>";
 echo $auto[1][0].": En stock : ".$auto[1][1]." El salso es: ".$auto[1][2]."<br>";
 echo $auto[2][0].": En stock : ".$auto[2][1]." El salso es: ".$auto[2][2]."<br>";
 echo $auto[3][0].": En stock : ".$auto[3][1]." El salso es: ".$auto[3][2]."<br>";


?>