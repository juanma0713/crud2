<?php 

/*function save($name, $phone, $email){

    $connection = mysqli_connect('localhost','root', '','crud_adsi');
    $query = "INSERT INTO contactos (nombre,telefono,email) VALUES ('$name','$phone','$email')";
    $saved = mysqli_query($connection, $query);

    if($saved){
        echo"Guardado Exitosamente";
    }else{
        echo "Error insertando: ". mysqli_error($connection);
    }
}*/

function update($name, $phone, $email,$id){
    $connection = mysqli_connect('localhost','root', '','crud_adsi');
    $query = "UPDATE contactos SET  nombre = '$name', telefono = '$phone', email = '$email' where id = $id";
    $saved = mysqli_query($connection, $query);

    if($saved){
        echo "Actualizado de forma exitosa";
    }else{
        echo "Error insertando: ". mysqli_error($connection);
    }

}
