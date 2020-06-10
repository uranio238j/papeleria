<?php
include ("datos_factura.php");
include ("conexion.php");
$base=conectar();
    if(($fecha != null) && ($nombre_producto != NULL) && ($Domicilio != NULL) && ($RFC != NULL) && ($Telefono != NULL) && ($Cantidad != NULL) && ($Descripcion != NULL) && ($Precio_u!= NULL) && ($Subtotal!=NULL) && ($IVA_Total!=NULL) && ($Precio_Total!=NULL)){    
    $sql="INSERT INTO factura(FECHA , NOMBRE , DOMICILIO , RFC , TELEFONO , CANTIDAD , DESCRIPCION , PRECIO_UNITARIO , SUBTOTAL , IVA_TOTAL, PRECIO_TOTAL ) VALUES(:fechas , :nombres , :domicilios , :rfcs , :telefonos , :cantidades , :descripciones , :precios_u , :subtotales , :ivas_t, :precios_t)";
    $resul=$base->prepare($sql);
    $resul->execute(array (":fechas"=>$fecha,":nombres"=>$nombre_producto,":domicilios"=>$Domicilio,":rfcs"=>$RFC,":telefonos"=>$Telefono,":cantidades"=>$Cantidad,":descripciones"=>$Descripcion, ":precios_u"=>$Precio_u,":subtotales"=>$Subtotal,"ivas_t"=>$IVA_Total,":precios_t"=>$Precio_Total));
    $resul->closeCursor();
    header("Location:ventas.php");
    }
    else{
        echo'<script type="text/javascript">
    alert("TODOS LOS CAMPOS SON ABLIGATORIOS");
    window.location.href="ventas.php";
    </script>';
    }
?>