<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/pdf.css">
    <title>Factura</title>
    
</head>
<body>
    <div class="cabezera">
        <h2>factura</h2>
    </div>
    <img src="imagenes/logo.png">
        <div class="fac">
                    <p>
                        <?php
                        include ("datos_factura.php");
                        echo"<b>Fecha: </b><span>$fecha</span><br>"

                        ?>
                    </p>
        </div>
</body>
</html>