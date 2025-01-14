<?php
$servername = "localhost";
$username = "root";
$password = "102003";
$dbname = "examen_p";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contacto (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
    if ($conn->query($sql) === TRUE) {
        echo "HOLA QUE TAL";
    
        header("Location: contacto.php?success=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

 
$sql = "SELECT * FROM contacto";
$result = $conn->query($sql);
