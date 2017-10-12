
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
 ?>


	<div class="col-xs-12">
		<div class="margen">

            <div class="box-margen table-responsive no-padding">
			<table class="table table-hover table-condensed table-striped">
			<caption style="padding-bottom: 30px;
">
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
					Agregar nuevo gasto 
					<span class="glyphicon glyphicon-plus"></span>
				</button>
			</caption>
			<thead>
			<tr>
				<td>Día</td>
				<td>Mes</td>
				<td>Monto</td>
				<td>Descripción</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
			</thead>
			<?php 
				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,dia,mes,monto,descripcion 
						from t_gastos where id='$idp'";
					}else{
						$sql="SELECT id,dia,mes,monto,descripcion 
						from t_gastos";
					}

				}else{
					$sql="SELECT id,dia,mes,monto,descripcion 
						from t_gastos";
				}



				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 
					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
			 ?>



			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion"
					onclick="agregaform('<?php echo $datos ?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
					</button>
				</td>
			</tr>

			<?php 
		}
			 ?>
		</table>
		</div>
		</div>
		</div>


</div>