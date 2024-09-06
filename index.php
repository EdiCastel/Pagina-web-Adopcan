<?php
session_start();
require 'conexion_db.php'; //configuración conexión db
require 'login.php';	   //procesos de login


// verifico si el usuario tiene creada la sesion previamente
if(isset($_SESSION['email'])){
	header('Location: panel.php');
	exit;
}
?>
<?php
//mensajes de alerta

//en caso de exito mostrar mensaje exitoso
if(isset($success_message)){
	echo '<div style="background-color:green; display:flex;text-align:center;justify-content:center;color: white;font-size: 48px;">'.$success_message.'</div>'; 
}
//en caso de error mostrar mensaje con error
if(isset($error_message)){
	echo '<div style="background-color:red; display:flex;text-align:center;justify-content:center;color: white;font-size: 48px;">'.$error_message.'</div>'; 
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=StyleSheet href="estilos/estilos.css" type="text/css" media=screen>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <title>Inicio de sesion</title>
</head>
<body>
    <nav class="barra">
        <img src="imagenes/logo.png">
        <h1>Adopcan</h1>
    </nav>
    <div class="linea"></div>
	<div class="fondo">
        <img src="imagenes/Frame 142.png" alt="">
    </div>
	<div class="cont">
	<form class="form" action="" method="POST">
		<label for="chk" aria-hidden="true">Inicio de sesion</label>
        <input id="email" name="form_email" type="text" placeholder="Ingrese su usuario o correo electrónico">
        <input id="password" name="form_password" type="password" placeholder="Contraseña">
        <input name="iniciar sesion" class="boton" type="submit" value="Iniciar sesión">
			<a class="Reg" href="registrar.php">Registrarme</a>
		</form>
	</div>
</body>
</html>