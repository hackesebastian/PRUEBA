<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo constant('URL');  ?>public/img/icono.ico" />
    <title>Oo ocurrio un Error!! </title>
</head>
<body>
<?php require 'VIEWS/header.php'; ?>
<h1 align="center">  <?php echo $this->mensaje;?>  </h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require 'VIEWS/footer.php'; ?>






</body>     
</html>