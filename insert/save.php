<?php

if (empty($_POST)) {//lo direcciono al index principal
    header("location: ./index.php");
}

function save($name, $phone, $email){
   require_once "./../database/conexion.php";
   $query = "INSERT INTO contactos (nombre,telefono, email) VALUES ('$name', '$phone','$email' )";
   $saved = mysqli_query($connection, $query);

   if ($saved) {
       header("location: ./index.php?status=success");
   }else {
       echo "Error insertando: ". mysqli_error($connection);
   }

}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : ""; //si trae nombre por post adopta ese nombre o si  no lo toma vacio
$telefono = $_POST['telefono'] ?? "";
$correo = $_POST['email'] ?? "";

save($nombre,$telefono,$correo); // llamo la funcion y envio los parametros







