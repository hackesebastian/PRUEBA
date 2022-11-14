<?php
require_once "../config/conexion.php";

if(isset($_POST['guardar'])){
    $codigo = $_POST['codigoh'];
    $nombreh = $_POST['nombrh'];
    $Tdocumento = $_POST['Tdocumento'];
    $documenton = $_POST['documenton'];
    $nombrep = $_POST['nombrep'];
    $apellido = $_POST['apellido'];
    $fechaNa = $_POST['fechaNa'];
    $email = $_POST['email'];
    $fechai = $_POST['fechai'];
    $fechas = $_POST['fechas'];
    $fregistro = $_POST['fregistro'];
    $HOSPITALIZACION = $_POST['ID_HOSPITALIZACION'];



    $consulta1 = $conn->prepare("INSERT INTO HOSPITALES (COD_HOSPITAL,NOMBRE) VALUES(:codigoh,:nombrh)");


    $consulta1->bindParam(':codigoh',$codigo);
    $consulta1->bindParam(':nombrh',$nombreh);


///mensaje de confirmacion
    if ($consulta1->execute()){

        
        echo '<script language="javascript">alert("REGISTRO GRABADO EXIOSAMENTE");window.location.href="../index.php"</script>';

    }else{
        echo '<script language="javascript">alert("ERROR AL REGISTRAR");window.location.href="../index.php"</script>';
    }
}





?>
