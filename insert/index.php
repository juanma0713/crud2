<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./../CSS/bootstrap.min.css">
</head>

<body>   
    <div class="card col-8 mt-5 mx-auto" style="width: 18rem;">
        <form action="./save.php" method="POST" class="card-body">
            <h1 class="card-tittle">Insert (Crear)</h1>
            <div class="col-12">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Juanito Perez">
            </div>
            <div class="col-12">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="8881234">
            </div>
            <div class="col-12">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="juanito.perez@example.com">
            </div>
            <button class="btn btn-primary col-12  mt-3">Guardar</button>
        </form>
    </div>

    <script src="./../js/bootstrap.min.js"></script>
</body>

</html>