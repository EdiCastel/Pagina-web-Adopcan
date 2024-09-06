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

    </head>
    <body style="background-color:#120755;color:white;">

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
        <img style="width:100%" src="imagenes/ban.jpg" alt="">
    </div>
    <div style="background-color:#F24E1E; height:100px; display:flex; align-items:center;">
        <h5 style="margin-left:20px; color:white;font-family: 'Italiana', serif; font-size: 20px;">Galeria de imagenes</h5>
    </div><br>
     <?php
     $borrar= filter_input(INPUT_GET, 'borrar');
     if(!empty($borrar)){
         unlink("base_img/".$borrar);
     }
     if (isset($_FILES['imagen'])) {
         if (explode("/", $_FILES['imagen']['type'])[0] == 'image') {
             move_uploaded_file($_FILES['imagen']['tmp_name'], "base_img/" . $_FILES['imagen']['name']);
             ?>
             <div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Ok</strong> El archivo se ha subido con éxito.
             </div>
             <?php
         } else {
             ?>
             <div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Error</strong> El archivo subido no es de tipo imagen.
             </div>
             <?php
         }
     }
     ?>
     <div style='display:flex;flex-wrap: wrap;margin:20px;'>
         <?php
         $imagenes = scandir("base_img/"); //asegurate de añadir la ruta correcta a tu carpeta de imágenes
         for ($i = 2; $i < count($imagenes); $i++) {
             ?>
             <div class="card" style="width:200px;color:black;" >
                 <img style="height:200px;"class="card-img-top" src="base_img/<?= $imagenes[$i] ?>" alt="Card image">
                 <div class="card-body">
                     <h4 class="card-title"><?= $imagenes[$i] ?></h4>
                     <a href="?borrar=<?= $imagenes[$i] ?>" class="btn btn-danger">Borrar imagen</a>
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