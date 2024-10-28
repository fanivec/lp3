<?php
$servername = "localhost"; 
$username = "root";
$password = "102003";
$dbname = "examen_p";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM contacto WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: contacto.php");
} else {
    echo "Error al eliminar: " . $conn->error;
}

$conn->close();
?>

