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

    <title>Menu principal</title>
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

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/perro1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/gato1.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/perro2.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/gato2.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/perro3.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/gato3.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/perro4.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/gato4.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/perro5.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="imagenes/gato5.jpg" class="d-block w-100" alt="..."style="height: 500px;">
            </div>   
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev" style="height: 500px;">
            <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next" style="height: 500px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <div>
        <h1 style="text-align:center; margin-top:100px;margin-bottom:100px;">¿Que desea adoptar un perro o un gato?</h1>
        <div class="tabla1">
            <div style="width:50%; display:flex; justify-content:center; align_items:center">
                <a style="width:80%;" href="fperros.php"><img style="width:100%;"src="imagenes/perros.png"></a>
            </div>
            <div style="width:50%; display:flex; justify-content:center; align_items:center">
                <a style="width:80%;" href="fgatos.php"><img style="width:100%;" src="imagenes/gatos.png"></a>
            </div>
        </div>
    </div>

    <h1 style="text-align:center; margin-top:100px;margin-bottom:100px;">Ultimas llegadas</h1>
    <div class="tabla2">
        <div class="columna1">
        <?php
        require 'conexion_db.php';
        $sql = "SELECT id_gato, nombre, fecha_ingreso, sexo, edad, descripcion, imagen FROM gatos";
        $resultset = mysqli_query($db_connection, $sql) or die("database error:". mysqli_error($db_connection));
        while( $record = mysqli_fetch_assoc($resultset) ) {
        ?>

            <form class="tarjeta" action="perfilg.php" method="post">
                <img class="image" src="<?php echo $record['imagen']; ?>">
                <input class="etiqueta" name="perfil" type="submit" value="Ver perfil">
                <div class="desc">
                    <h1><?php echo $record['nombre']; ?></h1>
                    <h5>Añadido el <?php echo $record['fecha_ingreso']; ?></h5>
                    <div class="parrafo1">
                        <h6>Sexo: <?php echo $record['sexo']; ?></h6>
                        <h6>Edad: <?php echo $record['edad']; ?></h6>
                    </div>
                </div>
            </form>   
            <?php
            }
        ?>      
        </div>

        <div class="columna2">
            <?php
            require 'conexion_db.php';
            $sql = "SELECT id_perro, nombre, fecha_ingreso, sexo, edad, tamaño, caracter, descripcion, imagen FROM perros";
            $resultset = mysqli_query($db_connection, $sql) or die("database error:". mysqli_error($db_connection));
            while( $record = mysqli_fetch_assoc($resultset) ) {
            ?>
                <form class="tarjeta" action="perfilp.php" method="post">
                    <img class="image" src="<?php echo $record['imagen']; ?>">
                    <input class="etiqueta" name="perfil" type="submit" value="Ver perfil">
                    <div class="desc">
                        <h1><?php echo $record['nombre']; ?></h1>
                        <h5>Añadido el <?php echo $record['fecha_ingreso']; ?></h5>
                        <div class="parrafo1">
                            <h6>Sexo: <?php echo $record['sexo']; ?></h6>
                            <h6>Edad: <?php echo $record['edad']; ?></h6>
                        </div>
                        <div class="parrafo2">
                            <h6>Tamaño: <?php echo $record['tamaño']; ?></h6>
                            <h6>Caracter: <?php echo $record['caracter']; ?></h6>
                        </div>
                    </div>
                </form>   
            <?php
            }
            ?>       
        </div>

    </div>
    <div class="linea"></div>
    <div class="pie"> 
            <h6>Adopcan</h6>
            <h6>Terminos y condiciones</h6>
    </div>
</body>
</html>
