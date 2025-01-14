<?php 
    require_once "../../config/database.php";
    if($_GET['act']=='imprimir'){
        if(isset($_GET['cod_pedido_compra'])){
            $codigo = $_GET['cod_pedido_compra'];
            //Cabecera de Pedido de Compra
            $cabecera_compra = mysqli_query($mysqli, "SELECT * FROM vista_pedido_compra WHERE cod_pedido_compra = $codigo")
                                                    or die('Error'.mysqli_error($mysqli));
                                                    while($data = mysqli_fetch_assoc($cabecera_compra)){
                                                        $codigo = $data['cod_pedido_compra'];
                                                        $deposito = $data['descrip'];
                                                        $nro_factura = $data['nro_factura'];
                                                        $fecha = $data['fecha'];
                                                        $hora = $data['hora'];
                                                        $estado = $data['estado'];
                                                        $usuario = $data['name_user'];}
            //Detalle de compra
            $detalle_pedido_compra = mysqli_query($mysqli, "SELECT * FROM v_d_pedido_compra WHERE cod_pedido_compra =$codigo ")
                                                        or die('Error'.mysqli_error($mysqli));

        }
    }
?> 
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> Remision de Pedido de Compra</title>
    </head>
    <body>
        <div align='center'>
            Remisiom de Pedido de Compra<br>
            <label><strong>Pedido Nro.: </strong><?php echo $codigo; ?></label><br>
            <label><strong>Depósito:</strong><?php echo $deposito; ?></label><br>
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
                            <th height="20" align="center" valign="middle"><small>Cantidad</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while ($data2 = mysqli_fetch_assoc($detalle_pedido_compra)){
                                $t_p_descrip = $data2['t_p_descrip'];
                                $p_descrip = $data2['p_descrip'];
                                $cantidad = $data2['cantidad'];

                                echo "<tr>
                                        <td width='100' align='center'>$t_p_descrip</td>
                                        <td width='100' align='center'>$p_descrip</td>
                                        <td width='100' align='center'>$cantidad</td>
                                        
                                      </tr> ";
                            }                        
                            ?>
                    </tbody>
                </table>         
            </div>
    </body>
</html>
