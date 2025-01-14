<section class="content-header">
<ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i>Inicio</a></li>
    <li class="active"><a href="?module=pedido_venta">Pedido de Ventas</a></li>
</ol><br><hr>
<h1>
    <i class="fa fa-folder icon-title"></i>Datos de Pedidos de Ventas
    <a class="btn btn-primary btn-social pull-right" href="?module=form_pedido_venta&form=add" title="Agregar" data-toggle="tooltip">
        <i class="fa fa-plus"></i>Agregar
    </a>
</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php 
            if(empty($_GET['alert'])){
                echo "";
            }
            elseif($_GET['alert']==1){
                echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-check-circle'></i> Exitoso!</h4>
                Datos registrados correctamente
                </div>";
            }
        
           
            elseif($_GET['alert']==2){
                echo "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-check-circle'></i> Exitoso!</h4>
                Datos anulados correctamente
                </div>";
            }

            elseif($_GET['alert']==3){
                echo "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-check-circle'></i> Error!</h4>
                No se puedo realizar la acción
                </div>";
            }
            ?>

            <div class="box box-primary">
                <div class="box-body">
                <section class="content-header">
                 
                </section>
                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                        <h2>Lista de Pedidos de Ventas</h2>
                        <thead>
                            <tr>
                                <th class="center">Codigo</th>
                                <th class="center">Cliente</th>
                                <th class="center">Fecha</th>
                                <th class="center">Total Venta</th>
                                <th class="center">Estado</th>
                                <th class="center">Hora</th>
                                <th class="center">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $nro=1;
                            $query = mysqli_query($mysqli, "SELECT *FROM vista_pedido_venta")
                            or die('Error'.mysqli_error($mysqli));

                            while($data = mysqli_fetch_assoc($query)){
                               $codigo = $data['cod_pedido_venta'];
                               $id_cliente = $data['id_cliente'];
                               $fecha = $data['fecha'];
                               $total_venta = $data['total_venta'];
                               $estado = $data['estado'];
                               $hora = $data['hora'];
                             


                               echo "<tr>
                               <td class='center'>$codigo</td>
                               <td class='center'>$id_cliente</td>
                               <td class='center'>$fecha</td
                               <td class='center'>$total_venta</td> 
                               <td class='center'>$estado</td> 
                               <td class='center'>$hora</td>                   
                               <td class='center' width='80'>
                               <div>";?>
                               <a data-toggle="tooltip" data-placement="top" title="Anular Pedido de Venta" class="btn btn-danger btn-sm"
                                href="modules/pedido_venta/proses.php?act=anular&cod_pedido_venta=<?php echo $data['cod_pedido_venta']; ?>"
                                onclick ="return confirm('Estás seguro/a de anular la factura <?php echo $data['cod_pedido_venta']; ?>?');">
                                    <i style="color:#000" class="glyphicon glyphicon-trash"></i>S
                                </a>

                                <a data-toggle="tooltip" data-placement="top" title="Imprimir Pedido de Venta" class="btn btn-warning btn-sm" 
                                href="modules/pedido_venta/print.php?act=imprimir&cod_pedido_venta=<?php echo $data['cod_pedido_venta']; ?>" target="_blank">
                                    <i style="color:#000" class="fa fa-print"></i>
                                </a>
                                <?php echo "</div>
                                </td>
                                </tr>" ?>
                            <?php }                               
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>