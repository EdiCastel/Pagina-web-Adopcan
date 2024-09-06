<?php
session_start();
require 'conexion_db.php';
require 'alta_perro.php';

	// verifico si el usuario tiene creada la sesion previamente, si el email esta en la variable de sesion.
	if(isset($_SESSION['email']) && !empty($_SESSION['email'])){

		$email = $_SESSION['email'];
		
		// Traigo los datos del email correspondiente, por ej. nombre de usuario, apellido, nombre ,etc
		$get_datos_usuario = mysqli_query($db_connection, "SELECT * FROM `usuarios` WHERE email = '$email'");
		$datosUsuario =  mysqli_fetch_assoc($get_datos_usuario);

	}else{
		//si no esta es porque no pasó por el formulario de login, asi que afuera
		header('Location: salir.php');
	exit;
}
?>

<?php

//mensajes de alerta

//en caso de exito mostrar mensaje exitoso
if(isset($success_message)){
    echo '<div style="background-color:green; display:flex;text-align:center;justify-content:center;color: white;font-size: 18px;">'.$success_message.'</div>'; 
}
//en caso de error mostrar mensaje con error
if(isset($error_message)){
    echo '<div style="background-color:red; display:flex;text-align:center;justify-content:center;color: white;font-size: 18px;">'.$error_message.'</div>'; 
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Ingresar perro</title>
</head>
<body>
<nav class="navB">
        <div class="header">
            <img src="imagenes/logo.png">
            <h1>Adopcan</h1>
        </div>
        <div class="seccion">
            <a style="text-decoration:none" href="index.php">INICIO</a>
            <ul class="nav nav-pills" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">ADOPTAR MASCOTA</a>
                    <div class="dropdown-menu"style="background-color:#F24E1E;">
                        <a class="dropdown-item" style="background:none;" href="fperros.php">ADOPTAR UN PERRO</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="background:none;" href="fgatos.php">ADOPTAR UN GATO</a>
                    </div>
                </li>
            </ul>
            <ul class="nav nav-pills" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">AGREGAR MASCOTA</a>
                    <div class="dropdown-menu"style="background-color:#F24E1E;">
                        <a class="dropdown-item" style="background:none;" href="fagregar_perro.php">AGREGAR UN PERRO</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="background:none;" href="fagregar_gato.php">AGREGAR UN GATO</a>
                    </div>
                </li>
            </ul>
            <ul class="nav nav-pills" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">BUSCAR MASCOTA</a>
                    <div class="dropdown-menu"style="background-color:#F24E1E;">
                        <a class="dropdown-item" style="background:none;" href="buscar_p.php">BUSCAR UN PERRO</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="background:none;" href="buscar_g.php">BUSCAR UN GATO</a>
                    </div>
                </li>
            </ul>
            <a style="text-decoration:none" href="versolicitudes.php">VER SOLICITUDES</a>
            <a style="text-decoration:none" href="galeria.php">GALERIA</a>
            <a style="text-decoration:none" href="salir.php">SALIR</a>
        </div>
    </nav>
    <div class="linea"></div>
    <div class="banner">
        <img style="width:100%" src="imagenes/ingresa_perro.png" alt="">
    </div>
    <div style="background-color:#F24E1E; height:100px; display:flex; align-items:center;">
        <h5 style="margin-left:20px; color:white;font-family: 'Italiana', serif; font-size: 20px;">Añade los datos del perro abajo para que esté registrado en la base de datos:</h5>
    </div>
   
    <div style="background-color:#120755;width: 100%;display: flex;flex-direction: row;justify-content:center;">
        <div style="width: 50%;display: flex;flex-direction: column;">
            <form style="display:flex;flex-direction:column;color:white;margin:10px;height:auto;" action="" method="POST" enctype="multipart/form-data">
                <label for="chk" aria-hidden="true">Nombre del perro</label>
                <input id="nombre" name="nombre" type="text" placeholder="Nombre del perro" required="">
                
                <label for="chk" aria-hidden="true">Sexo</label>
                <select id="sexo" name="sexo" required="">
                    <option disabled value="sexo" selected>Sexo</option>
                    <option value="Macho">Macho</option>
                    <option value="Hembra">Hembra</option>
                </select>

                <label for="chk" aria-hidden="true">Edad</label>
                <input id="edad" name="edad" type="number" placeholder="Edad" required="">

                <label for="chk" aria-hidden="true">Tamaño</label>
                <select id="tamaño" name="tamaño" required="">
                    <option disabled value="Tamaño" selected>Tamaño</option>
                    <option value="Pequeño">Pequeño</option>
                    <option value="Mediano">Mediano</option>
                    <option value="Grande">Grande</option>
                </select>

                <label for="chk" aria-hidden="true">Caracter</label>
                <input id="caracter" name="caracter" type="text" placeholder="Caracter" required="">

                <label for="chk" aria-hidden="true">Subir imagen</label>
                <input id="imagen" name="imagen" type="file" placeholder="Subir imagen" required="">
                
                <label for="chk" aria-hidden="true">Descripcion</label>
                <textarea id="descripcion" name="descripcion" rows="10" cols="40" placeholder="Escribe aquí una descripcion de la mascota" required=""></textarea><br>
                <input style="background-color:#F24E1E;border:none;border-radius:30px;margin-top:10px;margin-bottom:10px;width:30%;padding:10px;color:white;font-size:20px" id="enviar" name="enviar" type="submit" value="Enviar">
            </form>
        </div>        
    </div>  
    

    <div class="linea"></div>
<footer class="pie"> 
    <h6>Adopcan</h6>
    <h6>Terminos y condiciones</h6>
</footer>
</body>
</html>