<!DOCTYPE html>
<html lang="en">
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
        .form-container {
            width: 80%;
            max-width: 800px;
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
            margin-top: 20px; /* Espacio entre botones */
        }
        input[type="submit"]:hover, .nav-button:hover {
            background-color: darkgreen;
            
            
        }
        .nav-button {
            text-decoration: none;
            text-align: center;
            margin-bottom: 10px;
            
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Contactos</h2>
        <form action="conexion.php" method="post" onsubmit="return validateForm()">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <form action="conexion.php" method="post" onsubmit="return validateForm()">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
            <input type="submit" value="Enviar">
            <a href="http://localhost/lp3/examen/" class="nav-button">Volver a inicio</a>
        </form>
        
    </div>
    <script>
        function validateForm() {
            const nombre = document.getElementById("nombre").value;
            const mensaje = document.getElementById("mensaje").value;

            // Validación del campo nombre
            const nombreRegex = /^[a-zA-Z\s]+$/;
            if (!nombreRegex.test(nombre)) {
                alert("El nombre no debe contener números ni caracteres especiales.");
                return false;
            }
            

            // Validación de campos vacíos (HTML ya se encarga de esto con 'required')
            if (!nombre || !mensaje) {
                alert("Por favor, completa todos los campos.");
                return false;
            }
            //Lo que hice aca fue agregar una etiqueta script, que es la etiqueta para poder
            //crear codigo de javascript dentro del html luego, y dps copie y pegue lo que hiciste
            //y eso le llame nomas en el formulario aca "onsubmit" onsubmit lo que hace es que al enviar 
            //se activa esas valdaciones, vos tocas el boton de enviar y se activa eso, por eso se llama onsubmit
            //en ingles significa "al enviar" o "al aceptar"
            return true;
        }

    </script>
</body>
</html>
