$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros=
			"txt-nombre-empleado="+$("#txt-nombre-empleado").val()+
			"&txt-jefe="+$("#txt-jefe").val()+
			"&txt-sueldo="+$("#txt-sueldo").val()+
			"&txt-identidad="+$("#txt-identidad").val()+
			"&slc-cargo="+$("#slc-cargo").val();	

		$.ajax({
			url:"ajax/procesar_admin.php?accion=1",
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

	$("#btn-imprimir").click(function(){
		$.ajax({
			url:"ajax/procesar_admin.php?accion=2",
			method:"POST",
			success:function(respuesta){
				$("#div-comprobacion-empleados").html(respuesta);
			},
			error:function(){
				alert("Ocurrio un error.");
			}
		});	
	});
	
});