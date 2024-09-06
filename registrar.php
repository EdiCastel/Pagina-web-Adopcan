<?php 
session_start();
require 'conexion_db.php';	 //conexion a db
require 'alta_usuario.php';  //procesos de alta

// verifico si el usuario tiene creada la sesion previamente
if(isset($_SESSION['user_email'])){
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
    <title>Registro de usuario</title>
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
	<div class="contReg">

<form class="form2" action="" method="POST">
		<label for="chk" aria-hidden="true">Registro de usuario</label>
        <input id="email" name="form_email" type="email" placeholder="Correo electrónico" required="">
        <input id="username" name="form_usuario" type="text" placeholder="Usuario" required="">
        <input id="nombre" name="nombre" type="text" placeholder="Nombre" required="">
        <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos" required="">
        <input id="password" name="form_password" type="password" placeholder="Contraseña" required="">
        <input id="telefono" name="telefono" type="tel" placeholder="Telefono" required="">
        <div class="chk1">
            <input name="aviso" type="checkbox"  value="" required=""> Acepto el aviso de privacidad<br>
        </div>
        <div class="chk2">
            <input name="termino" type="checkbox"  value="" required=""> Acepto los términos y condiciones<br>    
        </div>
        <input class="boton" type="submit" name="Registrar" value="Registrar">        
        <a class="Reg" href="index.php">Iniciar sesión</a>

        </form>
    </body>
</html>