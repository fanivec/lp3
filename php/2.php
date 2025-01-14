<h1>Condicionales en php</h1>
<h2>Condicional if</h2>
<?php 
/*
if (condiciòn){
  bloqye de instrucciones
}else{
  bloque de instrucciones
}
  else if(Condiciòn){
  bloque de instrucciones
  }
*/
$hora = date("H");
if($hora < "19"){
    echo "Que tengas un buen dìa";


}
?>

<h2>Condicional if else</h2>
<?php
if($hora < "19"){
    echo "Que tengas un buen dia";


}else{
    echo "Que tengas buenas noches";
}
?>

<h2>Condicional else if</h2>
<?php
if($hora < "10"){
    echo "Que tengas un buen dia";


}elseif ($hora > "20") {
    echo "Que tengas una buena tarde";
   
}
else{
    echo "Que tengas buenas noches";
}
?>

<h1>Switch</h1>
<?php 
$color = "azul";
switch($color){
    case "":
        echo "Mi color favorito es el rojo";
        break;
    case "azul":
        echo "Mi color favorito es el azul";
        break;
    case "verde":
        echo "Mi color favorito es el verde";
    break;
    default:
    echo "Mi color favorito no està entre esas opciones";        
}

?>
