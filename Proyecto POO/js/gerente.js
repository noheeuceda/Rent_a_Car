function editarCarro(codigoCarro){
	
	$.ajax({
			url:"ajax/procesar_add_carros.php?accion=3",
			method: "POST",
			data: "codigo_carro="+codigoCarro,
			dataType: 'json',
			success:function(resultado){
				$("#txt-marca-auto").val(resultado.marca_auto);
				$("#txt-codigo-auto").val(resultado.codigo_auto);				
				$("#txt-modelo").val(resultado.modelo);
				$("#txt-anio-modelo").val(resultado.anio_modelo);
				$("#slc-tipo-auto").val(resultado.tipo_auto);
				$("#slc-capacidad-auto").val(resultado.capacidad_auto);
				$("#slc-estilo-auto").val(resultado.estilo_auto);
				$("#slc-tipo-trans").val(resultado.tipo_trans);
				$("#txt-placa").val(resultado.placa);
				$("#txt-kilometraje").val(resultado.kilometraje);
				$("#txt-estado-vehiculo").val(resultado.estado_vehiculo);
				$("#txt-combustible").val(resultado.combustible);
				$("#btn-actualizar").fadeIn(100);
				$("#btn-guardar").fadeOut(100);
			},
			error:function(){

			}
	});
}
function eliminarCarro(codigoCarro){
	alert(codigoCarro);
	$.ajax({
			url:"ajax/procesar_add_carros.php?accion=5",
			method: "POST",
			data: "codigo_carro="+codigoCarro,
			dataType: 'html',
			success:function(resultado){
				$("#resultado").html(resultado);
				cargarCarros();
			},
			error:function(){

			}
	});
} 	

$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros=
			"txt-marca-auto="+$("#txt-marca-auto").val()+
			"&txt-modelo="+$("#txt-modelo").val()+
			"&txt-anio-modelo="+$("#txt-anio-modelo").val()+
			"&slc-tipo-auto="+$("#slc-tipo-auto").val()+
			"&slc-capacidad-auto="+$("#slc-capacidad-auto").val()+
			"&slc-estilo-auto="+$("#slc-estilo-auto").val()+
			"&slc-tipo-trans="+$("#slc-tipo-trans").val()+
			"&txt-placa="+$("#txt-placa").val()+
			"&txt-kilometraje="+$("#txt-kilometraje").val()+
			"&txt-estado-vehiculo="+$("#txt-estado-vehiculo").val()+
			"&txt-combustible="+$("#txt-combustible").val();
			alert(parametros);

		$.ajax({
			url:"ajax/procesar_add_carros.php?accion=2",
			method: "POST",
			data: parametros,
			success:function(resultado){
				alert(resultado);
				$("#div-flota").html(resultado);
				cargarCarros();
 				},
			error:function(){

			}
		});
	});

	$("#btn-modificar").click(function(){
			var parametros=
			"txt-codigo-auto="+$("#txt-codigo-auto").val()+
			"&txt-marca-auto="+$("#txt-marca-auto").val()+
			"&txt-modelo="+$("#txt-modelo").val()+
			"&txt-anio-modelo="+$("#txt-anio-modelo").val()+
			"&slc-tipo-auto="+$("#slc-tipo-auto").val()+
			"&slc-capacidad-auto="+$("#slc-capacidad-auto").val()+
			"&slc-estilo-auto="+$("#slc-estilo-auto").val()+
			"&slc-tipo-trans="+$("#slc-tipo-trans").val()+
			"&txt-placa="+$("#txt-placa").val()+
			"&txt-kilometraje="+$("#txt-kilometraje").val()+
			"&txt-estado-vehiculo="+$("#txt-estado-vehiculo").val()+
			"&txt-combustible="+$("#txt-combustible").val();
			alert(parametros);
		$.ajax({
			url:"ajax/procesar_add_carros.php?accion=4",
			method:"POST",
			success:function(respuesta){
				$("#agregar").html(respuesta);
			},
			error:function(){
				alert("Ocurrio un error.");
			}
		});	
	});
	cargarCarros = function(){
	$.ajax({
		url: "ajax/procesar_add_carros.php?accion=1",
		method: "POST",
		success: function(resultado){
			$("#div-flota").html(resultado);
			},
			error:function(){

			}
		});
	}
	cargarCarros();

	
});