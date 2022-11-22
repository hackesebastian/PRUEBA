<?php
class Mpacientes{
    public $MTdocumento;
    public $MnumeroD;
    public $MnombrePaciente;
    public $Mapellido;
    public $MfechaNacimiento;
    public $Mcorreo;
}
class pacientesModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO pacientes (tipo_documento,no_documento,nombres,apellidos,fecha_de_nacimiento,email) VALUES(:Tdocumento, :numeroD, :nombrePaciente, :apellido, :fechaNacimiento, :correo)');
            $query->execute(['Tdocumento' => $datos['Tdocumento'], 'numeroD' => $datos['numeroD'],'nombrePaciente' => $datos['nombrePaciente'],'apellido' => $datos['apellido'],'fechaNacimiento' => $datos['fechaNacimiento'],'correo' => $datos['correo']]);
            return true;
        }catch(PDOException $e){
            //echo $e->getMessage();
            //echo 'Error al guardar los Datos Que ya existen';
            return false;
        }        
    }

    public function get2(){
        $items = [];
  
        try{
            $query = $this->db->connect()->query('SELECT * FROM pacientes');
  
            while($row = $query->fetch()){
                $item = new Mpacientes();
                $item->MTdocumento = $row['tipo_documento'];
                $item->MnumeroD = $row ['no_documento'];
                $item->MnombrePaciente = $row ['nombres'];
                $item->Mapellido = $row ['apellidos'];
                $item->MfechaNacimiento = $row ['fecha_de_nacimiento'];
                $item->Mcorreo = $row ['email'];
    
                array_push($items, $item);     
            }
  
            return $items;
  
        }catch(PDOException $e){
         return [];
  
        }
             
    }

    

    
}
?>