<?php
require_once("../../config/config.php");
$id = $_GET['id'];
$query = "SELECT * FROM usuarios";
$result = $conexion->query($query);

$record = $result->fetch_assoc();
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
           <form action="config/update-users.php" method="POST">
            <div class="row at-7">
            <div class="col-7"></div>
                <label for="" class="form-label">correo</label>
                <input type="text" class="form-control" name="correo" id="correo" value=<?php echo $record['correo']?>>
              
                </div>
                <div>
               
                <div class="col-7"></div>
                <label for="contraseña" class="form-label">contraseña</label>
                <input type="text" class="form-control" name="contraseña" id="contraseña" value=<?php echo $record['contraseña']?>>
                    </div>
                
                <div class="col-7"></div>
                <label for="descripcion" class="form-label">telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" value=<?php echo $record['telefono']?>>
                    </div>

                    <div class="col-7"></div>
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value=<?php echo $record['nombre']?>>
                    </div>
                    
                    <div class="col-7"></div>
                <label for="status" class="form-label">status</label>
                <input type="text" class="form-control" name="status" id="status" value=<?php echo $record['status']?>>
                    </div>

                    <div class="col-7">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-success">Guardar</button>
                    </div>

                    
            </form>
            
        </div>
    </div>
</body>
</html>

