<?php

if(empty($_POST)){
    header("location: ./index.php");
}

function save($id, $name, $phone, $email){
    require_once "./../database/conexion.php";
    $query = "UPDATE contactos SET nombre = '$name', telefono = '$phone', email = '$email' WHERE id = $id";
    $save = mysqli_query($connection,$query);

    if($save){
        header("location: ./../details/index.php?id=$id");
    }else{
        echo "Error insertando: ".mysqli_error($conection);
    }
}

$id = isset($_POST['id']) ? $_POST['id'] : "";
$nombre = $_POST['nombre'] ?? "";
$telefono = $_POST['telefono'] ?? "";
$correo = $_POST['email'] ?? "";

save($id, $nombre,$telefono,$correo);