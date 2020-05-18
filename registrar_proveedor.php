<?php
$nombre=htmlentities(addslashes($_POST['Nombre']));
$domicilio=htmlentities(addslashes($_POST['Domicilio']));
$rfc=htmlentities(addslashes($_POST['Rfc']));
$correo=htmlentities(addslashes($_POST['Correo']));
$proveedor=htmlentities(addslashes($_POST['Proveedor']));
$compania=htmlentities(addslashes($_POST['Compania']));
include ("conexion.php");
$base=conectar();
    if(($nombre != null) && ($domicilio != NULL) && ($rfc != NULL) && ($correo != NULL) && ($proveedor != NULL) && ($compania != NULL)){
        if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
            echo"formato de correo no es invalido";
        }else{
   $sql="INSERT INTO proveedor(NOMBRE , DOMICILIO , RFC , CORREO , PROVEEDOR , COMPAÑIA) VALUES(:nombres , :domicilios , :rfc_ , :correos , :proveedor_ , :companias)";
    $resul=$base->prepare($sql);
    $resul->execute(array (":nombres"=>$nombre,":domicilios"=>$domicilio,":rfc_"=>$rfc,":correos"=>$correo,":proveedor_"=>$proveedor,":companias"=>$compania));
    $resul->closeCursor();
    header("Location:proveedor.php");
        }
    }
    else{
        echo'<script type="text/javascript">
    alert("TODOS LOS CAMPOS SON ABLIGATORIOS");
    window.location.href="proveedor.php";
    </script>';
    }
?>