<?php

class view{

    function __construct(){

        
    }

    function render($nombre){

        require 'VIEWS/'.$nombre. '.php';
        
    }

    
}

?>
