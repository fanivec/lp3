<?php
session_start();
require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=alert=3'>";
} else {
    if ($_GET['act'] == 'insert') {
        if (isset($_POST['Guardar'])) {
            $codigo = $_POST['codigo'];
            $razon_social = $_POST['razon_social'];
            $ruc = $_POST['ruc'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];

            // Sentencia preparada para evitar inyección SQL
            $query = mysqli_prepare($mysqli, "INSERT INTO proveedor (cod_proveedor, razon_social, ruc, direccion, telefono)
                                                VALUES (?, ?, ?, ?, ?)");

            mysqli_stmt_bind_param($query, "issss", $codigo, $razon_social, $ruc, $direccion, $telefono);
            mysqli_stmt_execute($query);

            if ($query) {
                header("Location: ../../main.php?module=proveedor&alert=1");
            } else {
                header("Location: ../../main.php?module=proveedor&alert=4");
            }
        }
    } elseif ($_GET['act'] == 'update') {
        if (isset($_POST['Guardar'])) {
            $codigo = $_POST['codigo'];
            $razon_social = $_POST['razon_social'];
            $ruc = $_POST['ruc'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];

            // Validar que $codigo esté definido
            if (!isset($codigo)) {
                die("Error: El código no está definido.");
            }

            // Sentencia preparada para evitar inyección SQL
            $query = mysqli_prepare($mysqli, "UPDATE proveedor SET razon_social = ?, ruc = ?, direccion = ?, telefono = ? WHERE cod_proveedor = ?");

            mysqli_stmt_bind_param($query, "ssssi", $razon_social, $ruc, $direccion, $telefono, $codigo);
            mysqli_stmt_execute($query);

            if ($query) {
                header("Location: ../../main.php?module=proveedor&alert=2");
            } else {
                header("Location: ../../main.php?module=proveedor&alert=4");
            }
        }
    } elseif ($_GET['act'] == 'delete') {
        if (isset($_GET['cod_proveedor'])) {
            $codigo = $_GET['cod_proveedor'];

            // Sentencia preparada para evitar inyección SQL
            $query = mysqli_prepare($mysqli, "DELETE FROM proveedor WHERE cod_proveedor = ?");

            mysqli_stmt_bind_param($query, "i", $codigo);
            mysqli_stmt_execute($query);

            if ($query) {
                header("Location: ../../main.php?module=proveedor&alert=3");
            } else {
                header("Location: ../../main.php?module=proveedor&alert=4");
            }
        }
    }
}
?>
