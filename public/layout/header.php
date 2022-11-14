<!DOCTYPE html>
<?php
require_once "config/conexion.php";

//var_dump($datos);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/estilos.css" type="text/css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6e65636a0d.js" crossorigin="anonymous"></script>
    <title>Formulario de entrada</title>
</head>
<body>  
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio">BASE DE DATOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="HOSPITAL">HOSPITAL</a>
        </li>
        <li class="nav-item">
          <a href="PACIENTE" class="nav-link" >PACIENTE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="HOSPITALIZACION">HOSPITALIZACION</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
 
  if(isset($_GET['ruta'])){
    if($_GET['ruta']=="PACIENTE"|| 
      $_GET['ruta']=="HOSPITALIZACION"|| 
      $_GET['ruta']=="HOSPITAL"|| 
      $_GET['ruta']=="inicio"){

    include "models/".$_GET['ruta'].".php";
    }
  };
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>