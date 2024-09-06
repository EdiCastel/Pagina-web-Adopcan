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
        <img style="width:100%;height: 300px;;" src="imagenes/Frame 142.png" alt="">
    </div>
    <div style="background-color:#F24E1E; height:100px; display:flex; align-items:center;">
        <h5 style="margin-left:20px; color:white;font-family: 'Italiana', serif; font-size: 20px;">Perfil de la mascota</h5>
    </div>
<?php
if(isset($_POST['perfil'])){

    require 'conexion_db.php';
    $sql = "SELECT id_perro, nombre, fecha_ingreso, sexo, edad, tamaño, caracter, descripcion, imagen FROM perros";
    $resultset = mysqli_query($db_connection, $sql) or die("database error:". mysqli_error($db_connection));
    while( $record = mysqli_fetch_assoc($resultset) ) {
    ?>
    <div style="background-color:#120755;">
    <div style="width:100%;display:flex;flex-direction:row;">
        <div style="width:50%;height:100%;display:flex;">
            <img style="width:100%;height:500px;margin-left:20px;margin-top:40px;border:solid;border-color:black;border-width:20px;" src="../<?php echo ($record['imagen']);?>"/>
        </div>
        <div style="width:50%;height:500px;display:flex;background-color:#120755;flex-direction:column; color:white;align-items:center;margin-top: 40px;">
            <form style="margin-top:20px;"action="fperros.php" method="post">
                <h1><?php echo $record['nombre']; ?></h1><br>
                <input type="submit"value="¡Quiero adoptarlo!" style="width: 100%;height:50px;font-family:'Italiana',serif;font-size: 30px;background-color: #F24E1E;border-style:none;border-radius: 30px;color: white;"><br><br>
                <h5>Añadido el <?php echo $record['fecha_ingreso'];?></h5><br>
                <h6>Sexo: <?php echo $record['sexo']; ?></h6><br>
                <h6>Edad: <?php echo $record['edad']; ?></h6> <br>      
                <h6>Tamaño: <?php echo $record['tamaño']; ?></h6><br>
                <h6>Caracter: <?php echo $record['caracter']; ?></h6><br>
            </form>
        </div>
    </div>
    <div style="height:100%;display:flex;flex-direction:column;margin-left:20px;background-color:#120755;color:white">
        <h1><?php echo $record['nombre']; ?></h1>
        <h5>Añadido el <?php echo $record['fecha_ingreso'];?></h5>
        <h6>Sexo: <?php echo $record['sexo']; ?></h6>
        <h6>Edad: <?php echo $record['edad']; ?></h6>       
        <h6>Tamaño: <?php echo $record['tamaño']; ?></h6>
        <h6>Caracter: <?php echo $record['caracter']; ?></h6>
        <h6>Descripcion: <?php echo $record['descripcion']; ?></h6><br>
    </div>
    </div>
    <?php 
    } 
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
