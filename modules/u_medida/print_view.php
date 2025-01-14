<?php 
require_once "../../config/database.php";

$query = mysqli_query($mysqli, "SELECT * FROM deposito")
     or die('Error'.mysqli_error($mysqli));

$count = mysqli_num_rows($query);     
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
       <meta charset="UTF-8">
       <title>Reporte de depositos</title>
       <link rel="stylesheet" type="text/css" href="../../assets/img/favicon.ico">
    </head>
    <body>
        <div align="center">
            <img src="../../images/user/images.jpg" >
        </div>
        <div>
            Reporte de Ciudad
        </div>
        <div align="center">
            Cantidad: <?php echo $count; ?>

        </div>
        <hr>
        <div>
            <table width="100%" border="0.3" cellpadding="0" align="center">
                <thead style="backgraund:#b0f2c2">
                    <tr class="table-title">
                        <th heigth="10" align="center" valing="middle"><small>Còdigo</small></th>
                        <th heigth="50" align="center" valing="middle"><small>Descripciòn</small></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while ($data = mysqli_fetch_assoc($query)){
                        $codigo = $data['cod_deposito'];
                        $descrip = $data['descrip'];

                        echo "<tr>
                        <td width='100' align='left'>$codigo</td>
                        <td width='150' align='left'>$descrip</td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
    </body>
</html>