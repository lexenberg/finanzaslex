

function agregardatos(dia,mes,monto,descripcion){

	cadena="dia=" + dia + 
			"&mes=" + mes +
			"&monto=" + monto +
			"&descripcion=" + descripcion;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#diau').val(d[1]);
	$('#mesu').val(d[2]);
	$('#montou').val(d[3]);
	$('#descripcionu').val(d[4]);
	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	dia=$('#diau').val();
	mes=$('#mesu').val();
	monto=$('#montou').val();
	descripcion=$('#descripcionu').val();

	cadena= "id=" + id +
			"&dia=" + dia + 
			"&mes=" + mes +
			"&monto=" + monto +
			"&descripcion=" + descripcion;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}