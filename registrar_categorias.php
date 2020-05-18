<?php
$categoria=htmlentities(addslashes($_POST['Categoria']));
include ("conexion.php");
$base=conectar();
    if($categoria !=null){
   $sql="INSERT INTO categorias(categoria) VALUES(:CATEGORIA)";
    $resul=$base->prepare($sql);
    $resul->execute(array (":CATEGORIA"=>$categoria));
    $resul->closeCursor();
    header("Location:categorias.php");
    }
    else{
        echo'<script type="text/javascript">
    alert("No ingreso ni un dato");
    window.location.href="categorias.php";
    </script>';
    }
?>