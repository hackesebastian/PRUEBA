<?php

class Mhospitales{
    public $MnombreH;
    public $Mnumero;
}

class hospitalesModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO hospitales (cod_hospital,nombre_hospital) VALUES(:numero, :nombreH)');
            $query->execute(['numero' => $datos['numero'], 'nombreH' => $datos['nombreH']]);
            return true;
        }catch(PDOException $e){
            //echo $e->getMessage();
            //echo 'Error al guardar los Datos Que ya existen';
            return false;
        }        
    }

    public function get(){
      $items = [];

      try{
        $query = $this->db->connect()->query('SELECT * FROM hospitales');

        while($row = $query->fetch()){
            $item = new Mhospitales();
            $item->Mnumero = $row['cod_hospital'];
            $item->MnombreH = $row['nombre_hospital'];

            array_push($items, $item);
            
        }

        return $items;

      }catch(PDOException $e){
        return [];

      }
           
    }

    public function getById($id){
        $item = new hospitalesModel();
        

        $query = $this->db->connect()->prepare("SELECT * FROM hospitales WHERE  cod_hospital = :numero");
        try{
            $query->execute(['numero' => $id]);


            while($row = $query->fetch()){
                $item->Mnumero = $row['cod_hospital'];
                $item->MnombreH = $row['nombre_hospital'];

            }
            return $item;

        }catch(PDOException $e){
            return null;
        }


    }

    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE hospitales SET nombre_hospital = :nombreH WHERE cod_hospital = :numero");
        try{
            $query->execute(['numero' => $item['numero'], 'nombreH' => $item['nombreH']]);
           
            return true;
        }catch(PDOExecption $e){
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare("DELETE FROM hospitales WHERE cod_hospital =  :id");
        try{
            $query->execute(['id' => $id]);
           
            return true;
        }catch(PDOExecption $e){
            return false;
        }
    }
    
}




?>