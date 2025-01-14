<?php
    if($_GET['form']=='add'){ ?>
       <section class="content-header">
        <h1>
            <i class="fa fa-edit icon-title">Agregar Unidad de Medida</i>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?modules=start"><i class="fa fa-home"></i>Inicio</a></li>
            <li><a href="?modules=u_medida">Unidad de $id_u_medida</a></li>
            <li class="active">Màs</li>
        </ol>
        </section>

        <section class="content">
        <div class="row">
            <div class="col-md-12">
                    <div class="box box-primary">
                        <form role="form" class="form-horizontal" action="modules/u_medida/proses.php?act=insert" method="POST">
                            <div class="box-body">
                                <?php 
                                //Mètodo para generar còdigo
                                    $query_id = mysqli_query($mysqli, "SELECT MAX(id_u_medida) as id FROM u_medida")
                                                            or die('Error'.mysqli_error($mysqli));

                                    $count = mysqli_num_rows($query_id);
                                    if($count <> 0){
                                        $data_id = mysqli_fetch_assoc($query_id);
                                        $codigo = $data_id['id']+1;
                                    }else{
                                        $codigo=1;
                                    }
                                ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Còdigo</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Descripciòn</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="u_descrip" pleceholder="Ingresa un deposito" required>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                                            <a href="?module=u_medida" class="btn btn-default btn-reset">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>  
                    </div>
            </div>
        </div>
        </section>
    <?php }
    elseif($_GET['form']=='edit'){
        if(isset($_GET['id'])){
            $query = mysqli_query($mysqli, "SELECT * FROM u_medida WHERE id_u_medida = '$_GET[id]'")
                                                    or die('Error'.mysqli_error($mysqli));
            $data = mysqli_fetch_assoc($query);                                       
        } ?>
        <section class="content-header">
        <h1>
            <i class="fa fa-edit icon-title">Modificar Unidad de Medida</i>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?modules=start"><i class="fa fa-home"></i>Inicio</a></li>
            <li><a href="?modules=u_medida">Unidad de Medida</a></li>
            <li class="active">Modificar</li>
        </ol>
        </section>

        <section class="content">
        <div class="row">
            <div class="col-md-12">
                    <div class="box box-primary">
                        <form role="form" class="form-horizontal" action="modules/u_medida/proses.php?act=update" method="POST">
                            <div class="box-body">
                              
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Còdigo</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="codigo" value="<?php echo $data['id_u_medida']; ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Descripciòn</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="u_descrip"  value="<?php echo $data['u_descrip']; ?>" required>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                                            <a href="?module=u_medida" class="btn btn-default btn-reset">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>  
                    </div>
            </div>
        </div>
        </section>
    <?php }
?>