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
    <form action="<?php echo constant('URL'); ?>hospitales/actualizarHospital" method="post" class="container-center p-4" >
        <h2 class="text-center text-secondary"><?php echo $this->mensaje;?></h2>
        <div class="mb-5">
            <label for="numero" class="form-label">CODIGO DEL HOSPITAL</label>
            <p class="errores"><?php echo $this->mensaje1;?></p>
            <input type="text" name="numero" placeholder="solo numeros por favor"  class="form-control" value="<?php echo $this->mostrar->Mnumero; ?>"  minlength="4" maxlength="4" disabled >
        </div>
        
        <div class="mb-3">
            <label for="nombreH" class="form-label">NOMBRE DEL HOSPITAL</label>
            <input type="text" style="text-transform:uppercase;" placeholder="Instituto..." name="nombreH" class="form-control" value="<?php echo $this->mostrar->MnombreH; ?>" required>
        </div>
        <input type="submit" name="guardar" onclick="return confirmInsert()" value="ACTULIZAR"  class="btn btn-primary">
    </form>
</section>


<footer><?php require 'VIEWS/footer.php'; ?></footer>
</body>
</html>