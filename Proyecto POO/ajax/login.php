<?php

	session_start(); 
	switch ($_GET["accion"]) {
		case '1': 

			include_once("../class/class_conexion.php");
			include_once("../class/class_usuario.php");

			$conexion = new Conexion();
			$respuesta = Usuario::verificarUsuario($conexion, $_POST["txt-usuario"], $_POST["txt-password"]);
			$_SESSION["codigo_usuario"] = $respuesta["codigo_usuario"];
			$_SESSION["nombre_usuario"] = $respuesta["nombre_usuario"];
			$_SESSION["codigo_privilegio"] = $respuesta["codigo_privilegio"];
			echo json_encode($respuesta);
			break;
	default:
			break;
	}
	
?>