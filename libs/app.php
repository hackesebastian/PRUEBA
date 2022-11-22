<?php
require_once 'CONTROLLERS/falla.php' ;
class App{

    function __construct(){

        $url = isset($_GET['ruta']) ?  $_GET['ruta']: null;
        $url = rtrim($url,'/');
        $url = explode('/',$url);

        //se ingresa sin definir controlador 
        if(empty($url['0'])){
            $archivoController ='CONTROLLERS/main.php';
            require_once $archivoController;
            $Controller = new main();
            $Controller->loadModel('main');
            $Controller->render();
            return false;
        }
        $archivoController ='CONTROLLERS/'. $url[0].'.php';

        if(file_exists($archivoController)){
            require_once $archivoController;


            //inicializa el controlador
            $Controller = new $url[0];
            $Controller->loadModel($url[0]);

            // numero de elementos del arreglo
            $nparam = sizeof($url);

            if($nparam > 1){
                if($nparam > 2){
                    $param =[];
                    for($i = 2; $i<$nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $Controller->{$url[1]}($param);
                }else{
                    $Controller->{$url[1]}();
                }
            }else{
                $Controller->render();
            }
        }else{
            $Controller = new  falla();

        }

        
    }
    
}

?>
