<?php
$codigo_de_barras=htmlentities(addslashes($_POST['codigo_de_barras']));
$nombre_producto=htmlentities(addslashes($_POST['nombre_producto']));
$descripcion=htmlentities(addslashes($_POST['Descripcion']));
$precio=htmlentities(addslashes($_POST['Precio']));
$precio_sujerido=htmlentities(addslashes($_POST['Precio_sujerido']));
$fecha=htmlentities(addslashes($_POST['fecha']));
$existencia=htmlentities(addslashes($_POST['existencia']));
$marca=htmlentities(addslashes($_POST['marca']));
$proveedor=htmlentities(addslashes($_POST['proveedor']));
$categoria=htmlentities(addslashes($_POST['categoria']));
include ("conexion.php");
$base=conectar();
    if(($codigo_de_barras != null) && ($nombre_producto != NULL) && ($descripcion != NULL) && ($precio != NULL) && ($precio_sujerido != NULL) && ($fecha != NULL) && ($existencia!= NULL) && ($marca!=NULL) && ($proveedor!=NULL) && ($categoria!=NULL)){    
    $sql="INSERT INTO producto(CODIGO_DE_BARRAS , NOMBRE , DESCRIPCION , PRECIO_DE_COMPRA , PRECIO_SUGERIDO , FECHA_DE_COMPRA , CANTIDAD , MARCA , PROVEEDOR , categoria ) VALUES(:codigo , :nombre , :descripcion , :precio , :precio_sujerido , :fecha , :existencia , :marca , :proveedor , :categoria)";
    $resul=$base->prepare($sql);
    $resul->execute(array (":codigo"=>$codigo_de_barras,":nombre"=>$nombre_producto,":descripcion"=>$descripcion,":precio"=>$precio,":precio_sujerido"=>$precio_sujerido,":fecha"=>$fecha, ":existencia"=>$existencia,":marca"=>$marca,"proveedor"=>$proveedor,":categoria"=>$categoria));
    $resul->closeCursor();
    header("Location:productos.php");
    }
    else{
        echo'<script type="text/javascript">
    alert("TODOS LOS CAMPOS SON ABLIGATORIOS");
    window.location.href="productos.php";
    </script>';
    }
?>