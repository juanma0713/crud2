<?php

require_once "config.php";//solo muestra una vez en pantalla lo requerido

$connection = mysqli_connect(HOST_DB,USER_DB,PASSWORD_DB,NAME_DB);

if(!$connection){
    die("Error al conectar a la DB: ". mysqli_connect_error());
}