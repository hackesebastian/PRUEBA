<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PACIENTES</title>
    <link rel="shortcut icon" href="public/img/icono.ico" />
    <link rel="stylesheet" href="<?php echo constant('URL');  ?>/public/css/defaul.css">

</head>
<body>
     <?php require 'VIEWS/header.php'; ?>
<section>
    <form action="<?php echo constant('URL'); ?>pacientes/registrarP" method="post" class="container-center p-4" >
        <h2 class="text-center text-secondary">REGISTRAR <?php echo $this->mensaje;?></h2>
        <div class="mb-5">
        <label for="Tdocumento" class="form-label">TIPO DE DOCUMENTO</label>
        <select name="Tdocumento" id="Tdocumento">
            <option value="CC">CC</option>
            <option value="TI">TI</option>
            <option value="NIT">NIT</option>
            <option value="NIP">NIP</option>
            <option value="PAP">PAP</option>
            <option value="RC">RC</option>
        </select>
        </div>
        <div class="mb-5">
            <label for="numeroD" class="form-label">NUMERO DE DOCUMENTO</label>
            <input type="Number" name="numeroD" placeholder="Solo numeros por favor sin puntos"  class="form-control" id="numeroD"  required>
        </div>  
        <div class="mb-5">
            <label for="nombrePaciente" class="form-label">NOMBRE COMPLETO</label>
            <input type="text" name="nombrePaciente" placeholder="Solo un Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombrePaciente"  maxlength="30" required>
        </div>
        <div class="mb-5">
            <label for="apellido" class="form-label">APELLIDO COMPLETO</label>
            <input type="text" name="apellido" placeholder="Solo un Apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="apellido" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">CORREO ELECTRONICO</label>
            <input type="email" name="correo"  placeholder="abc1234@example.co"  class="form-control" id="correo" required>
        </div>
        <div class="mb-5">
            <label for="fechaNacimiento" class="form-label">FECHA DE NACIMIENTO</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" min="1899-12-31" max="" required>
        </div>
        <p class="errores"><?php echo $this->mensaje2;?></p>
        <input type="submit" name="guardar" onclick="return confirmInsert()" value="guardar" class="btn btn-primary">
    </form>
</section>
<section>
    <article>
        <div class="p-5">
            <p>Solo se puede registrar una vez el mismo paciente.</p>
        </div>
    </article>
    <articulo id='read' class=" table-responsive container-fluid row p-5">
        <table class="table table-striped">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">T_DOCUMENTO</th>
                        <th scope="col">N_DOCUMENTO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($this->mostrarP as $row){
                        $mostrarP = new Mpacientes();
                        $mostrarP = $row;
                    ?>
                    <tr>
                        <th><?php echo $mostrarP->MTdocumento; ?> </th>
                        <td><?php echo $mostrarP->MnumeroD; ?> </td>
                        <td><?php echo $mostrarP->MnombrePaciente; ?> </td>
                        <td><?php echo $mostrarP->Mapellido; ?> </td>
                        <td><?php echo $mostrarP->MfechaNacimiento; ?> </td>
                        <td><?php echo $mostrarP->Mcorreo; ?> </td>
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