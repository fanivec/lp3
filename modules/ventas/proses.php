<?php 
session_start();
require_once '../../config/database.php';

if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=3'>";
    exit();
} else {
    if ($_GET['act'] == 'insert') {
        if (isset($_POST['Guardar'])) {
            $cod_venta = intval($_POST['cod_venta']);
            $cod_deposito = intval($_POST['cod_deposito']);
            $id_cliente = intval($_POST['id_cliente']);
            $fecha = mysqli_real_escape_string($mysqli, $_POST['fecha']);
            $hora = mysqli_real_escape_string($mysqli, $_POST['hora']);
            $nro_factura = mysqli_real_escape_string($mysqli, $_POST['nro_factura']);

            // Iniciar transacción
            mysqli_begin_transaction($mysqli);

            try {
                // Insertar detalle de venta y actualizar stock
                $suma_total = 0;
                $sql = mysqli_query($mysqli, "SELECT * FROM producto, tmp WHERE producto.cod_producto = tmp.id_producto");
                while ($row = mysqli_fetch_array($sql)) {
                    $codigo_producto = intval($row['cod_producto']);
                    $precio = floatval($row['precio_tmp']);
                    $cantidad = intval($row['cantidad_tmp']);
                    $suma_total += $precio * $cantidad;

                    // Insertar detalle de venta
                    mysqli_query($mysqli, "INSERT INTO det_venta (cod_producto, cod_venta, det_precio_unit, det_cantidad) 
                        VALUES ('$codigo_producto', '$cod_venta', '$precio', '$cantidad')")
                        or throw new Exception(mysqli_error($mysqli));

                    // Actualizar stock
                    $query = mysqli_query($mysqli, "SELECT * FROM stock WHERE cod_producto = $codigo_producto AND cod_deposito = $cod_deposito");
                    if (mysqli_num_rows($query) == 0) {
                        // Insertar nuevo stock
                        mysqli_query($mysqli, "INSERT INTO stock (cod_deposito, cod_producto, cantidad) 
                            VALUES ('$cod_deposito', '$codigo_producto', -'$cantidad')")
                            or throw new Exception(mysqli_error($mysqli));
                    } else {
                        // Actualizar stock existente
                        mysqli_query($mysqli, "UPDATE stock SET cantidad = cantidad - $cantidad 
                            WHERE cod_producto = $codigo_producto AND cod_deposito = $cod_deposito")
                            or throw new Exception(mysqli_error($mysqli));
                    }
                }

                // Insertar cabecera de venta
                mysqli_query($mysqli, "INSERT INTO venta (cod_venta, id_cliente, fecha, estado, total_venta, hora, nro_factura) 
                    VALUES ('$cod_venta', '$id_cliente', '$fecha', 'activo', '$suma_total', '$hora', '$nro_factura')")
                    or throw new Exception(mysqli_error($mysqli));

                // Confirmar transacción
                mysqli_commit($mysqli);
                header("Location: ../../main.php?module=ventas&alert=1");
            } catch (Exception $e) {
                // Revertir transacción en caso de error
                mysqli_rollback($mysqli);
                header("Location: ../../main.php?module=ventas&alert=3&error=" . urlencode($e->getMessage()));
            }
        }
    } elseif ($_GET['act'] == 'anular') {
        if (isset($_GET['cod_venta'])) {
            $cod_venta = intval($_GET['cod_venta']);

            // Iniciar transacción
            mysqli_begin_transaction($mysqli);

            try {
                // Anular cabecera de venta
                mysqli_query($mysqli, "UPDATE venta SET estado = 'anulado' WHERE cod_venta = $cod_venta")
                    or throw new Exception(mysqli_error($mysqli));

                // Actualizar stock para cada detalle de la venta
                $sql = mysqli_query($mysqli, "SELECT * FROM det_venta WHERE cod_venta = $cod_venta");
                while ($row = mysqli_fetch_array($sql)) {
                    $codigo_producto = intval($row['cod_producto']);
                    $cod_deposito = intval($row['cod_deposito']);
                    $cantidad = intval($row['det_cantidad']);

                    mysqli_query($mysqli, "UPDATE stock SET cantidad = cantidad + $cantidad 
                        WHERE cod_producto = $codigo_producto AND cod_deposito = $cod_deposito")
                        or throw new Exception(mysqli_error($mysqli));
                }

                // Confirmar transacción
                mysqli_commit($mysqli);
                header("Location: ../../main.php?module=ventas&alert=2");
            } catch (Exception $e) {
                // Revertir transacción en caso de error
                mysqli_rollback($mysqli);
                header("Location: ../../main.php?module=ventas&alert=3&error=" . urlencode($e->getMessage()));
            }
        }
    }
}
?>
