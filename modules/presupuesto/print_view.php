<?php
require_once "../../config/database.php";

if (isset($_GET['act']) && $_GET['act'] == 'imprimir') {
    if (isset($_GET['cod_presupuesto'])) {
        $codigo = $_GET['cod_presupuesto'];

        //Cabecera de compra
        $cabecera_presupuesto = mysqli_query($mysqli, "SELECT * FROM v_presupuesto WHERE cod_presupuesto = $codigo");
        if (!$cabecera_presupuesto) {
            die('Error: ' . mysqli_error($mysqli));
        }

        if ($data = mysqli_fetch_assoc($cabecera_presupuesto)) {
            $cli_nombre = $data['cli_nombre'] . " " . $data['cli_apellido'];
            $deposito = $data['descrip'];
            $nro_presupuesto = $data['nro_presupuesto'];
            $fecha = $data['fecha'];
            $hora = $data['hora'];
            $total = $data['total'];
            $usuario = $data['name_user'];

            //Detalle de Presupuesto
            $detalle_presupuesto = mysqli_query($mysqli, "SELECT * FROM v_detalle_presupuesto WHERE cod_presupuesto = $codigo");
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
    <title>Reporte de Presupuesto</title>
</head>

<body>
    <div align='center'>
        <h1>Reporte de Presupuesto</h1>
        <label><strong>Cliente:</strong><?php echo $cli_nombre ?? ''; ?></label><br>
        <label><strong>Depósito:</strong><?php echo $cli_nombre ?? ''; ?></label><br>
        <label><strong>N° de Factura:</strong><?php echo $cli_nombre ?? ''; ?></label><br>
        <label><strong>Fecha:</strong><?php echo $fecha ?? ''; ?></label><br>
        <label><strong>Hora:</strong><?php echo $hora ?? ''; ?></label><br>
        <label><strong>Usuario:</strong><?php echo $usuario ?? ''; ?></label>
    </div>
    <hr>
    <div>
        <table width="100%" border="1" cellpadding="5" cellspacing="0" align="center">
            <thead style="background:#e8ecee">
                <tr class="tabla-title">
                    <th height="20" align="center" valign="middle"><small>Repuesto</small></th>
                    <th height="20" align="center" valign="middle"><small>Precio</small></th>
                    <th height="20" align="center" valign="middle"><small>Cantidad</small></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($detalle_presupuesto)) {
                    while ($data2 = mysqli_fetch_assoc($detalle_presupuesto)) {
                        $p_descrip = $data2['p_descrip'];
                        $precio = $data2['precio'];
                        $cantidad = $data2['cantidad'];

                        echo "<tr>
                                <td width='100' align='center'>$p_descrip</td>
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
        <label><strong>El Total del Presupuesto es: Gs. <?php echo isset($total) ? number_format($total) : ''; ?></strong></label>
    </div>
</body>

</html>
