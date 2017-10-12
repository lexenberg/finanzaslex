<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['dia'];
	$a=$_POST['mes'];
	$e=$_POST['monto'];
	$t=$_POST['descripcion'];
	$sql="UPDATE t_gastos set dia='$n',
								mes='$a',
								monto='$e',
								descripcion='$t'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>