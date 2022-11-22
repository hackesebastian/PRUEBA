<?php

class falla extends controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "PAGINA NO ENCONTRADA VERIFIQUE LA DIRECCION";
        $this->view->render('falla/index');
       //echo '<p>ERROR AL CARGAR RECURSOS</p>';

        
    }
}

?>
