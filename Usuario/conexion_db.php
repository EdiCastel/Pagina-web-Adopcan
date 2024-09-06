<?php
//archivo de conexión a la base de datos		
		
$db_connection = mysqli_connect("localhost","root","1234","adopcan");
								//(host, usuario, clave, basededatos)
// Verificar la conexiòn
if (mysqli_connect_errno()){
    echo "Error al intentar conectarse con MySQL: " . mysqli_connect_error();
}
?>