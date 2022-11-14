<!DOCTYPE html>
    <?php
  include_once 'config/conexion.php';
    $cantidad = 0;
    $query ="SELECT * FROM HOSPITALES";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/estilos.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulario de entrada</title>
</head>
<body> 
    <div class="table-responsive container-fluid row p-4">
        <table class="table table-striped">
            <thead class="bg-info">
                <tr>
                <th scope="col">CANTIDAD</th>
                <th scope="col">COD_HOSPITAL</th>
                <th scope="col">NOMBRE</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($registros as $fila) : ?>
                <?php $cantidad = $cantidad + 1 ?>
                    <tr>
                        <th><?php echo $cantidad; ?></th>
                        <td><?php echo $fila->COD_HOSPITAL; ?></td>
                        <td><?php echo $fila->NOMBRE; ?></td>
                        <td>
                        <a  href="controller/editar.php?id=<?php echo $cantidad;?>"><i class="fa-regular fa-pen-to-square"></i></a>
                        <td>
                        <a onclick="return confirmDelete()" href="controller/borrar.php?id=<?php echo $cantidad;?>"><i class="fa-solid fa-trash"></i></a></td>
                        </td>
                    </tr> 
                <?php endforeach;?>
            </tbody>

        </table>
    </div>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>