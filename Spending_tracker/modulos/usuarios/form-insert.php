<?php
require_once("../../config/config.php");
$query = "SELECT * FROM usuarios";
$result = $conexion->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container"> <div class="container-fluid">
    <div class="row at-5">
        <div class="col-7">
            <h1>usuarios <a href="index.php" class= "btn btn-secondary">Regresar</a></h1>
            </div>
           </div>
           <form action="../../config/insert-users.php" method="POST">
            <div class="row at-7">
            <div class="col-7"></div>
                <label for="" class="form-label">correo</label>
                <input type="text" class="form-control" name="correo" id="correo">
                </div>
                <div>
                    </div>
                    <div class="col-7"></div>
                <label for="contraseña" class="form-label">contraseña</label>
                <input type="text" class="form-select" name="contraseña" id="contraseña">
                    </div>
                <div class="col-7"></div>
                <label for="telefono" class="form-label">telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono">
                    </div>
                    </div>
                <div class="col-6"></div>
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                </select>
                    </div>
                    
                    <div class="col-6"></div>
                <label for="status" class="form-label">status</label>
                <input type="text" class="form-control" name="status" id="status">
                    </div>
                    <div class="col-7">
                <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
            </form>
            
        </div>
    </div>
</body>
</html>