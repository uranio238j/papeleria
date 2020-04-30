<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <!--<link rel="stylesheet" type="text/css" href="css/indexx.css">-->
    <title>inventario</title>
</head>
<body>
<?php
  /*session_start();
  if(!isset($_SESSION["secion"])){
      header("Location:index.php");
  }*/
?>
    <nav>
            <form class="box" action="#" method="POST">
                <input class="barra_b" type="text" name="busqueda" placeholder="Buscar">
                <input class="button" type=image src="imagenes/lupa.png" width="25" height="25"> 
            </form>
    </nav>
    <div class="m_lateral">
                    <img class="logo" src="imagenes/logo.png">
            <UL>
                  <li><a href=panel_de_control.php>panel de control</a></li>
                  <li>  <a href="#">Usuarios</a></li>
                  <li>  <a href="categorias.php">Categorias</a></li>
                  <li>  <a href="#">Productos</a></li>
                  <li>  <a href="#">Proveedores</a></li>
                  <li>  <a href="#">Ventas</a></li>
                  <li>  <a href="serrar_secion.php">Cerrar secion</a></li>
            </UL>
    </div>
    <div class="agregar_c">
    <form class="box" action="registrar_categorias.php" method="POST">
   <h2>REGISTRAR CATEGORIA</h2>
   <input type="text" name="Categoria" placeholder="Categoria">
   <input type="submit" value="REGISTRAR">
   </form>
    </div>
</body>
</html>
