<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION HOSPITALARIA</title>
    <link rel="shortcut icon" href="public/img/icono.ico" />
    <link rel="stylesheet" href="<?php echo constant('URL');  ?>public/css/defaul.css">

</head>
<body>
<?php require 'VIEWS/header.php'; ?>

<section>
    <form action="" method="post" class="container-center p-5" >
        <h2 class="text-center text-secondary">REGISTRAR <?php echo $this->mensaje;?></h2>
        <div class="mb-5">
            <label for="fechaIngreso" class="form-label">FECHA DE INGRESO</label>
            <input type="date" id="fechaIngreso" name="fechaIngreso" value="" min="" max="2030-12-31" required>
        </div>
        <div class="mb-5">
            <label for="fechaSalida" class="form-label">FECHA DE SALIDA</label>
            <input type="date" id="fechaSalida" name="fechaSalida" value="" min="" max="2030-12-31" required>
        </div>
        <input type="submit" name="guardar" onclick="return confirmInsert()" value="guardar" class="btn btn-primary">
    </form>
</section>

<section>
    <article>
        <div class="p-5">
            <p>Recuerda que las fechas activas no se pueden registrar 2 veces por favor verifica que no coincidan con la de la tabla</p>
        </div>
    </article>
    <articulo class=" table-responsive container-fluid row p-5">
        <table id='read' class="table table-striped">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID HOSPITALIZACION</th>
                        <th scope="col">T_DOCUMENTO</th>
                        <th scope="col">N_DOCUMENTO</th>
                        <th scope="col">CODIGO HOSPITAL</th>
                        <th scope="col">FECHA DE INGRESO</th>
                        <th scope="col">FECHA DE SALIDA</th>
                        <th scope="col">FECHA DE CREACION</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($this->mostrarG as $row){
                        $mostrarG = new Mgestion();
                        $mostrarG = $row;
                    
                    ?>
                    <tr>
                        <th><?php echo $mostrarG->id_hospital;  ?></th>
                        <td><?php echo $mostrarG->PTdocumento;  ?></td>
                        <td><?php echo $mostrarG->PnumeroD;  ?></td>
                        <td><?php echo $mostrarG->Pnumero;  ?></td>
                        <td><?php echo $mostrarG->PfechaI;  ?></td>
                        <td><?php echo $mostrarG->PfechaS; ?></td>
                        <td><?php echo $mostrarG->PfechaC;  ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a onclick="return Update()"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a onclick="return confirmDelete()"><i class="fa-solid fa-trash"></i></a></td>
                    </tr> 
                    <?php  } ?> 
                </tbody>
        </table>
    </articulo>
</section>



<?php require 'VIEWS/footer.php'; ?>
</body>
</html>