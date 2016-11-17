$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros=
			"slc-sucursal="+$("#slc-sucursal").val()+
			"&txt-cliente="+$("#txt-cliente").val()+
			"&slc-auto="+$("#slc-auto").val()+
			"&txt-tiempo-reserva="+$("#txt-tiempo-reserva").val()+
			"&txt-dia-reserva="+$("#txt-dia-reserva").val()+
			"&txt-dia-entrega="+$("#txt-dia-entrega").val()+
			"&txt-extras="+$("#txt-extras").val();	

		$.ajax({
			url:"ajax/procesar_admin.php?accion=1",
			method: "POST",
			data: parametros,
			success:function(resultado){
				alert(resultado);
				$("#div-reservaciones").html(resultado);
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
				$("#div-reservaciones").html(respuesta);
			},
			error:function(){
				alert("Ocurrio un error.");
			}
		});	
	});
	
});