<?php
$nombre=htmlentities(addslashes($_POST['Nombre']));
$usuario=htmlentities(addslashes($_POST['N_usuario']));
$contrasena=htmlentities(addslashes($_POST['Contrasena']));
$confirma_contrasena=htmlentities(addslashes($_POST['Contrasenaa']));
include ("conexion.php");
$base=conectar();
if($contrasena == $confirma_contrasena){
    $contrasena_cifrada=password_hash($contrasena,PASSWORD_DEFAULT);
   $sql="INSERT INTO USUARIOS_1(NOMBRE_Y_APELLIDO,NOMBRE_DE_USUARIO,CONTRASEÑA) VALUES(:NOMBRE,:N_USUARIO,:CONTRASENA)";
    $resul=$base->prepare($sql);
    $resul->execute(array (":NOMBRE"=>$nombre,":N_USUARIO"=>$usuario,":CONTRASENA"=>$contrasena_cifrada));
    $resul->closeCursor();
    header("Location:index.php");
}
else{
    echo"las contraseñas no coinciden";
}
?>