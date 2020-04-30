<?php 

	$conexion=mysqli_connect('localhost','root','','papeleria');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre y apellido</td>
			<td>nombre de usuario</td>
			<td>contraseña</td>
		</tr>

		<?php 
		$sql="SELECT * FROM usuarios_1";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['NOMBRE_Y_APELLIDO'] ?></td>
			<td><?php echo $mostrar['NOMBRE_DE_USUARIO'] ?></td>
			<td><?php echo $mostrar['CONTRASEÑA'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>