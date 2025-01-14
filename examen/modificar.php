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
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];

    $sql = "UPDATE contacto SET nombre='$nombre', mensaje='$mensaje' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: contacto.php");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM contacto WHERE id=$id");
    $row = $result->fetch_assoc();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Mensaje</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: radial-gradient(circle, green, black);
            color: white;
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 80%;
            max-width: 600px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        input[type="submit"], .nav-button {
            width: 100%;
            padding: 10px;
            background-color: green;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover, .nav-button:hover {
            background-color: darkgreen;
        }
        .nav-button {
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Modificar Mensaje</h2>
    
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br><br>
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" required><?php echo $row['mensaje']; ?></textarea><br><br>
        <input type="submit" value="Actualizar">
    </form>
    </div>
</body>
</html>
