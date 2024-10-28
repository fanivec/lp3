<h1>Funciones</h1>
<?php 
/*
function nombredelaFuncion(parametros){
    instrucciones de còdigo;
} */


function HolaMundo(){
    echo "Hola mundo desde una funciòn!";
}

HolaMundo();//Llamar a la fuciòn

echo "<h1>Funciones pasandole argumentaciòn</h1>";
function NombreFamiliar($nombre){
    echo "El nombre del familiar es: $nombre <br>";
}
//Utilizar o llamar a la funciòn
NombreFamiliar("Juan");
NombreFamiliar("Maria");
NombreFamiliar("Lucia");

echo "<h1>Funciones pasandole 2 argumentos</h1>";
function NombreAño($vnombre, $año){
    echo "$vnombre su año de nacimiento es: $año<br>";
}
NombreAño("Sonia", "1994");
NombreAño("Sonia", "1995");
NombreAño("Sonia", "1996");

echo "<h1>Funciones de suma de valores</h1>";
function sumaNros(int $nro1, int $nro2){
    return $nro1+$nro2;
}

echo "La suma es: ".sumaNros(10,5);

?>