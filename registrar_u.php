<?php
$nombre=htmlentities(addslashes($_POST['Nombre']));
$usuario=htmlentities(addslashes($_POST['N_usuario']));
$contrasena=htmlentities(addslashes($_POST['Contrasena']));
$confirma_contrasena=htmlentities(addslashes($_POST['Contrasenaa']));
try{
    $base=new PDO("mysql:host=localhost; dbname=papeleria" , "root" , "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

if($contrasena == $confirma_contrasena){
   $sql="INSERT INTO USUARIOS_1(NOMBRE_Y_APELLIDO,NOMBRE_DE_USUARIO,CONTRASEÑA) VALUES(:NOMBRE,:N_USUARIO,:CONTRASENA)";
    $resul=$base->prepare($sql);
    $resul->execute(array (":NOMBRE"=>$nombre,":N_USUARIO"=>$usuario,":CONTRASENA"=>$contrasena));
    $resul->closeCursor();
    header("Location:index.php");
}
else{
    echo"las contraseñas no coinciden";
}
}
catch(Exception $e){
    die ("error".$e->getMessage());
}
?>