<?php
require_once("../../config/config.php");
$id = $_GET['id'];
$query = "SELECT * FROM gastos_categoria";
$result = $conexion->query($query);

$query2 = "SELECT * FROM gastos WHERE id = $id";
$result2 = $conexion->query($query2);
$record = $result2->fetch_assoc();
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
            <h1>gastos <a href="index.php" class= "btn btn-secondary">Regresar</a></h1>
            </div>
           </div>
           <form action="../../config/update-spending.php" method="POST">
            <div class="row at-7">
            <div class="col-7"></div>
                <label for="" class="form-label">cantidad</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad"value=<?php echo $record['cantidad']?>>
                </div>
                <div>
                    </div>
                    <div class="col-7"></div>
                <label for="cantidad" class="form-label">categoria</label>
                <select name="categoria" class="form-select" name="categorias" id="categoria" >
                    <option value="1" selected>Seleciona una categoria</option>
                    <?php
                    while($row = $result->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row ['id']; ?>"><?php echo $row ['nombre']; ?></option>
                    <?php }  ?>
                </select>
                    </div>
                    <div>
                    <div class="col-7"></div>
                <label for="descripcion" class="form-label">descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value=<?php echo $record['descripcion']?>>
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