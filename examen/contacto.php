<?php

include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
        .container {
            width: 80%;
            max-width: 1200px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .messages-container {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #fff;
            text-align: left;
        }
        th {
            background-color: rgba(255, 255, 255, 0.2);
        }
        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }
        a {
            color: lightblue;
            text-decoration: none;
            margin: 0 5px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>

    </style>
</head>
<body>
    <div class="container">
        

        <div class="messages-container">
            <h2>Lista</h2>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Mensaje</th>
                    <th>Acciones</th>
                </tr>
                <a href="http://localhost/lp3/examen/enviarmensaje.php" class="nav-button">Volver a Contactos</a><br>
                <a href="http://localhost/lp3/examen/" class="nav-button">Volver a inicio</a>
                <?php
                // Mostrar mensajes obtenidos de la base de datos
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nombre']}</td>
                                <td>{$row['mensaje']}</td>
                                <td>
                                    <a href='modificar.php?id={$row['id']}'>Modificar</a>
                                    <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay mensajes.</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </div>
</body>
</html>
