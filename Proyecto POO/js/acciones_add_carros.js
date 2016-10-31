$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros=
			"txt-marca-auto="+$("#txt-marca-auto").val()+
			"&txt-modelo="+$("#txt-modelo").val()+
			"&slc-tipo-auto="+$("#slc-tipo-auto").val()+
			"&slc-tipo-trans="+$("#slc-tipo-trans").val()+
			"&txt-placa="+$("#txt-placa").val();

		$.ajax({
			url:"ajax/procesar_add_carros.php?accion=1",
			method: "POST",
			data: parametros,
			success:function(resultado){
				alert(resultado);
				$("#div-comprobacion-reserva").html(resultado);
 				},
			error:function(){

			}
		});
	});

	$("#btn-imprimir").click(function(){
		$.ajax({
			url:"ajax/procesar_add_carros.php?accion=2",
			method:"POST",
			success:function(respuesta){
				$("#div-comprobacion-reserva").html(respuesta);
			},
			error:function(){
				alert("Ocurrio un error.");
			}
		});	
	});
	
});