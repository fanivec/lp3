<?php 
    require "config/database.php";

    if(empty($_SESSION['username']) && empty($_SESSION['password'])){
        echo "<meta http-equiv='refresh' content='0; url=index.php?alert=3'>";
    }
    else{
        if($_GET['module'] =='start'){
            include "modules/start/view.php";
        }

        elseif($_GET['module']=='password'){
            include "modules/password/view.php";
        }

        elseif($_GET['module']=='user'){
            include "modules/user/view.php";
        }
        elseif($_GET['module']=='form_user'){
            include "modules/user/form.php";
        }
        
        elseif($_GET['module']=='perfil'){
            include "modules/perfil/view.php";
        }
        elseif($_GET['module']=='form_perfil'){
            include "modules/perfil/form.php";
        } 

        elseif($_GET['module']=='departamento'){
            include "modules/departamento/view.php";
        }
        elseif($_GET['module']=='form_departamento'){
            include "modules/departamento/form.php";
        } 

        elseif($_GET['module']=='ciudad'){
            include "modules/ciudad/view.php";
        }
        elseif($_GET['module']=='form_ciudad'){
            include "modules/ciudad/form.php";
        } 

        elseif($_GET['module']=='clientes'){
            include "modules/clientes/view.php";
        }
        elseif($_GET['module']=='form_clientes'){
            include "modules/clientes/form.php";
        } 

        elseif($_GET['module']=='compras'){
            include "modules/compras/view.php";
        }
        elseif($_GET['module']=='form_compras'){
            include "modules/compras/form.php";
        }

        elseif($_GET['module']=='pedido_compra'){
            include "modules/pedido_compra/view.php";
        }
        elseif($_GET['module']=='form_pedido_compra'){
            include "modules/pedido_compra/form.php";
        }

        elseif($_GET['module']=='presupuesto'){
            include "modules/presupuesto/view.php";
        }
        elseif($_GET['module']=='form_presupuesto'){
            include "modules/presupuesto/form.php";
        }

        elseif($_GET['module']=='deposito'){
            include "modules/deposito/view.php";
        }
        elseif($_GET['module']=='form_deposito'){
            include "modules/deposito/form.php";
        }

        elseif($_GET['module']=='proveedor'){
            include "modules/proveedor/view.php";
        }
        elseif($_GET['module']=='form_proveedor'){
            include "modules/proveedor/form.php";
        }

        elseif($_GET['module']=='producto'){
            include "modules/producto/view.php";
        }
        elseif($_GET['module']=='form_producto'){
            include "modules/producto/form.php";
        }

        elseif($_GET['module']=='ventas'){
            include "modules/ventas/view.php";
        }
        elseif($_GET['module']=='form_ventas'){
            include "modules/ventas/form.php";
        }

        elseif($_GET['module']=='pedido_venta'){
            include "modules/pedido_venta/view.php";
        }
        elseif($_GET['module']=='form_pedido_venta'){
            include "modules/pedido_venta/form.php";
        }

        elseif($_GET['module']=='stock'){
            include "modules/stock/view.php";
        }

        elseif($_GET['module']=='u_medida'){
            include "modules/u_medida/view.php";
        }

        elseif($_GET['module']=='form_u_medida'){
            include "modules/u_medida/form.php";
        }

    	
    }

?>