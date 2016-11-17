function editarSucursal(codigoSucursal){
	
	$.ajax({
			url:"ajax/procesar_add_sucursales.php?accion=3",
			method: "POST",
			data: "codigo_sucursal="+codigoSucursal,
			dataType: 'json',
			success:function(resultado){
				$("#txt-nombre-sucursal").val(resultado.nombre_sucursal);
				$("#txt-codigo-sucursal").val(resultado.codigo_sucursal);				
				$("#txt-direccion").val(resultado.direccion);
				$("#txt-telefono").val(resultado.telefono);
				$("#slc-admin").val(resultado.admin);
				$("#btn-actualizar").fadeIn(100);
				$("#btn-guardar").fadeOut(100);
			},
			error:function(){

			}
	});
	cargarSucursales();
}

function eliminarSucursal(codigoSucursal){
	alert(codigoSucursal);
	$.ajax({
			url:"ajax/procesar_add_sucursales.php?accion=5",
			method: "POST",
			data: "codigo_sucursal="+codigoSucursal,
			dataType: 'html',
			success:function(resultado){
				$("#resultado").html(resultado);
				cargarSucursales();
			},
			error:function(){

			}
	});
} 	

$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros=
			"txt-nombre-sucursal="+$("#txt-nombre-sucursal").val()+
			"&txt-direccion="+$("#txt-direccion").val()+
			"&txt-telefono="+$("#txt-telefono").val()+
			"&slc-admin="+$("#slc-admin").val();
			alert(parametros);

		$.ajax({
			url:"ajax/procesar_add_sucursales.php?accion=2",
			method: "POST",
			data: parametros,
			success:function(resultado){
				alert(resultado);
				$("#div-sucursales").html(resultado);
				},
			error:function(){

			}
		});
	});

	$("#btn-modificar").click(function(){
			var parametros=
			"txt-codigo-sucursal="+$("#txt-codigo-sucursal").val()+
			"&txt-nombre-sucursal="+$("#txt-nombre-sucursal").val()+
			"&txt-direccion="+$("#txt-direccion").val()+
			"&txt-telefono="+$("#txt-telefono").val()+
			"&slc-admin="+$("#slc-admin").val();
			alert(parametros);
		$.ajax({
			url:"ajax/procesar_add_carros.php?accion=4",
			method:"POST",
			success:function(respuesta){
				$("#div-sucursales").html(respuesta);
			},
			error:function(){
				alert("Ocurrio un error.");
			}
		});	
	});
	cargarSucursales = function(){
		$.ajax({
			url: "ajax/procesar_add_sucursales.php?accion=1",
			method: "POST",
			success: function(resultado){
				$("#div-sucursales").html(resultado);
				},
				error:function(){

				}
			});
		}
	//cargarSucursales();
	
});