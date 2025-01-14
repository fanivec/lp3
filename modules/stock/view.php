<section class="content-header">
<ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i>Inicio</a></li>
    <li class="active"><a href="?module=stock">Stock</a></li>
</ol><br><hr>
<h1>
    <i class="fa fa-folder icon-title"></i>Stock de Productos
</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

        
            <div class="box box-primary">
                <div class="box-body">

                    <form role="form" class="form-horizontal" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Depósito</label>
                                <div class="col-sm-3">
                                    <select class="chosen-select" name="codigo_deposito" data-placeholder="-- Seleccionar  Depósito --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                        <?php 
                                            $query_dep = mysqli_query($mysqli, "SELECT cod_deposito, descrip
                                            FROM deposito
                                            ORDER BY cod_deposito ASC") or die ('Error'.mysqli_error($mysqli));
                                            while ($data_dep = mysqli_fetch_assoc($query_dep)){
                                                echo "<option value=\"$data_dep[cod_deposito]\">$data_dep[cod_deposito] | $data_dep[descrip]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary btn-social btn-submit" style="width:200px">
                                        <i class="fa fa-file-text-o icon-title"></i>Buscar Deposito
                                    </button>
                                </div>
                            </div>
                    </form>

                <section class="content-header">
                 
                </section>
                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                        <?php 
                        if(!empty($_POST['codigo_deposito'])){
                            $cod_deposito = $_POST['codigo_deposito'];
                        }else {
                            $cod_deposito=1;
                        }
                        
                        $query = mysqli_query($mysqli, "SELECT *FROM v_stock WHERE cod_deposito=$cod_deposito;")
                        or die('Error'.mysqli_error($mysqli));

                        while($data = mysqli_fetch_assoc($query)){
                            $dep_descrip=$data['descrip'];
                        }                   
                        ?>                    
                        <h2>Stock de Productos: <?php echo $dep_descrip;?> </h2>
                        <thead>
                            <tr>
                                <th class="center">Deposito</th>
                                <th class="center">Tipo Producto</th>
                                <th class="center">Producto</th>
                                <th class="center">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $nro=1;
                            $query = mysqli_query($mysqli, "SELECT *FROM v_stock WHERE cod_deposito=$cod_deposito;")
                            or die('Error'.mysqli_error($mysqli));

                            while($data = mysqli_fetch_assoc($query)){
                               $cod_producto=$data['cod_producto'];
                               $p_descrip=$data['p_descrip'];
                               $cod_deposito=$data['cod_deposito'];
                               $dep_descrip=$data['descrip'];
                               $t_p_descrip=$data['t_p_descrip'];
                               $catidad=$data['cantidad'];


                               echo "<tr>
                               <td class='center'>$dep_descrip</td>
                               <td class='center'>$t_p_descrip</td>
                               <td class='center'> $p_descrip</td>
                               <td class='center'>$catidad</td>
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