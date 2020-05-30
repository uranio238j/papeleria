
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
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
    <div class="texto">
        <h1>Bienvenido a Tecnopapeleria</h1>
        <p>
            Con esta negocio queremos tener una amplia variedad de productos y marcas que ayuden al cliente a elegir el  <br>
            producto que crea mas apto para lo que necesita, con esto los clientes incluso podran experimentar productos  <br>
            de otras marcas en caso de quererlo, aunque algunas puede que sean mas caras o mas baratas que otras. <br><br>
            Principalmente los productos son dirigidos a clientes que estan estudiando o aquellos que trabajan y necesiten<br>
            reponer sus materiales, ya sea lapices, colores, etc, e incluso puede ser dirigido a otras papelerias para que <br>
            estas puedan abastecerse y poder venderlo a los clientes habituales que puedan tener.<br>
            <br>
            Nuestra visión es poder llegar a un gran número de personas con este proyecto que hemos creado a partir de <br>
            los planteamientos que hemos visto para poder abastecer a un público con nuestro material para que ellos puedan <br>
            hacer realidad esos proyectos y finalmente tener esa satisfacción de poder ayudar a las personas con precios <br>
            justos y con los servicios adecuados que brindamos a través de nuestra página teniendo diferentes formas de <br>
            pago y facilidades para nuestros clientes con nuestra propia base de datos de todos nuestros artículos que <br>
            actualizamos de manera constante.<br>
        </p>
    </div>
    <div class="m_lateral">
                <a class="logol" href="inicio.php"><img class="logo" src="imagenes/logo.png"></a> 
            <UL>
                  <li><a href=panel_de_control.php>panel de control</a></li>
                  <li>  <a href="usuarios_2,php">Usuarios</a></li>
                  <li>  <a href="categorias.php">Categorias</a></li>
                  <li>  <a href="productos.php">Productos</a></li>
                  <li>  <a href="proveedor.php">Proveedores</a></li>
                  <li>  <a href="ventas.php">Ventas</a></li>
                  <li>  <a href="serrar_secion.php">Cerrar secion</a></li>
            </UL>
    </div>
</body>
</html>
