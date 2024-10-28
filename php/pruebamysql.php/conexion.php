<?php
/*Conexion php con mysql*/
//Establecer variables del servidor de bd
$vhost = 'localhost';
$vuser = 'root';
$vpass = '102003';
$vbd = 'examen_p';
$conexion = mysqli_connect($vhost, $vuser, $vpass, $vbd,);

if(mysqli_connect_errno()){
    echo "La conexiòn a la base de datos no se pudo establecer".mysqli_connect_errno();
}else{
    echo "La conexiòn a $vbd fue exitosa";
}

?>