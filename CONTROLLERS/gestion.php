<?php

class gestion extends controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "HOSPITALIZACION";
        $this->view->mostrarG = [];
       // echo "<p>Nuevo controlador main </p>";
    }
    function render(){
        
        $mostrarG = $this->model->get3();
        $this->view->mostrarG = $mostrarG;
        $this->view->render('gestion/index');
        
    }

    
}
?>