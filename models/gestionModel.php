<?php

class Mgestion{
    public $id_hospital;
    public $PTdocumento;
    public $PnumeroD;
    public $Pnumero;
    public $PfechaI;
    public $PfechaS;
    public $PfechaC;
}

class gestionModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO gestion_hospital (tipo_documento_pa,no_documento_pa,cod_hospital,fecha_de_ingreso,fecha_de_salida,fecha_de_creacion) VALUES(:Tdocumento, :numeroD, :numero, :fechaIngreso, :fechaSalida, "2022-11-19")');
            $query->execute(['Tdocumento' => $datos['Tdocumento'], 'numeroD' => $datos['numeroD'], 'numero' => $datos['numero'],  'fechaIngreso' => $datos['fechaIngreso'], 'fechaSalida' => $datos['fechaSalida']]);
            return true;
        }catch(PDOException $e){
            //echo $e->getMessage();
            //echo 'Error al guardar los Datos Que ya existen';
            return false;
        }        
    }

    public function get3(){
      $items = [];

      try{
        $query = $this->db->connect()->query('SELECT * FROM gestion_hospital');

        while($row = $query->fetch()){
            $item = new Mgestion();
            $item->id_hospital = $row['id_hospitalizacion'];
            $item->PTdocumento = $row['tipo_documento_pa'];
            $item->PnumeroD = $row ['no_documento_pa'];
            $item->Pnumero = $row['cod_hospital'];
            $item->PfechaI = $row['fecha_de_ingreso'];
            $item->PfechaS = $row['fecha_de_salida'];
            $item->PfechaC = $row['fecha_de_creacion'];


            array_push($items, $item);
            
        }

        return $items;

      }catch(PDOException $e){
        return [];

      }
           
    }
    
}




?>