<?php 
session_start();
$session_id = session_id();

require_once '../../config/database.php';

if(empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=alert=3'>";
}
else{
    if($_GET['act']=='insert'){
        if(isset($_POST['Guardar'])){
            $codigo = $_POST['codigo'];
            $codigo_deposito= $_POST['codigo_deposito'];
            //$cod_producto= $_POST['cod_producto'];
            //Insertar detalle de Presupuesto
            $sql=mysqli_query($mysqli, "SELECT * FROM producto, tmp WHERE producto.cod_producto=tmp.id_producto and tmp.session_id='".$session_id."'");
            while($row = mysqli_fetch_array($sql)){
                $cod_presupuesto= $row['id_producto'];
                $id_cliente= $_POST['id_cliente'];
                $cod_producto= $row['cod_producto'];
                $cantidad= $row['cantidad_tmp'];
                $precio= $row['precio_tmp'];
                $insert_detalle = mysqli_query($mysqli, "INSERT INTO detalle_presupuesto (cod_presupuesto, id_cliente, cod_producto, cantidad, precio) 
                VALUES ($cod_presupuesto, $id_cliente, $cod_producto, $cantidad, $precio)")
                or die('Error'.mysqli_error($mysqli));
            }
            //Insertar cabecera de Presupuesto
            //Definir variables
            $id_cliente = $_POST['id_cliente'];
            $cod_deposito = $_POST['codigo_deposito'];
            $codigo_producto = $_POST['codigo_producto'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $nro_presupuesto=$_POST['nro_presupuesto'];
            $estado=$_POST['estado'];
            $suma_total=$_POST['suma_total'];
            $usuario = $_SESSION['id_user'];
            //insertar
            $query = mysqli_query($mysqli, "INSERT INTO presupuesto (cod_presupuesto, id_cliente, cod_deposito, cod_producto, fecha, hora, nro_presupuesto, estado, total, id_user)
            VALUES ('$codigo', '$id_cliente', '$cod_deposito', '$codigo_producto', '$fecha', '$hora', '$nro_presupuesto', '$estado', '$suma_total', '$usuario')")
            or die('Error'.mysqli_error($mysqli));

            if($query){
                header("Location: ../../main.php?module=presupuesto&alert=1");
            } else {
                header("Location: ../../main.php?module=presupuesto&alert=3");
            }
        }
    }

    elseif($_GET['act']=='anular'){
        if(isset($_GET['cod_presupuesto'])){
            $codigo = $_GET['cod_presupuesto'];
            //Anular cabecera de compra (cambiar estado a anulado)
            $query = mysqli_query($mysqli, "UPDATE presupuesto SET estado='anulado' WHERE cod_presupuesto=$codigo")
            or die('Error'.mysqli_error($mysqli));

            //Consultar detalle de compra con el código que llegó por get
            $sql = mysqli_query($mysqli, "SELECT * FROM detalle_presupuesto WHERE cod_presupuesto=$codigo");
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
                header("Location: ../../main.php?module=presupuesto&alert=2");
            } else {
                header("Location: ../../main.php?module=presupuesto&alert=3");
            }
        }
    }
}
?>