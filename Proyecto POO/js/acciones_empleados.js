function editarEmpleado(codigoEmpleado){
	
	$.ajax({
			url:"ajax/procesar_empleados.php?accion=3",
			method: "POST",
			data: "codigoEmpleado="+codigoEmpleado,
			dataType: 'json',
			success:function(resultado){
				$("#txt-nombre").val(resultado.nombre);
				$("#txt-apellido").val(resultado.codigo_auto);				
				$("#slc-tratamiento").val(resultado.tratamiento);
				$("#txt-edad").val(resultado.edad);
				$("#txt-correo").val(resultado.correo);
				$("#txt-telefono").val(resultado.telefono);
				$("#slc-genero").val(resultado.genero);
				$("#slc-jefe").val(resultado.jefe);
				$("#txt-numero-id").val(resultado.numero_identidad);
				$("#txt-nacionalidad").val(resultado.nacionalidad);
				$("#txt-sueldo").val(resultado.sueldo);
				$("#slc-cargo").val(resultado.cargo);
				$("#btn-actualizar").fadeIn(100);
				$("#btn-guardar").fadeOut(100);
			},
			error:function(){

			}
	});
}
function eliminarEmpleado(codigoEmpleado){
	alert(codigoEmpleado);
	$.ajax({
			url:"ajax/procesar_empleados.php?accion=5",
			method: "POST",
			data: "codigo_empleado="+codigoEmpleado,
			dataType: 'html',
			success:function(resultado){
				$("#resultado").html(resultado);
				cargarEmpleados();
			},
			error:function(){

			}
	});
} 	
$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros=
			"txt-nombre="+$("#txt-nombre").val()+
			"&txt-apellido="+$("#txt-apellido").val()+
			"&slc-tratamiento="+$("#slc-tratamiento").val()+
			"&txt-edad="+$("#txt-edad").val()+
			"&txt-correo="+$("#txt-correo").val()+
			"&txt-telefono="+$("#txt-telefono").val()+
			"&slc-genero="+$("#slc-genero").val()+
			"&slc-jefe="+$("#slc-jefe").val()+
			"&txt-numero-id="+$("#txt-numero-id").val()+
			"&txt-nacionalidad="+$("#txt-nacionalidad").val()+
			"&txt-sueldo="+$("#txt-sueldo").val()+
			"&slc-cargo="+$("#slc-cargo").val();	

		$.ajax({
			url:"ajax/procesar_empleados.php?accion=2",
			method: "POST",
			data: parametros,
			success:function(resultado){
				alert(resultado);
				$("#div-comprobacion-empleados").html(resultado);
 				},
			error:function(){

			}
		});
	});
	$("#btn-modificar").click(function(){
			var parametros=
			"txt-nombre="+$("#txt-nombre").val()+
			"&txt-apellido="+$("#txt-apellido").val()+
			"&slc-tratamiento="+$("#slc-tratamiento").val()+
			"&txt-edad="+$("#txt-edad").val()+
			"&txt-correo="+$("#txt-correo").val()+
			"&txt-telefono="+$("#txt-telefono").val()+
			"&slc-genero="+$("#slc-genero").val()+
			"&slc-jefe="+$("#slc-jefe").val()+
			"&txt-numero-id="+$("#txt-numero-id").val()+
			"&txt-nacionalidad="+$("#txt-nacionalidad").val()+
			"&txt-sueldo="+$("#txt-sueldo").val()+
			"&slc-cargo="+$("#slc-cargo").val();
			alert(parametros);
		$.ajax({
			url:"ajax/procesar_empleados.php?accion=4",
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
		url: "ajax/procesar_empleados.php?accion=1",
		method: "POST",
		success: function(resultado){
			$("#div-comprobacion-empleados").html(resultado);
			},
			error:function(){

			}
		});
	}
	cargarEmpleados();
	
});