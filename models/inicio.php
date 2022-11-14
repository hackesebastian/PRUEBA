<?php
  include_once 'config/conexion.php';
    $cantidad = 0;
    $query ="SELECT * FROM GESTION_HOSPITALARIA,HOSPITALES,PACIENTES";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container-center">
    <form action="controller/crear.php" method="post" class="container-center p-4" >
        <h2 class="text-center text-secondary">FORMULARIO</h2>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label" >CODIGO DEL HOSPITAL</label>
            <input type="number" name="codigoh" class="form-control" id="codigoh" aria-describedby="" max="9999" min="1">
        <div id="emailHelp" class="form-text">Lista de los que ya existen...</div>
                <?php foreach($registros as $fila) : ?>
                <?php $cantidad = $cantidad + 1 ?>
            <label for="ice-cream-choice"></label>
            <input list="ice-cream-flavors" id="ice-cream-choice" name="ice-cream-choice">
            <datalist id="ice-cream-flavors">
                <option value="<?php echo $fila->COD_HOSPITAL; ?>"><?php endforeach;?>
            </datalist>
        </div>

        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">NOMBRE DEL HOSPITAL</label>
            <input type="text" name="nombrh" style="text-transform:uppercase;"  class="form-control" id="exampleInputEmail1" onkeyup="javascript:this.value=this.value.toUpperCase();" required  >
            <div id="emailHelp" class="form-text">completo en MAYUS sostenida</div>
        </div>
        <div class="mb-2">
            <label for="Tdocumento" class="form-label">TIPO DE DOCUMENTO</label>
            <select name="Tdocumento" id="TdocumentoS">
                <option value="CC">CC</option>
                <option value="TI">TI</option>
                <option value="NIT">NIT</option>
                <option value="NIP">NIP</option>
                <option value="PAP">PAP</option>
                <option value="RC">RC</option>
            </select>
            <div id="emailHelp" class="form-text">Selecione una opcion</div>
        </div>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">NUMERO DE DOCUMENTO</label>
            <input type="Number" name="documenton" class="form-control" id="documenton" required  >
            <div id="emailHelp" class="form-text">claro sin (.) ni caracteres especiales</div>
        </div>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">NOMBRE DEL PACIENTE</label>
            <input type="text" style="text-transform:uppercase;" name="nombrep" class="form-control" id="exampleInputEmail1" onkeyup="javascript:this.value=this.value.toUpperCase();" required  >
            <div id="emailHelp" class="form-text">completo en MAYUS sostenida</div>
        </div>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">APELLIDOS DEL PACIENTE</label>
            <input type="text" style="text-transform:uppercase;" name="apellido" class="form-control" id="exampleInputEmail1" onkeyup="javascript:this.value=this.value.toUpperCase();" required  >
            <div id="emailHelp" class="form-text">completo en MAYUS sostenida</div>
        </div>
        <?php $fcha = date("Y-m-d");?>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">FECHA DE NACIMIENTO DEL PACIENTE</label>
            <input type="date" min="1890-01-01" max="<?php echo $fcha;?>" name="fechaNa" class="form-control" id="exampleInputEmail1" required  >
            <div id="emailHelp" class="form-text">seleciona el calendario</div>
        </div>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">EMAIL </label>
            <input type="email" name="email" class="form-control" placeholder="sophie@example.com" required  >
            <div id="emailHelp" class="form-text">Donde se le reenviara la informacion pertinente</div>
        </div>
        <div class="mb-2">
            <?php $fcha = date("Y-m-d");?>
            <label for="exampleInputEmail1" class="form-label">FECHA DE INGRESO</label>
            <input type="date" name="fechai" class="form-control" id="exampleInputEmail1" min="" max="<?php echo $fcha;?>" required  >
            <div id="emailHelp" class="form-text">completo en MAYUS sostenida</div>
        </div>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">FECHA DE SALIDA</label>
            <input type="date" name="fechas" class="form-control" id="exampleInputEmail1" min="<?php echo $fcha;?>" max="" required  >
            <div id="emailHelp" class="form-text">completo en MAYUS sostenida</div>
        </div>
        <label for="start">Fecha de registro</label>
        <input type="date" name="fregistro" id="start"  value="<?php echo $fcha;?>" min="<?php echo $fcha;?>" max="<?php echo $fcha;?>">
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">ID_DE HOSPITALIZACION </label>
            <input type="Number" name="ID_HOSPITALIZACION" value="" class="form-control" >
        </div>


        <?php 

            include_once 'config/conexion.php';         





            ?>
    <input type="submit" name="guardar" onclick="return confirmInsert()" value="guardar" class="btn btn-primary">

</form>

</div>