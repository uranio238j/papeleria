    <?php
        try{
            $base=new PDO("mysql:host=localhost; dbname=papeleria" , "root" , "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
            $consulta="SELECT * FROM usuarios_1 WHERE NOMBRE_DE_USUARIO = :usuario AND CONTRASEÑA= :contra";
            $resul=$base->prepare($consulta);
            $usuar=htmlentities(addslashes($_POST['Usuario']));
            $contra=htmlentities(addslashes($_POST['Contraseña']));
            $resul->bindValue(":usuario",$usuar);
            $resul->bindValue(":contra",$contra);
            $resul->execute();
            $n_registros=$resul->rowCount();
            if($n_registros != 0){
                session_start();
                $_SESSION["secion"]=$_POST["Usuario"];
                header("location:inicio.php");
               
            }
            else{
                header("location:index.php");
            }
        }
        catch(Exception $e){
            die ("error".$e->getMessage());
        }
    ?>