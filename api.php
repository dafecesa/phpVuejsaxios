<?php
require "conexion.php";
$user=new ApptivaDB();
$accion ="mostrar";
$res= array("error"=>false);

if (isset($_GET['accion']))
    $accion=$_GET['accion'];

switch ($accion) {
    case 'mostrar':

        $u=$user->buscar("product", "1");
        if ($u): 
            $res['product']=$u;
            $res['mensaje']="exito";
        else: 
            $res['mensaje']="Aun no hay registros";
            $res['error']=true;
        endif;
        
        break;
    
    default:
        # code...
        break;
}
echo json_encode($res);
die();

?>