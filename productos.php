
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="stylesheet" type="text/css" href="css/tablas.css">
    <title>inventario</title>
</head>
<body>
<?php
  session_start();
  if(!isset($_SESSION["secion"])){
      header("Location:index.php");
  }
?>
    <nav>
            <form class="box" action="" method="POST">
                <input class="barra_b" type="text" name="busqueda" placeholder="Buscar">
                <input class="button" type=image src="imagenes/lupa.png" width="25" height="25"> 
            </form>
    </nav>
    <div class="m_lateral">
                <a class="logol" href="inicio.php"><img class="logo" src="imagenes/logo.png"></a> 
            <UL>
                  <li><a href=panel_de_control.php>panel de control</a></li>
                  <li>  <a href="usuarios_2,php">Usuarios</a></li>
                  <li>  <a href="categorias.php">Categorias</a></li>
                  <li>  <a href="productos.php">Productos</a></li>
                  <li>  <a href="proveedor.php">Proveedores</a></li>
                  <li>  <a href="#">Ventas</a></li>
                  <li>  <a href="serrar_secion.php">Cerrar secion</a></li>
            </UL>
    </div>
    <?php
            // Conectando, seleccionando la base de datos
            $conexion = new mysqli('localhost', 'root', '', 'papeleria');
            $conexion->set_charset("utf8");
            // Realizar una consulta MySQL
            $resultado = $conexion->query("SELECT * FROM proveedor");
            $resultado2 = $conexion->query("SELECT * FROM categorias");
        ?>
        
    <div class="agregar_pr">
                <form class="box" action="index2.php" method="POST">
                    <h2>REGISTRAR PRODUCTO</h2>
                    <input type="text" name="codigo_de_barras" placeholder="Codigo de barras">
                    <input type="text" name="nobre_producto" placeholder="Nombre del producto">
                    <input type="text" name="Descripcion" placeholder="Descripcion del producto">
                    <input type="text" name="Precio" placeholder="Precio">
                    <input type="text" name="Precio_sugerido" placeholder="Precio sugerido">
                    <input type="text" name="fecha" placeholder="Fecha de compra dia/mes/año">
                    <input type="text" name="existencia" placeholder="Existencia">
                    <input type="text" name="marca" placeholder="Marca del producto">
                    <input type="text" list="lista" name="proveedor" placeholder="Proveedor" >
                    <datalist id="lista">
                    <?php
                        while($filas = $resultado->fetch_object()){
                            echo "<option>$filas->PROVEEDOR</option>";
                        }
                    ?>
                    </datalist>
                    <input type="text" list="lista2" name="proveedor" placeholder="Categoria" >
                    <datalist id="lista2">
                    <?php
                        while($fila = $resultado2->fetch_object()){
                            echo "<option>$fila->categoria</option>";
                        }
                    ?>
                    </datalist>
                    <input type="submit" name="" value="REGISTRAR">
                 </form>   
            </div>
</body>
</html>
