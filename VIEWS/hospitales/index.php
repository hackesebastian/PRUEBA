<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITALES</title>
    <link rel="shortcut icon" href="public/img/icono.ico" />
    <link rel="stylesheet" href=" <?php echo constant('URL');  ?>public/css/defaul.css">

</head>
<body>
<header><?php require 'VIEWS/header.php'; ?></header>
<section>
    <form action="<?php echo constant('URL'); ?>hospitales/registrarH" method="post" class="container-center p-4" >
        <h2 class="text-center text-secondary">REGISTRAR <?php echo $this->mensaje;?></h2>
        <div class="mb-5">
            <label for="numero" class="form-label">CODIGO DEL HOSPITAL</label>
            <p class="errores"><?php echo $this->mensaje1;?></p>
            <input type="text" name="numero" placeholder="solo numeros por favor"  class="form-control" id="numero"  minlength="4" maxlength="4" required>
        </div>
        
        <div class="mb-3">
            <label for="nombreH" class="form-label">NOMBRE DEL HOSPITAL</label>
            <input type="text" style="text-transform:uppercase;" placeholder="Instituto..." name="nombreH" class="form-control" id="nombreH" required>
        </div>
        <input type="submit" name="guardar" onclick="return confirmInsert()" value="guardar"  class="btn btn-primary">
    </form>
</section>
<section>
    <article>
        <div class="p-5">
            <p>Recuerda que el Nombre y el codigo del hospital no deben repetirse</p>
        </div>
    </article>
    <articulo id='read' class=" table-responsive container-fluid row p-5">
        <table class="table table-striped">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">CODIGO DE HOSPITAL</th>
                        <th scope="col">NOMBRE DEL HOSPITAL</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($this->mostrar as $row){
                            $mostrar = new Mhospitales();
                            $mostrar = $row;
                       
                    ?>
                    <tr>
                        <th><?php echo $mostrar->Mnumero; ?></th>
                        <td><?php echo $mostrar->MnombreH; ?></td>
                        <td><a href="<?php echo constant('URL'). 'hospitales/verHospital/' . $mostrar->Mnumero; ?>" onclick="return Update()"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="<?php echo constant('URL'). 'hospitales/eliminarHospital/' . $mostrar->MnombreH; ?>" onclick="return confirmDelete()"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php  } ?>
                </tbody>
        </table>
    </articulo>
</section>
<footer><?php require 'VIEWS/footer.php'; ?></footer>
</body>
</html>