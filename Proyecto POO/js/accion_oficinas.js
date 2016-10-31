$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros=
			"txt-nombre-sucursal="+$("#txt-nombre-sucursal").val()+
			"&txt-direccion="+$("#txt-direccion").val()+
			"&txt-telefono="+$("#txt-telefono").val()+
			"&slc-admin="+$("#slc-admin").val();

		$.ajax({
			url:"ajax/procesar_add_sucursales.php?accion=1",
			method: "POST",
			data: parametros,
			success:function(resultado){

				alert(resultado);
				$("#div-comprobacion-sucursal").html(resultado);
				},
			error:function(){

			}
		});
	});

	$("#btn-imprimir").click(function(){
		$.ajax({
			url:"ajax/procesar_add_sucursales.php?accion=2",
			method:"POST",
			success:function(respuesta){
				$("#div-comprobacion-sucursal").html(respuesta);
			},
			error:function(){
				alert("Ocurrio un error.");
			}
		});	
	});
	
});