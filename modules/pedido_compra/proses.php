<?php 
session_start();

require_once '../../config/database.php';

if(empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=alert=3'>";
}
else{
    if($_GET['act']=='insert'){
        if(isset($_POST['Guardar'])){
            $codigo = $_POST['codigo'];
            $codigo_deposito= $_POST['codigo_deposito'];
            //Insertar detalle de pedido de compra
            $sql=mysqli_query($mysqli, "SELECT * FROM producto, tmp WHERE producto.cod_producto=tmp.id_producto");
            while($row = mysqli_fetch_array($sql)){
                $codigo_producto= $row['id_producto'];
                $cantidad= $row['cantidad_tmp'];
                $insert_detalle = mysqli_query($mysqli, "INSERT INTO detalle_pedido_compra (cod_producto, cod_pedido_compra, cantidad) 
                VALUES ($codigo_producto, $codigo, $cantidad)")
                or die('Error'.mysqli_error($mysqli));
 
            }
            //Insertar cabecera pedido de compra
            //Definir variables
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $estado='activo';
            $usuario = $_SESSION['id_user'];
            //insertar
            $query = mysqli_query($mysqli, "INSERT INTO pedido_compra (cod_pedido_compra, cod_deposito,
            fecha, hora, estado, id_user)
            VALUES ($codigo, $codigo_deposito, '$fecha', '$hora', '$estado', $usuario)")
            or die('Error'.mysqli_error($mysqli));

            if($query){
                header("Location: ../../main.php?module=pedido_compra&alert=1");
            } else {
                header("Location: ../../main.php?module=pedido_compra&alert=3");
            }
        }
    }

    elseif($_GET['act']=='anular'){
        if(isset($_GET['cod_pedido_compra'])){
            $codigo = $_GET['cod_pedido_compra'];
            //Anular cabecera de compra (cambiar estado a anulado)
            $query = mysqli_query($mysqli, "UPDATE pedido_compra SET estado='anulado' WHERE cod_pedido_compra=$codigo")
            or die('Error'.mysqli_error($mysqli));

            //Consultar detalle de compra con el código que llegó por get
            $sql = mysqli_query($mysqli, "SELECT * FROM detalle_pedido_compra WHERE cod_pedido_compra=$codigo");
            while($row = mysqli_fetch_array($sql)){
                $codigo_producto = $row['cod_producto'];
                $codigo_deposito = $row['cod_deposito'];
                $cantidad = $row['cantidad'];

                $actualizar_stock = mysqli_query($mysqli, "UPDATE stock set cantidad = cantidad - $cantidad
                WHERE cod_producto=$codigo_producto
                AND cod_deposito=$codigo_deposito")
                or die('Error'.mysqli_error($mysqli));
            }
            if($query){
                header("Location: ../../main.php?module=pedido_compra&alert=2");
            } else {
                header("Location: ../../main.php?module=pedido_compra&alert=3");
            }
        }
    }
}
?>