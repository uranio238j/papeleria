<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/tablas.css">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <title>Document</title>
</head>
    <body>
    <nav>
            <form class="box" action="#" method="POST">
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
                  <li>  <a href="#">Ventas</a></li>
                  <li>  <a href="serrar_secion.php">Cerrar secion</a></li>
            </UL>
    </div>
        <?php
            // Conectando, seleccionando la base de datos
            $conexion = new mysqli('localhost', 'root', '', 'papeleria');
            $conexion->set_charset("utf8");
            // Realizar una consulta MySQL
            $resultado = $conexion->query("SELECT * FROM usuarios_1");
        ?>
        <div class="centrar">
        <table>
		  <thead>
		        <tr>
			        <th>ID</th>
			        <th>NOMBRE y apellido</th>
			        <th>nombre de usuario</th>
		        </tr>
            </thead>
            <?php while($filas = $resultado->fetch_object()){
                echo "<tr>";
	        echo "<td>$filas->ID</td>";
            echo "<td> $filas->NOMBRE_Y_APELLIDO</td>";
            echo "<td> $filas->NOMBRE_DE_USUARIO</td>";
            echo "</tr>";	
            }?>
        </table>
        </div>
    </body>
</html>