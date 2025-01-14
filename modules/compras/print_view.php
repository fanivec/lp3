<?php 
    require_once "../../config/database.php";
    if($_GET['act']=='imprimir'){
        if(isset($_GET['cod_compra'])){
            $codigo = $_GET['cod_compra'];
            //Cabecera de compra
            $cabecera_compra = mysqli_query($mysqli, "SELECT * FROM v_compra WHERE cod_compra = $codigo")
                                                    or die('Error'.mysqli_error($mysqli));
                                                    while($data = mysqli_fetch_assoc($cabecera_compra)){
                                                        $cod = $data['cod_compra'];
                                                        $proveedor = $data['razon_social'];
                                                        $deposito = $data['descrip'];
                                                        $nro_factura = $data['nro_factura'];
                                                        $fecha = $data['fecha'];
                                                        $hora = $data['hora'];
                                                        $total_compra = $data['total_compra'];
                                                        $usuario = $data['name_user'];}
            //Detalle de compra
            $detalle_compra = mysqli_query($mysqli, "SELECT * FROM v_det_compra WHERE cod_compra =$codigo ")
                                                        or die('Error'.mysqli_error($mysqli));

        }
    }
?> 
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> Factura de Compra</title>
    </head>
    <body>
        <div align='center'>
            Registro de Factura de Compra<br>
            <label><strong>Proveedor:</strong><?php echo $proveedor; ?></label><br>
            <label><strong>Depósito:</strong><?php echo $deposito; ?></label><br>
            <label><strong>N° de Factura de Compra:</strong><?php echo $nro_factura; ?></label><br>
            <label><strong>Fecha:</strong><?php echo $fecha; ?></label><br>
            <label><strong>Hora:</strong><?php echo $hora; ?></label><br>
            <label><strong>Usuario:</strong><?php echo $usuario; ?></label>
        </div>
        <hr>
            <div>
                <table width="100%" border="0.3" cellpadding="0" cellspacing="0" align="center">
                    <thead style="background:#e8ecee">
                        <tr class="tabla-title">
                            <th height="20" align="center" valign="middle"><small>Tipo de Producto</small></th>
                            <th height="20" align="center" valign="middle"><small>Producto</small></th>
                            <th height="20" align="center" valign="middle"><small>Precio</small></th>
                            <th height="20" align="center" valign="middle"><small>Cantidad</small></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            while ($data2 = mysqli_fetch_assoc($detalle_compra)){
                                $t_p_descrip = $data2['t_p_descrip'];
                                $p_descrip = $data2['p_descrip'];
                                $precio = $data2['precio'];
                                $cantidad = $data2['cantidad'];

                                echo "<tr>
                                        <td width='100' align='center'>$t_p_descrip</td>
                                        <td width='80' align='center'>$p_descrip</td>
                                        <td width='80' align='center'>$precio</td>
                                        <td width='80' align='center'>$cantidad</td>
                                      </tr> ";
                            }                        
                            ?>
                    </tbody>
                </table>         
            </div>
            <hr>
            <div align='center'>
             <label> <strong>El total de la compra es: Gs. <?php echo number_format($total_compra); ?></strong></label> 
            </div>
    </body>
</html>
