
$(document).ready(function(){
	$("#btn-ingresar").click(function(){
			var parametros = "txt-usuario=" +$("#txt-usuario").val() + "&txt-password="+$("#txt-password").val();
			//alert(parametros);
			$.ajax({
				url:"ajax/login.php?accion=1",
				method: "POST",
				data: parametros,
				dataType: 'json	',
				success:function(respuesta){
					$("#resultado").html(respuesta.resultado + "Tipo Usuario: " + respuesta.codigo_privilegio);
					if(respuesta.codigo_privilegio =='1')
						window.location="menu_administrador.php";
					else{ 
						if(respuesta.codigo_privilegio =='2'){
						window.location="menu_contador.php";
						}
						if(respuesta.codigo_privilegio == '3'){
							window.location="menu_cajero.php";
						}
					}
				},

				error:function(){

				}
		});
	});	
});