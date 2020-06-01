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
                  <li>  <a href="usuarios_2.php">Usuarios</a></li>
                  <li>  <a href="categorias.php">Categorias</a></li>
                  <li>  <a href="productos.php">Productos</a></li>
                  <li>  <a href="proveedor.php">Proveedores</a></li>
                  <li>  <a href="ventas.php">Ventas</a></li>
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
            $resultado4 = $conexion->query("SELECT * FROM factura");
        ?>
    <div class="agregar_pr">
            <form class="box" action="registrar_ventas.php" method="POST">
                <h2>REGISTRAR VENTA</h2>
                <input type="text" name="fecha" placeholder="Fecha de venta año-mes-dia">
                <input type="text" name="nombre" placeholder="Nombre del producto">
                <input type="text" name="Domicilio" placeholder="Domicilio">
                <input type="text" name="RFC" placeholder="RFC del ciente">
                <input type="text" name="Telefono" placeholder="Telefono">
                <input type="text" name="Cantidad" placeholder="Cantidad de compra">
                <input type="text" name="Descripcion" placeholder="Descripcion del producto">
                <input type="text" name="Precio_u" placeholder="Precio unitario">
                <input type="text" name="Subtotal" placeholder="Subtotal">
                <input type="text" name="IVA_Total" placeholder="IVA Total">
                <input type="text" name="Precio_total" placeholder="Precio total">

                <input type="submit" name="" value="REGISTRAR">
                </form>
    </div>
    <div class="centrar_producto">
        <table>
		  <thead>
		        <tr>
			        <th>Fecha de venta</th>
                    <th>Nombre del producto</th>
                    <th>Domicilio</th>
                    <th>Rfc</th>
                    <th>Telefono</th>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                    <th>Precio unitario</th>
                    <th>Subtotal</th>
                    <th>Iva Total</th>
                    <th>Precio_Total</th>
		        </tr>
            </thead>
            <?php while($filas4 = $resultado4->fetch_object()){
            echo "<tr>";
            echo "<td> $filas4->FECHA</td>";
            echo "<td> $filas4->NOMBRE</td>";
            echo "<td> $filas4->DOMICILIO</td>";
            echo "<td> $filas4->RFC</td>";
            echo "<td> $filas4->TELEFONO</td>";
            echo "<td> $filas4->CANTIDAD</td>";
            echo "<td> $filas4->DESCRIPCION</td>";
            echo "<td> $filas4->PRECIO_UNITARIO</td>";
            echo "<td> $filas4->SUBTOTAL</td>";
            echo "<td> $filas4->IVA_TOTAL</td>";
            echo "<td> $filas4->PRECIO_TOTAL</td>";
            echo "</tr>";	
            }?>
        </table>
        </div>
</body>
</html>