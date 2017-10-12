<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['dia'];
	$a=$_POST['mes'];
	$e=$_POST['monto'];
	$t=$_POST['descripcion'];
	$sql="INSERT into t_gastos (dia,mes,monto,descripcion)
								values ('$n','$a','$e','$t')";
	echo $result=mysqli_query($conexion,$sql);
 ?>