<?php
if ($_SESSION['permisos_acceso'] == 'Super Admin') { ?>

    <section class="content-header">
        <h1>
            <i class="fa fa-home icon-title"></i>Inicio
        </h1>
        <ol class="breadcrumb">
            <li><a href="?module=start"><i class="fa fa-home"></i></a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p style="font-size:15px">
                        <i class="icon fa fa-user"></i>Bienvenido/a <strong><?php echo $_SESSION['name_user']; ?> </strong>
                        a la aplicación: <strong>SysWeb</strong>
                    </p>
                </div>
            </div>
        </div>

        <h2 align=center>Fomularios de Movimientos</h2>
        <!--Fila principal de los bloques-->
        <div class="row">
            <!-- Bloque 1 Compras-->
            <div class="col-lg-4 col-xs-6">
                <div style="background-color:#00c0ef; color:#fff" class="small-box">
                    <div class="inner">
                        <p><strong>Compras</strong>
                        <ul>
                            <li>Registrar</li>
                            <li>Compras</li>
                            <li>de Repuestos</li>
                        </ul>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <a href="?module=compras" class="small-box-footer" title="Registrar Compras" data-toggle="tooltip">
                        <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!-- FIN Bloque 1 Compras-->


            <!-- Bloque 1 Pedido de Compras-->
            <div class="col-lg-4 col-xs-6">
                <div style="background-color:#00c0ef; color:#fff" class="small-box">
                    <div class="inner">
                        <p><strong>Pedido de Compras</strong>
                        <ul>
                            <li>Realizar</li>
                            <li>Pedido de</li>
                            <li>Compra de Repuestos</li>
                        </ul>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cart-arrow-down"></i>
                    </div>
                    <a href="?module=pedido_compra" class="small-box-footer" title="Registrar Compras" data-toggle="tooltip">
                        <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!-- FIN Bloque 1 Pedido de Compras-->


            <!-- Bloque 1 Pedido de Presupuesto-->
            <div class="col-lg-4 col-xs-6">
                <div style="background-color:#ff9308; color:#fff" class="small-box">
                    <div class="inner">
                        <p><strong>Pedido de Presupuesto</strong>
                        <ul>
                            <li>Realizar</li>
                            <li>Pedido</li>
                            <li>de Presupuesto</li>
                        </ul>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pencil-square-o"></i>
                    </div>
                    <a href="?module=presupuesto" class="small-box-footer" title="Registrar Presupuesto" data-toggle="tooltip">
                        <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!-- FIN Bloque 1 Pedido de Presupuesto-->


            <!-- Bloque 2 Ventas-->
            <div class="col-lg-4 col-xs-6">
                <div style="background-color:#00a65a; color:#fff" class="small-box">
                    <div class="inner">
                        <p><strong>Ventas</strong>
                        <ul>
                            <li>Registrar</li>
                            <li>las Ventas</li>
                            <li>de los Repuestos</li>
                        </ul>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cart-plus"></i>
                    </div>
                    <a href="?module=ventas" class="small-box-footer" title="Registrar Ventas" data-toggle="tooltip">
                        <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!--FIN Bloque 2 Ventas-->

            <!-- Bloque 2 Pedido de Ventas-->
            <div class="col-lg-4 col-xs-6">
                <div style="background-color:#00a65a; color:#fff" class="small-box">
                    <div class="inner">
                        <p><strong>Pedido de Ventas</strong>
                        <ul>
                            <li>Realizar</li>
                            <li>Pedido de</li>
                            <li>Ventas de Repuestos</li>
                        </ul>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-clipboard"></i>
                    </div>
                    <a href="?module=pedido_venta" class="small-box-footer" title="Registrar Pedido de Ventas" data-toggle="tooltip">
                        <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!--FIN Bloque 2 Pedido de Ventas-->

            <!--Bloque 3 Stock-->
            <div class="col-lg-4 col-xs-6">
                <div style="background-color:#CC0000; color:#fff" class="small-box">
                    <div class="inner">
                        <p><strong>Stock de Productos</strong>
                        <ul>
                            <li>Visualizar</li>
                            <li>el Stock </li>
                            <li>de las Repuestos</li>
                        </ul>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <a href="?module=stock" class="small-box-footer" title="Ver Stock de productos" data-toggle="tooltip">
                        <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!-- FIN Bloque 3 Stock-->

            <div class="col-xl-4 col-lg-5">
                <div class="card no-shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                </div>
            </div>

        </div>
    </section>
<?php  } elseif ($_SESSION['permisos_acceso'] == 'Compras') { ?>
    <section class="content-header">
        <h1>
            <i class="fa fa-home icon-title"></i>Inicio
        </h1>
        <ol class="breadcrumb">
            <li><a href="?module=start"><i class="fa fa-home"></i></a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p style="font-size:15px">
                        <i class="icon fa fa-user"></i>Bienvenido/a <strong><?php echo $_SESSION['name_user']; ?> </strong>
                        a la aplicación: <strong>Control Z</strong>
                    </p>
                </div>
            </div>
        </div>

        <h2>Fomularios de Movimientos</h2>
        <!--Fila principal de los bloques-->
        <div class="row">
            <!-- Bloque 1 Compras-->
            <div class="col-lg-4 col-xs-6">
                <div style="background-color:#00c0ef; color:#fff" class="small-box">
                    <div class="inner">
                        <p><strong>Compras</strong>
                        <ul>
                            <li>Registrar</li>
                            <li>Compras</li>
                            <li>de Repuestos</li>
                        </ul>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <a href="?module=compras" class="small-box-footer" title="Registrar Compras" data-toggle="tooltip">
                        <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!-- FIN Bloque 1 Compras-->

            <div class="row">
                <!-- Bloque 1 COmpras-->
                <div class="col-lg-4 col-xs-6">
                    <div style="background-color:#00c0ef; color:#fff" class="small-box">
                        <div class="inner">
                            <p><strong>Pedido de Compras</strong>
                            <ul>
                                <li>Realizar</li>
                                <li>Pedido de</li>
                                <li>Compra de Repuestos</li>
                            </ul>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <a href="?module=pedido_compra" class="small-box-footer" title="Registrar Compras" data-toggle="tooltip">
                            <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <!-- FIN Bloque 1 Compras-->

                <!-- Bloque 1 Pedido de Presupuesto-->
                <div class="col-lg-4 col-xs-6">
                    <div style="background-color:#00a65a; color:#fff" class="small-box">
                        <div class="inner">
                            <p><strong>Pedido de Presupuesto</strong>
                            <ul>
                                <li>Realizar</li>
                                <li>Pedido</li>
                                <li>de Presupuesto</li>
                            </ul>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <a href="?module=presupuesto" class="small-box-footer" title="Registrar Presupuesto" data-toggle="tooltip">
                            <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <!-- FIN Bloque 1 Pedido de Presupuesto-->

                <!--Bloque 3 Stock-->
                <div class="col-lg-4 col-xs-6">
                    <div style="background-color:#f39c12; color:#fff" class="small-box">
                        <div class="inner">
                            <p><strong>Stock de productos</strong>
                            <ul>
                                <li>Visualizar</li>
                                <li> Stock </li>
                                <li> de Piezas</li>
                            </ul>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <a href="?module=stock" class="small-box-footer" title="Ver Stock de productos" data-toggle="tooltip">
                            <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <!-- FIN Bloque 3 Stock-->

                <div class="col-xl-4 col-lg-5">
                    <div class="card no-shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                    </div>
                </div>

            </div>
    </section>
<?php } elseif ($_SESSION['permisos_acceso'] == 'Ventas') { ?>
    <section class="content-header">
        <h1>
            <i class="fa fa-home icon-title"></i>Inicio
        </h1>
        <ol class="breadcrumb">
            <li><a href="?module=start"><i class="fa fa-home"></i></a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p style="font-size:15px">
                        <i class="icon fa fa-user"></i>Bienvenido/a <strong><?php echo $_SESSION['name_user']; ?> </strong>
                        a la aplicación: <strong>SysWeb</strong>
                    </p>
                </div>
            </div>
        </div>

        <h2>Fomulario de movimiento</h2>
        <!--Fila principal de los bloques-->
        <div class="row">
            <!-- Bloque 1 COmpras-->
            <div class="col-lg-4 col-xs-6">
                <div style="background-color:#00c0ef; color:#fff" class="small-box">
                    <div class="inner">
                        <p><strong>Ventas</strong>
                        <ul>
                            <li>Rigistrar</li>
                            <li>la Venta</li>
                            <li>de los Repuestos</li>
                        </ul>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cart-arrow-down"></i>
                    </div>
                    <a href="?module=ventas" class="small-box-footer" title="Registrar Compras" data-toggle="tooltip">
                        <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!-- FIN Bloque 1 COmpras-->

            <div class="row">
                <!-- Bloque 1 COmpras-->
                <div class="col-lg-4 col-xs-6">
                    <div style="background-color:#00c0ef; color:#fff" class="small-box">
                        <div class="inner">
                            <p><strong>Pedido de Ventas</strong>
                            <ul>
                                <li>Registrar</li>
                                <li>Pedido de Venta</li>
                                <li>de Repuestos</li>
                            </ul>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cart-arrow-down"></i>
                        </div>
                        <a href="?module=pedido_venta" class="small-box-footer" title="Registrar Compras" data-toggle="tooltip">
                            <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <!-- FIN Bloque 1 COmpras-->

                <!-- Bloque 1 Pedido de Presupuesto-->
                <div class="col-lg-4 col-xs-6">
                    <div style="background-color:#00a65a; color:#fff" class="small-box">
                        <div class="inner">
                            <p><strong>Pedido de Presupuesto</strong>
                            <ul>
                                <li>Realizar</li>
                                <li>Pedido</li>
                                <li>de Presupuesto</li>
                            </ul>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <a href="?module=presupuesto" class="small-box-footer" title="Registrar Presupuesto" data-toggle="tooltip">
                            <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <!-- FIN Bloque 1 Pedido de Presupuesto-->

                <!--Bloque 3 Stock-->
                <div class="col-lg-4 col-xs-6">
                    <div style="background-color:#f39c12; color:#fff" class="small-box">
                        <div class="inner">
                            <p><strong>Stock de productos</strong>
                            <ul>
                                <li>Visualizar</li>
                                <li> Stock </li>
                                <li> de Materiales</li>
                            </ul>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-area-chart"></i>
                        </div>
                        <a href="?module=stock" class="small-box-footer" title="Ver Stock de productos" data-toggle="tooltip">
                            <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <!-- FIN Bloque 3 Stock-->

                <div class="col-xl-4 col-lg-5">
                    <div class="card no-shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                    </div>
                </div>

            </div>
    </section>
<?php }
?>