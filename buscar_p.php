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
    
    <title>Buscar Perros</title>
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
        <img style="width:100%" src="imagenes/b_perro.png" alt="">
    </div>
    <form action="" method="POST">
        <div style="background-color:#120755; width:100%;height:150px; display:flex; align-items:center;justify-content:center;">
            <input style="width:80%;display:flex;align-items:center;margin:10px;padding:10px;border:none;border-radius:30px;"type="search" name="search" id="search">
            <input style="background-color:#F24E1E;color:white;margin:10px;padding:10px;border:none;border-radius:30px;width:10%;" id="buscar" name="buscar" type="submit" value="Buscar">
        </div>
    </form>


<?php
if(isset($_POST['buscar'])){
    $buscar = $_POST['search'];
    require 'conexion_db.php';
    $sql = "SELECT id_perro, nombre, fecha_ingreso, sexo, edad, tamaño, caracter, descripcion, imagen FROM perros WHERE nombre = '$buscar'";
    $resultset = mysqli_query($db_connection, $sql) or die("database error:". mysqli_error($db_connection));
    while( $record = mysqli_fetch_assoc($resultset) ) {
    ?>
    <form action="perfilp.php" method="post">
        <div class="tabla2" style="width:100%;">
            <div class="columna1" style="display:flex; align-items:center; justify-content:center;">
                <div class="tarjeta" style="width:50%;height:100%;display:flex;border:solid; border-width:10px;border-color:#120755;align-items:center;justify-content:center;">
                    <img class="image"src="<?php echo ($record['imagen']);?>"/>
                    <input name="perfil" class="etiqueta" type="submit" value="Ver perfil">
                    <div class="desc">
                        <h1><?php echo $record['nombre']; ?></h1>
                        <h5 style="display:flex; text-align:center; justify-content:center;">Añadido el <?php echo $record['fecha_ingreso'];?></h5>
                        <div class="parrafo1">
                            <h6>Sexo: <?php echo $record['sexo']; ?></h6>
                            <h6>Edad: <?php echo $record['edad']; ?></h6>
                        </div>
                        <div class="parrafo2">
                            <h6>Tamaño: <?php echo $record['tamaño']; ?></h6>
                            <h6>Caracter: <?php echo $record['caracter']; ?></h6>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </form>
    <?php } 
  }
?>

    
    </div>
    <div class="linea"></div>
<footer class="pie"> 
    <h6>Adopcan</h6>
    <h6>Terminos y condiciones</h6>
</footer>
</body>
</html>