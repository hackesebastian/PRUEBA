<?php

class pacientes extends controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje2 = "";
        $this->view->mensaje = "PACIENTES";
        $this->view->mostrarP = [];
        
       // echo "<p>Nuevo controlador main </p>";
    }


    function render(){
        
        $mostrarP = $this->model->get2();
        $this->view->mostrarP = $mostrarP;
        $this->view->render('pacientes/index');
        
    }
    function registrarP(){
        $Tdocumento = $_POST['Tdocumento'];
        $numeroD = $_POST['numeroD'];
        $nombrePaciente = $_POST['nombrePaciente'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $fechaNacimiento = $_POST['fechaNacimiento'];

        $mensaje2 = '';


        if($this->model->insert(['Tdocumento' => $Tdocumento,'numeroD' => $numeroD,'nombrePaciente' => $nombrePaciente,'apellido' => $apellido,'correo' => $correo,'fechaNacimiento' => $fechaNacimiento])){
            $mensaje2 = 'Nuevo Paciente Guardado F5 recargar página para actualizar';
        }else{
            $mensaje2 = 'Error al cargar los datos <br> verifica que estén todos en orden recuerda que no se permiten datos repetidos <br> verifica los datos de la lista y vuelve a intentarlo';
        } 

        $this->view->mensaje2 = $mensaje2;
        $this->render();
        
    }


    
}
?>