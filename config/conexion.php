<?php
    $nombreServidor = "DESKTOP-SI6K51R";
    $usuario ="sa";
    $contraseña="Garcia978M";
    $NombreBaseDatos ="Pruba";

    try{
        $conn =new PDO("sqlsrv:server=$nombreServidor;database=$NombreBaseDatos",$usuario,$contraseña);
        // echo "conexion segura";

    }catch(Exception $e){
        echo "conexion fallo" .$e->getMessage();
    }



?>
