
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>inventario</title>
</head>
<body>
<?php
  session_start();
  if(!isset($_SESSION["secion"])){
      header("Location:index.php");
  }
  include ("conexion.php");
    $base=conectar();
    $consulta="SELECT * FROM usuarios_1";
    $consulta_2="SELECT * FROM categorias";
    $consulta_3="SELECT * FROM producto";
    $resul=$base->prepare($consulta);
    $resul_2=$base->prepare($consulta_2);
    $resul_3=$base->prepare($consulta_3);
    $resul->execute();
    $resul_2->execute();
    $resul_3->execute();
    $n_registros=$resul->rowCount();
    $n_registros_2=$resul_2->rowCount();
    $n_registros_3=$resul_3->rowCount();
?>
    <nav>
            <form class="box" action="#" method="POST">
                <input class="barra_b" type="text" name="busqueda" placeholder="Buscar">
                <input class="button" type=image src="imagenes/lupa.png" width="25" height="25"> 
            </form>
    </nav>
    <div class="m_lateral">
                <a class="logol" href="inicio.php"><img class="logo" src="imagenes/logo.png"></a> 
            <UL>
                  <li><a href="panel_de_control.php">panel de control</a></li>
                  <li>  <a href="usuarios_2.php">Usuarios</a></li>
                  <li>  <a href="categorias.php">Categorias</a></li>
                  <li>  <a href="productos.php">Productos</a></li>
                  <li>  <a href="proveedor.php">Proveedores</a></li>
                  <li>  <a href="#">Ventas</a></li>
                  <li>  <a href="serrar_secion.php">Cerrar secion</a></li>
            </UL>
    </div>
    <div class="contenedor">
        <h2>Panel de control</h2>
        <div class="controles">
                <a href="usuarios_2.php">
                    <li class="icon icon-users"></li>
                    <p>
                        <strong>Usuarios</strong>
                        <span><?php echo $n_registros?></span>
                    </p>
                </a>
                <a href="categorias.php">
                    <li class="icon icon-list2"></li>
                    <p>
                        <strong>categorias</strong>
                        <span><?php echo $n_registros_2?></span>
                    </p>
                </a>
                <a href="productos.php">
                    <li class="icon icon-cart"></li>
                    <p>
                        <strong>productos</strong>
                        <span><?php echo $n_registros_3?></span>
                    </p>
                </a>
                <a href="#">
                    <li class="icon icon-dollar"></li>
                    <p>
                        <strong>ventas</strong>
                        <span>n_ventas</span>
                    </p>
                </a>
        </div>
    </div>
</html>
