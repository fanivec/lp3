<?php 
include 'conexion.php';
if(isset($_POST['Insertar'])){
if(isset($_POST['nombre']) && isset($_POST['apellido'])){
$existe=true;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
}else{
    $existe = false;
    echo 'No existe el nombre o el apellido';


} 
     if($existe){
        $query = mysqli_query($conexion, "INSERT INTO contacto (id, nombre, mensaje)
        VALUES(1, '$nombre', '$mensaje')")
        or die('error'.mysqli_error($conexion));
         
        if($query){
            echo "La inserciòn de datos fue exitosa!";?>
            <meta http-equiv="refresh" content="5, http://localhost/lp3/examen/contacto.php"> 
            <?php }else{
                echo 'Problemas para insertar';
            }
        }
     }   
     elseif(isset($_POST['EnviarEditar'])){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $mensaje=$_POST['mensaje'];

        $query = mysqli_query($conexion,"UPDATE persona SET nombre='$nombre',
        mensaje='$mensaje' WHERE id=$id")
        or die('error'.mysqli_error($conexion));
        if($query){
            echo"La modificaciòn fue exitosa";?>
            <meta http-equiv="refresh" content="5, http://localhost/lp3/examen/contacto.php"> 

       <?php } else{
        echo "No se pudo realizar la modificacion";
       }
     }
     elseif(isset($_POST['EnviarBorrar'])){
        $id = $_POST['id'];
        $query = mysqli_query($conexion, "DELETE FROM persona WHERE id=$id")
        or die('error'.mysqli_query($conexion));
        if($query){
            echo 'Se eliminò correctamente!!';?>
            <meta http-equiv="refresh" content="5, http://localhost/lp3/examen/contacto.php"> 
           <?php }elese{
            echo 'Problemas para eliminar!';
        }
     }





?>