<!DOCTYPE html>
<html lang="en">
	<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
		<link rel=StyleSheet href="estilos/estilos.css" type="text/css" media=screen>
    	<link rel="preconnect" href="https://fonts.googleapis.com">
    	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">

        <meta charset="UTF-8">
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
        <img style="width:100%" src="imagenes/ban.jpg" alt="">
    </div>
    <div style="background-color:#F24E1E; height:100px; display:flex; align-items:center;">
        <h5 style="margin-left:20px; color:white;font-family: 'Italiana', serif; font-size: 20px;">Galería de imágenes</h5>
    </div>
        
       <h1></h1>
        <hr/>
        <div style='display:flex;flex-wrap: wrap;'>
            <?php
            $imagenes = scandir("../base_img");
            for ($i = 2; $i < count($imagenes); $i++) {
                ?>
                <div class="card" style="width:200px" >
                    <img style="height:200px;"class="card-img-top" src="../base_img/<?= $imagenes[$i] ?>" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"><?= $imagenes[$i] ?></h4>

                    </div>
                </div>
                <?php
            }
            ?>
        </div>
	 
	<div class="linea"></div>
    <div class="pie"> 
        <h6>Adopcan</h6>
        <h6>Terminos y condiciones</h6>
    </div>
    </body>
</html>