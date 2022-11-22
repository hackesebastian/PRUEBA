<?php
class hospitales extends controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje1 = "";
        $this->view->mensaje = "HOSPITALES";
        $this->view->mostrar = [];
        
       // echo "<p>Nuevo controlador main </p>";
    }


    function render(){
        
        $mostrar = $this->model->get();
        $this->view->mostrar = $mostrar;
        $this->view->render('hospitales/index');
        
    }

    function registrarH(){
        $numero = $_POST['numero'];
        $nombreH = $_POST['nombreH'];

        $mensaje1 = '';


        if($this->model->insert(['numero' => $numero,'nombreH' => $nombreH])){
            $mensaje1 = 'Nuevo Hospital Guardado F5 recargar página para actualizar';
        }else{
            $mensaje1 = 'El código de Hospital ya existe';
        } 

        $this->view->mensaje1 = $mensaje1;
        $this->render();
        
    }

    function verHospital($param = null){
        $idHospital = $param[0];
        $mostrar = $this->model->getById($idHospital);

        session_start();
        $_SESSION['id_verHospital'] = $mostrar->Mnumero;
        $this->view->mostrar = $mostrar;
        $this->view->mensaje = '';
        $this->view->render('hospitales/detalle');

        
    }


    function actualizarHospital(){
        session_start();
        $Mnumero = $_SESSION['id_verHospital'];
        $MnombreH =$_POST['nombreH'];


        unset($_SESSION['id_Hospital']);


        if($this->model->update(['numero'  => $Mnumero, 'nombreH' => $MnombreH])){
            //actulizar alumno exito
            $mostrar = new hospitales ();
            $mostrar->Mnumero = $Mnumero;
            $mostrar->MnombreH = $MnombreH;
            


            $this->view->mostrar = $mostrar;
            $this->view->mensaje = " Actulizado correctamente";
            

        }else{
            //mensaje de error 
            $this->view->mensaje = "No se pudo Actulizar el Hospital";
            echo $mensaje;

        }
       $this->view->render('hospitales/detalle');
    }


    function eliminarHospital($param = null){
        $Mnumero = $param[0];


        if($this->model->delete($Mnumero)){
            //BORRAR
            $this->view->mensaje = " registro eliminado correctamente";
            

        }else{
            //mensaje de error 
            $this->view->mensaje = "No se pudo eliminar el Hospital compuebre que no este vinculado a ningun registro";
            echo $mensaje;

        }
       $this->render();



        
    }

}



?>