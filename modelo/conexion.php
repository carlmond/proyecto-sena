<?php


$servername = "bdmbotzhv63vquljsbn5-mysql.services.clever-cloud.com"; //Direccion del servidor MySQL
$username = ""; //Nombre de usuario de la base de datos
$password = ""; //Contraseña de la base de datos
$database = "bdmbotzhv63vquljsbn5";

//Creando conexión
$conn = new mysqli($servername, $username, $password, $database);


//Verificar conexión
if ($conn-> connect_error){
    die("Conexión Fallida: ". $con->connect_error);
}

?>