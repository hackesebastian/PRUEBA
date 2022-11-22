<?php

class database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charsert;

    public function __construct(){
        
        $this->host =constant("HOST");
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password =constant('PASSWORD');
        $this->charsert = constant('CHARSET');
        
    }

    function connect(){

        try{

            $connection = "sqlsrv:server=DESKTOP-SI6K51R;database=" . $this->db;

            $options = [
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;


        }catch(PDOException $e){

            print_r('Error sebas Connection: '. $e->getMessage());
        }
    }



}






?>