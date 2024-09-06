<?php

//Archivo con las consultas para el alta del usuario

//verifico que haya enviado los campos
if(isset($_POST['nombre']) && isset($_POST['sexo']) && isset($_POST['edad']) && isset($_POST['tamaño']) && isset($_POST['caracter']) && isset($_POST['descripcion']) ){

// Verifico que los campos enviados desde el formulario no esten vacios y quito espacios en blanco
	if(!empty(trim($_POST['nombre'])) && !empty(trim($_POST['sexo'])) && !empty($_POST['edad']) && !empty($_POST['tamaño']) && !empty($_POST['caracter']) && !empty($_POST['descripcion']) ){

		// Escapo posibles caracteres especiales que haya ingresado
		$nombre = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['nombre']));
		$sexo = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['sexo']));
		$edad = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['edad']));
        $tamaño = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['tamaño']));
        $caracter = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['caracter']));
		$descripcion = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['descripcion']));

		//guardo la imagen en bits
		$n_imagen = $_FILES['imagen']['name'];
		$imagen = $_FILES['imagen']['tmp_name'];
		$ruta = "base_img/". $n_imagen;
		$base_datos = "base_img/". $n_imagen;
		move_uploaded_file($imagen,$ruta);
		

		// Ahora ingreso los valores previamente preparados

		$inserto_perro = mysqli_query($db_connection, "INSERT INTO `perros` (nombre, fecha_ingreso, sexo, edad, tamaño, caracter, descripcion, imagen) VALUES ('$nombre',now(), '$sexo', '$edad', '$tamaño', '$caracter', '$descripcion','$base_datos')");
		
		// Verifico errores y preparo mensajes
		if($inserto_perro === TRUE){
				$success_message = "Registro exitoso, La informacion fue ingresada a la base de datos.";
		}else{
			$error_message = "¡Epa! Algo no salió como esperabamos, error.";
		}
	}else{
		// Si los campos estan vacios, notifico en el mensaje
		$error_message = "Por favor complete los campos vacios.";
	}
}

?>