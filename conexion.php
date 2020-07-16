<?php
class ApptivaDB{
    private $host   = "";
    private $user    = "";
    private $pass = "";
    private $db     =   "";
    public $conexion;

    public function_construct(){
        $this -> conexion = new mysqli($this->$host,$this->$user,$this->$pass,$this->$db)
        or die(mysql_error());
        $this->conexion->set_charset("utf8");
    }
    
    public function insertar($tabla, $datos){
        $resultado  =   $this->conexion->query("INSERT INTO $tabla VALUES (null,$datos)") 
        or die($this->conexion->error);
        if ($resultado) 
            return true;
        return false;        
    }

    public function borrar($tabla, $condicion){
        $resultado  =   $this->conexion->query("DELETE FROM $tabla FROM $condicion") 
        or die($this->conexion->error);
        if ($resultado) 
            return true;
        return false;        
    }

    public function actualizartar($tabla,$campos ,$condicion){
        $resultado  =   $this->conexion->query("UPDATE $tabla SET $campos WHERE $condicion") 
        or die($this->conexion->error);
        if ($resultado) 
            return true;
        return false;        
    }

    public function buscar($tabla, $condicion){
        $resultado  =   $this->conexion->query("SELECT * FROM $tabla FROM $condicion") 
        or die($this->conexion->error);
        if ($resultado) 
            return true;
        return false;        
    }



}


?>