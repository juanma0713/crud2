<?php 

function listar()
{

    $connection = mysqli_connect('localhost','root', '','crud_adsi');
    $query = "SELECT * FROM contactos";
    $data = mysqli_query($connection, $query, MYSQLI_ASSOC);

    foreach ($data as $row)
    {
        echo $row['id']."<br>";
        echo $row['nombre']."<br>";
        echo $row['telefono']."<br>";
        echo $row['email']."<br>";
        echo "-------------------------------"."<br>";
    }
}


//consulta con parametro


$busqueda = "Estefania";

$connection = mysqli_connect('localhost','root', '','crud_adsi');
    $query = "SELECT * FROM contactos where nombre like '%$busqueda%'";
    $data = mysqli_query($connection, $query, MYSQLI_ASSOC);

    foreach ($data as $row)
    {
        echo "El parametro de busqueda es: $busqueda"."<br>";
        echo "ID: ".$row['id']."<br>";
        echo $row['nombre']."<br>";
        echo $row['telefono']."<br>";
        echo $row['email']."<br>";
    }




        
