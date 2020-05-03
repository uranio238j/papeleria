
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
            $resultado3 = $conexion->query("SELECT * FROM producto");
        ?>
        
    <div class="agregar_pr">
                <form class="box" action="registrar_producto.php" method="POST">
                    <h2>REGISTRAR PRODUCTO</h2>
                    <input type="text" name="codigo_de_barras" placeholder="Codigo de barras">
                    <input type="text" name="nombre_producto" placeholder="Nombre del producto">
                    <input type="text" name="Descripcion" placeholder="Descripcion del producto">
                    <input type="text" name="Precio" placeholder="Precio">
                    <input type="text" name="Precio_sujerido" placeholder="Precio sugerido">
                    <input type="text" name="fecha" placeholder="Fecha de compra año-mes-dia">
                    <input type="text" name="existencia" placeholder="Existencia">
                    <input type="text" name="marca" placeholder="Marca del producto">
                    <input type="text" list="lista" name="proveedor" placeholder="Proveedor" autocomplete="off">
                    <datalist id="lista">
                    <?php
                        while($filas1 = $resultado->fetch_object()){
                            echo "<option>$filas1->PROVEEDOR</option>";
                        }
                    ?>
                    </datalist>
                    <input type="text" list="lista2" name="categoria" placeholder="Categoria" autocomplete="off" >
                    <datalist id="lista2">
                    <?php
                        while($fila2 = $resultado2->fetch_object()){
                            echo "<option>$fila2->categoria</option>";
                        }
                    ?>
                    </datalist>
                    <input type="submit" name="" value="REGISTRAR">
                 </form>   
            </div>
            <div class="centrar_producto">
        <table>
		  <thead>
		        <tr>
			        <th>Codigo de barras</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Precio de venta</th>
                    <th>Fecha de compra</th>
                    <th>Cantidad</th>
                    <th>Marca</th>
                    <th>proveedor</th>
                    <th>Categoria</th>
		        </tr>
            </thead>
            <?php while($filas3 = $resultado3->fetch_object()){
            echo "<tr>";
            echo "<td>$filas3->CODIGO_DE_BARRAS</td>";
            echo "<td> $filas3->NOMBRE</td>";
            echo "<td> $filas3->DESCRIPCION</td>";
            echo "<td> $filas3->PRECIO_DE_COMPRA</td>";
            echo "<td> $filas3->PRECIO_SUGERIDO</td>";
            echo "<td> $filas3->FECHA_DE_COMPRA</td>";
            echo "<td> $filas3->CANTIDAD</td>";
            echo "<td> $filas3->MARCA</td>";
            echo "<td> $filas3->PROVEEDOR</td>";
            echo "<td> $filas3->categoria</td>";
            echo "</tr>";	
            }?>
        </table>
        </div>
</body>
</html>
