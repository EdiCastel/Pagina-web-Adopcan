<?php

//Archivo con las consultas para registrar el formulario de adopcion de los gatos

//verifico que haya enviado los campos
if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['celular']) && isset($_POST['profesion']) && isset($_POST['colonia']) && isset($_POST['delegacion']) && isset($_POST['ciudad']) && isset($_POST['cod_postal']) && isset($_POST['Res_1']) && isset($_POST['Res_2']) && isset($_POST['Res_3']) && isset($_POST['Res_4']) && isset($_POST['Res_5']) && isset($_POST['Res_6']) && isset($_POST['Res_7']) && isset($_POST['Res_8']) && isset($_POST['Res_9']) && isset($_POST['Res_10']) && isset($_POST['Res_11']) && isset($_POST['Res_12']) && isset($_POST['Res_13']) && isset($_POST['opcion1']) && isset($_POST['opcion2']) && isset($_POST['opcion3']) ){

// Verifico que los campos enviados desde el formulario no esten vacios y quito espacios en blanco
	if(!empty(trim($_POST['nombre'])) && !empty(trim($_POST['correo'])) && !empty(trim($_POST['celular'])) && !empty(trim($_POST['profesion'])) && !empty(trim($_POST['colonia'])) && !empty(trim($_POST['delegacion'])) && !empty(trim($_POST['ciudad'])) && !empty(trim($_POST['cod_postal'])) && !empty(trim($_POST['Res_1'])) && !empty(trim($_POST['Res_2'])) && !empty(trim($_POST['Res_3'])) && !empty(trim($_POST['Res_4'])) && !empty(trim($_POST['Res_5'])) && !empty(trim($_POST['Res_6'])) && !empty(trim($_POST['Res_7'])) && !empty(trim($_POST['Res_8'])) && !empty(trim($_POST['Res_9'])) && !empty(trim($_POST['Res_10'])) && !empty(trim($_POST['Res_11'])) && !empty(trim($_POST['Res_12'])) && !empty(trim($_POST['Res_13']))){

		// Escapo posibles caracteres especiales que haya ingresado
		$nombre = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['nombre']));
        $correo = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['correo']));
        $celular = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['celular']));
        $profesion = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['profesion']));
        $colonia = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['colonia']));
        $delegacion = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['delegacion']));
        $ciudad = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['ciudad']));
        $cod_postal = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['cod_postal']));
        $Res_1 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_1']));
        $Res_2 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_2']));
        $Res_3 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_3']));
        $Res_4 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_4']));
        $Res_5 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_5']));
        $Res_6 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_6']));
        $Res_7 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_7']));
        $Res_8 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_8']));
        $Res_9 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_9']));
        $Res_10 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_10']));
        $Res_11 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_11']));
        $Res_12 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_12']));
        $Res_13 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['Res_13']));
        $opcion1 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['opcion1']));
        $opcion2 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['opcion2']));
        $opcion3 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['opcion3']));

		// Ahora ingreso los valores previamente preparados
		$inserto_perro = mysqli_query($db_connection, "INSERT INTO `form_gato` (nombre, correo, celular, profesion, colonia, delegacion, ciudad, cod_postal, Res_1, Res_2, Res_3,Res_4, Res_5, Res_6, Res_7, Res_8, Res_9, Res_10, Res_11, Res_12, Res_13, opcion1, opcion2, opcion3) VALUES ('$nombre ', '$correo', '$celular', '$profesion', '$colonia', '$delegacion', '$ciudad', '$cod_postal', '$Res_1', '$Res_2', '$Res_3', '$Res_4', '$Res_5', '$Res_6', '$Res_7', '$Res_8', '$Res_9', '$Res_10', '$Res_11', '$Res_12', '$Res_13', '$opcion1', '$opcion2', '$opcion3')");

		// Verifico errores y preparo mensajes
		if($inserto_perro === TRUE){
				$success_message = "Registro exitoso, Su formulario de solicitud fue enviado, se le contactara lo mas pronto posible.";
		}else{
			$error_message = "¡Epa! Algo no salió como esperabamos, error.";
		}
	}else{
		// Si los campos estan vacios, notifico en el mensaje
		$error_message = "Por favor complete los campos vacios.";
	}
}

?>