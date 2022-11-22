<?php

class main extends controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "BIENVENIDO INICIO";
        
       // echo "<p>Nuevo controlador main </p>";
    }

    function render(){
        $this->view->render('main/index');
    }

    
}



?>
