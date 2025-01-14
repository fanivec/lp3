<section class="content-header">
<ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i>Inicio</a></li>
    <li class="active"><a href="?module=presupuesto">Presupuesto</a></li>
</ol><br><hr>
<h1>
    <i class="fa fa-folder icon-title"></i>Datos de Presupuestos
    <a class="btn btn-primary btn-social pull-right" href="?module=form_presupuesto&form=add" title="Agregar" data-toggle="tooltip">
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
                        <h2>Lista de Presupuestos</h2>
                        <thead>
                            <tr>
                                <th class="center">Id</th>
                                <th class="center">Cliente</th>
                                <th class="center">Fecha</th>
                                <th class="center">Hora</th>
                                <th class="center">Nro. Presupuesto</th>
                                <th class="center">Estado</th>
                                <th class="center">Total</th>
                                <th class="center">Usuario</th>                                
                                <th class="center">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $nro=1;
                            $query = mysqli_query($mysqli, "SELECT * FROM v_presupuesto WHERE estado='activo'")
                            or die('Error'.mysqli_error($mysqli));

                            while($data = mysqli_fetch_assoc($query)){
                               $cod = $data['cod_presupuesto'];
                               $cli_nombre = $data['cli_nombre']." ".$data['cli_apellido'];
                               $fecha = $data['fecha'];
                               $hora = $data['hora'];
                               $nro_presupuesto = $data['nro_presupuesto'];
                               $estado = $data['estado'];
                               $total = $data['total'];
                               $usuario = $data['name_user'];

                               echo "<tr>
                               <td class='center'>$cod</td>
                               <td class='center'>$cli_nombre</td>
                               <td class='center'>$fecha</td>
                               <td class='center'>$hora</td>
                               <td class='center'>$nro_presupuesto</td>
                               <td class='center'>$estado</td>
                               <td class='center'>$total</td> 
                               <td class='center'>$usuario</td>                                
                               <td class='center' width='80'>
                               <div>";?>
                               <a data-toggle="tooltip" data-placement="top" title="Anular Presupuesto" class="btn btn-danger btn-sm"
                                href="modules/presupuesto/proses.php?act=anular&cod_presupuesto=<?php echo $data['cod_presupuesto']; ?>"
                                onclick ="return confirm('Estás seguro/a de anular el presupuesto <?php echo $data['cod_presupuesto']; ?>?');">
                                    <i style="color:#000" class="glyphicon glyphicon-trash"></i>
                                </a>

                                <a data-toggle="tooltip" data-placement="top" title="Imprimir Presupuesto" class="btn btn-warning btn-sm" 
                                href="modules/presupuesto/print.php?act=imprimir&cod_presupuesto=<?php echo $data['cod_presupuesto']; ?>" target="_blank">
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