<?php
class ApptivaDB{
    private $host   = "localhost";
    private $user    = "root";
    private $pass = "";
    private $db     =  "productos";
    public $conexion;
    

    public function __construct(){
        $this -> conexion = new mysqli($this->host,$this->user,$this->pass,$this->db)
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
        $resultado  =   $this->conexion->query("SELECT * FROM $tabla WHERE $condicion") 
        or die($this->conexion->error);
        if ($resultado) 
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;        
    }
}


?>