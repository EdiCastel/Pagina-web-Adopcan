<?php
session_start();
require 'conexion_db.php';
require 'ing_form_p.php';

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

    <title>Formulario de adopcion de perros</title>
</head>
<body>
<nav class="navB">
        <div class="header">
            <img src="imagenes/logo.png">
            <h1>Adopcan</h1>
        </div>
        <div class="seccion">
            <a style="text-decoration:none" href="panel_usuario.php">INICIO</a>
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
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">BUSCAR MASCOTA</a>
                    <div class="dropdown-menu"style="background-color:#F24E1E;">
                        <a class="dropdown-item" style="background:none;" href="buscar_p.php">BUSCAR UN PERRO</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="background:none;" href="buscar_g.php">BUSCAR UN GATO</a>
                    </div>
                </li>
            </ul>
            <a style="text-decoration:none" href="galeria.php">GALERIA</a>
            <a style="text-decoration:none" href="salir.php">SALIR</a>
        </div>
    </nav>
    <div class="linea"></div>
    <div class="banner">
        <img style="width:100%" src="imagenes/fadop_p.png" alt="">
    </div>
    <div style="background-color:#F24E1E; height:100px; display:flex; align-items:center;">
        <h5 style="margin-left:20px; color:white;font-family: 'Italiana', serif; font-size: 20px;">Añade los datos a continuación para el formato de solicitud:</h5>
    </div>

    <div style="background-color:#120755;width: 100%;display: flex;flex-direction: row;">
        <div style="width: 50%;display: flex;flex-direction: column;">
        <form style="display:flex;flex-direction:column;color:white;margin:10px;" action="" method="post">
            <label for="chk" aria-hidden="true">Tu nombre completo</label>
            <input name="nombre" type="text" placeholder="Nombre" required="">

            <label for="chk" aria-hidden="true">¿A quién quieres adoptar?</label>
            <input name="Res_1" type="text" placeholder="¿A quién quieres adoptar?" required="">

            <label for="chk" aria-hidden="true">Colonia</label>
            <input name="colonia" type="text" placeholder="Colonia" required="">

            <label for="chk" aria-hidden="true">Delegación </label>
            <input name="delegacion" type="text" placeholder="Delegación " required="">

            <label for="chk" aria-hidden="true">Ciudad</label>
            <input name="ciudad" type="text" placeholder="Ciudad" required="">

            <label for="chk" aria-hidden="true">Código Postal</label>
            <input name="cod_postal" type="text" placeholder="Código Postal" required=""><br>

            <label for="chk" aria-hidden="true">¿Vives en casa o departamento? ¿Propio o rentado?</label>
            <div class="chek">
                <input name="opcion1" type="checkbox"  value="Casa propia" >Casa propia<br>
            </div>
            <div class="chek">
                <input name="opcion1" type="checkbox"  value="Casa rentada" >Casa rentada<br>    
            </div>
            <div class="chek">
                <input name="opcion1" type="checkbox"  value="Departamento propio" >Departamento propio<br>
            </div>
            <div class="chek">
                <input name="opcion1" type="checkbox"  value="Departamento rentado" >Departamento rentado<br>    
            </div><br>

            <label for="chk" aria-hidden="true">¿Qué edad tienes?</label>
            <input name="edad" type="text" placeholder="¿Qué edad tienes?" required="">

            <label for="chk" aria-hidden="true">¿Qué edades tienen las personas que vivirán con él?</label>
            <input name="Res_2" type="text" placeholder="¿Qué edades tienen las personas que vivirán con él?" required="">

            <label for="chk" aria-hidden="true">Profesión</label>
            <input name="profesion" type="text" placeholder="Profesión" required="">

            <label for="chk" aria-hidden="true">¿Tienes más animales? ¿Perros o gatos? ¿Cuántos? ¿De qué edad?</label>
            <input name="Res_3" type="text" placeholder="¿Tienes más animales? ¿Perros o gatos? ¿Cuántos? ¿De qué edad?" required="">

            <label for="chk" aria-hidden="true">¿Has tenido perros antes? ¿Qué pasó con ellos? </label>
            <input name="Res_4" type="text" placeholder="¿Has tenido perros antes? ¿Qué pasó con ellos?" required="">

            <label for="chk" aria-hidden="true">¿Cuál es el gasto medio que crees que puedes gastar en un perro al mes?</label>
            <input name="Res_5" type="text" placeholder="¿Cuál es el gasto medio que crees que puedes gastar en un perro al mes?" required="">

            <label for="chk" aria-hidden="true">¿Cuánto tiempo pasará el perro sin compañía humana?</label>
            <input name="Res_6" type="text" placeholder="¿Cuánto tiempo pasará el perro sin compañía humana?" required=""><br>

            <input style="background-color:#F24E1E;border:none;border-radius:30px;margin-top:10px;margin-bottom:10px;width:30%;padding:10px;color:white;font-size:20px"id="enviar" name="enviar" type="submit" value="Enviar">
        </div>

        <div style="width: 50%;display: flex;flex-direction: column;color:white;margin:10px;">
            <label for="chk" aria-hidden="true">¿Dónde dormirá el perro?</label>
            <input name="Res_7" type="text" placeholder="¿Dónde dormirá el perro?" required="">

            <label for="chk" aria-hidden="true">¿Cuántas veces saldrá a pasear al día? ¿Cuánto tiempo en total?</label>
            <input name="Res_8" type="text" placeholder="¿Cuántas veces saldrá a pasear al día? ¿Cuánto tiempo en total?" required="">

            <label for="chk" aria-hidden="true">Si sales de vacaciones, ¿con quién dejarás al perro?</label>
            <input name="Res_9" type="text" placeholder="Si sales de vacaciones, ¿con quién dejarás al perro?" required="">

            <label for="chk" aria-hidden="true">Si te cambias de país o casa y no puedes llevar al perro, ¿qué harías con él?</label>
            <input name="Res_10" type="text" placeholder="Si te cambias de país o casa y no puedes llevar al perro, ¿qué harías con él?" required=""><br>

            <label for="chk" aria-hidden="true">¿Te comprometes a hacerte cargo de él el resto de su vida, una media de 15 años?</label>
            <div class="chek">
                <input name="opcion2" type="checkbox"  value="Si" >Si<br>
            </div>
            <div class="chek">
                <input name="opcion2" type="checkbox"  value="No" >No<br>    
            </div><br>

            <label for="chk" aria-hidden="true">¿Tienes la capacidad económica necesaria para mantenerlo?</label>
            <div class="chek">
                <input name="opcion3" type="checkbox"  value="Si" >Si<br>
            </div>
            <div class="chek">
                <input name="opcion3" type="checkbox"  value="No" >No<br>    
            </div><br>  

            <label for="chk" aria-hidden="true">¿Por qué quieres adoptar a este perro? </label>
            <input name="Res_11" type="text" placeholder="¿Por qué quieres adoptar a este perro? " required="">

            <label for="chk" aria-hidden="true">¿Te ha gustado algún otro perro de la lista en concreto?</label>
            <input name="Res_12" type="text" placeholder="¿Te ha gustado algún otro perro de la lista en concreto?" required="">

            <label for="chk" aria-hidden="true">Celular</label>
            <input name="celular" type="tel" placeholder="Celular" required="">

            <label for="chk" aria-hidden="true">Email</label>
            <input name="correo" type="email" placeholder="Email" required="">

            <label for="chk" aria-hidden="true">Perfil en facebook</label>
            <input name="Res_13" type="text" placeholder="Perfil en facebook" required="">

            <label for="chk" aria-hidden="true">Perfil en Instagram</label>
            <input name="Res_14" type="text" placeholder="Perfil en Instagram" required="">

            <label for="chk" aria-hidden="true">¿Cómo conociste nuestra fundación?</label>
            <input name="Res_15" type="text" placeholder="¿Cómo conociste nuestra fundación?" required=""><br>

            <label for="chk" aria-hidden="true">Acepto el aviso de privacidad</label>
            <div class="chek">
                <input name="aviso" type="checkbox"  value="" required="">Sí, la acepto<br>
            </div>
        </form>
        </div>
    </div>
    
    </div>
    <div class="linea"></div>
<footer class="pie"> 
    <h6>Adopcan</h6>
    <h6>Terminos y condiciones</h6>
</footer>
</body>
</html>