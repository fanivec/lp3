<?php
require_once "../../config/database.php";

if (isset($_GET['act']) && $_GET['act'] == 'imprimir') {
    if (isset($_GET['cod_venta'])) {
        $codigo = $_GET['cod_venta'];

        //Cabecera de compra
        $cabecera_presupuesto = mysqli_query($mysqli, "SELECT * FROM v_ventas WHERE cod_venta = $codigo");
        if (!$cabecera_presupuesto) {
            die('Error: ' . mysqli_error($mysqli));
        }

        if ($data = mysqli_fetch_assoc($cabecera_presupuesto)) {
            $codigo = $data['cod_venta'];
            $cli_nombre = $data['cli_nombre'] . " " . $data['cli_apellido'];
            $nro_factura = $data['nro_factura'];
            $fecha = $data['fecha'];
            $hora = $data['hora'];
            $total_venta = $data['total_venta'];
            
            //Detalle de Venta
            $detalle_presupuesto = mysqli_query($mysqli, "SELECT * FROM v_detalle_venta WHERE cod_venta = $codigo");
            if (!$detalle_presupuesto) {
                die('Error: ' . mysqli_error($mysqli));
            }
        }
    }
}
?>
<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Factura de Venta</title>
</head>

<body>
    <div align='center'>
        <h1>Factura de Venta</h1>
        <label><strong>Cliente:</strong><?php echo $cli_nombre ?? ''; ?></label><br>
        <label><strong>N° de Factura:</strong><?php echo $nro_factura ?? ''; ?></label><br>
        <label><strong>Fecha:</strong><?php echo $fecha ?? ''; ?></label><br>
        <label><strong>Hora:</strong><?php echo $hora ?? ''; ?></label><br>
    </div>
    <hr>
    <div>
        <table width="100%" border="1" cellpadding="5" cellspacing="0" align="center">
            <thead style="background:#e8ecee">
                <tr class="tabla-title">
                    <th height="20" align="center" valign="middle"><small>Repuesto</small></th>
                    <th height="20" align="center" valign="middle"><small>Deposito</small></th>
                    <th height="20" align="center" valign="middle"><small>Precio</small></th>
                    <th height="20" align="center" valign="middle"><small>Cantidad</small></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($detalle_presupuesto)) {
                    while ($data2 = mysqli_fetch_assoc($detalle_presupuesto)) {
                        $p_descrip = $data2['p_descrip'];
                        $descrip = $data2['descrip'];
                        $precio = $data2['precio'];
                        $cantidad = $data2['cantidad'];

                        echo "<tr>
                                <td width='100' align='center'>$p_descrip</td>
                                <td width='100' align='center'>$descrip</td>
                                <td width='100' align='center'>$precio</td>
                                <td width='100' align='center'>$cantidad</td>
                                
                              </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <hr>
    <div align='center'>
        <label><strong>El Total es: Gs. <?php echo isset($total_venta) ? number_format($total_venta) : ''; ?></strong></label>
    </div>
</body>

</html>
