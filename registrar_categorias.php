<?php
$categoria=htmlentities(addslashes($_POST['Categoria']));
try{
    $base=new PDO("mysql:host=localhost; dbname=papeleria" , "root" , "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
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
}
catch(Exception $e){
    die ("error".$e->getMessage());
}
?>