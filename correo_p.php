<?php
session_start();
require 'conexion_db.php';

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
    
    <title>Solicitud de adopcion</title>
</head>
<body style="background-color:#120755;">
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
        <img style="width:100%;height: 300px;;" src="imagenes/Frame 142.png" alt="">
    </div>
    <div style="background-color:#F24E1E; height:100px; display:flex; align-items:center;">
        <h5 style="margin-left:20px; color:white;font-family: 'Italiana', serif; font-size: 20px;">Solicitud de adopcion de un perro</h5>
    </div>
<?php
if(isset($_POST['formulario'])){

   require 'conexion_db.php';
   $sql = "SELECT * FROM form_perro";

   $resultset = mysqli_query($db_connection, $sql) or die("database error:". mysqli_error($db_connection));
   while( $record = mysqli_fetch_assoc($resultset)) {
   ?>
   
    <div style="background-color:#120755; color:white;margin:50px;">
        <h6>Nombre del solicitante: <?php echo $record['nombre']; ?></h6>
        <h6>¿A quién quiere adoptar?:  <?php echo $record['Res_1']; ?></h6>
        <h6>Colonia:  <?php echo $record['colonia']; ?></h6>
        <h6>Delegación:  <?php echo $record['delegacion']; ?></h6>
        <h6>Ciudad: <?php echo $record['ciudad']; ?></h6>
        <h6>Código Postal:  <?php echo $record['cod_postal']; ?></h6>
        <h6>¿Vive en casa o departamento? ¿Propio o rentado?:  <?php echo $record['opcion1']; ?></h6>
        <h6>¿Qué edad tiene?:  <?php echo $record['edad']; ?></h6>
        <h6>¿Qué edades tienen las personas que vivirán con él animal?:  <?php echo $record['Res_2']; ?></h6>
        <h6>Profesion:  <?php echo $record['profesion']; ?></h6>
        <h6>¿Tiene más animales? ¿Perros o gatos? ¿Cuántos? ¿De qué edad?: <?php echo $record['Res_3']; ?></h6>
        <h6>¿Ha tenido gatos antes? ¿Qué pasó con ellos?:  <?php echo $record['Res_4']; ?></h6>
        <h6>¿Cuál es el gasto medio que crees que puedes gastar en un perro al mes?:  <?php echo $record['Res_5']; ?></h6> 
        <h6>¿Cuánto tiempo pasará el perro sin compañía humana?:  <?php echo $record['Res_6']; ?></h6>
        <h6>¿Dónde dormirá el perro?:  <?php echo $record['Res_7']; ?></h6>
        <h6>¿Cuántas veces saldrá a pasear al día? ¿Cuánto tiempo en total?:  <?php echo $record['Res_8']; ?></h6>  
        <h6>Si sale de vacaciones, ¿con quién dejará al perro?:  <?php echo $record['Res_9']; ?></h6>
        <h6>Si te cambias de país o casa y no puedes llevar al perro, ¿qué harías con él?:  <?php echo $record['Res_10']; ?></h6>
        <h6>Se compromete a hacerte cargo de él el resto de su vida, una media de 15 años?:  <?php echo $record['opcion2']; ?></h6>
        <h6>¿Tiene la capacidad económica necesaria para mantenerlo?:  <?php echo $record['opcion3']; ?></h6>
        <h6>¿Por qué quiere adoptar a este perro?:  <?php echo $record['Res_11']; ?></h6>
        <h6>¿Le gusto algún otro perro de la lista en concreto?:  <?php echo $record['Res_12']; ?></h6>
        <h6>Celular:  <?php echo $record['celular']; ?></h6>
        <h6>Email:  <?php echo $record['correo']; ?></h6>
        <h6>Perfil en facebook:  <?php echo $record['Res_13']; ?></h6>
        <h6>Perfil en Instagram:  <?php echo $record['Res_14']; ?></h6>
        <h6>¿Cómo conocio nuestra fundación?:  <?php echo $record['Res_15']; ?></h6>


    </div>
    <?php 
    } 
}
?>


    <div class="linea"></div>
<footer class="pie"> 
    <h6>Adopcan</h6>
    <h6>Terminos y condiciones</h6>
</footer>
</body>
</html>


