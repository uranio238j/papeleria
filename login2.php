    <?php
        
            $usuar=htmlentities(addslashes($_POST['Usuario']));
            $contra=htmlentities(addslashes($_POST['Contraseña']));
            $n_registros=0;
            include ("conexion.php");
            $base=conectar();
            $consulta="SELECT * FROM usuarios_1 WHERE NOMBRE_DE_USUARIO = :usuario";
            $resul=$base->prepare($consulta);
            $resul->execute(array(":usuario"=>$usuar));
            while($filas = $resul->fetch(PDO::FETCH_ASSOC)){
                if(password_verify($contra , $filas['CONTRASEÑA'])){
                    $n_registros ++;
                }
            }
            if($n_registros > 0){
                echo "hola";
                session_start();
                $_SESSION["secion"]=$_POST["Usuario"];
                header("location:inicio.php");
            }
            else{
                header("location:index.php");
                
            }
    ?>