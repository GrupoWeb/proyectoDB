<?php 
    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $id = $_POST['iddcita'];
    try{
        $x = $llamar->prepare("UPDATE CITA SET ACTIVO = 0 WHERE ID_CITA = ?");
         $x->bindParam(1, $id, PDO::PARAM_INT);
         $x->execute();
        if( $x ) {
            echo "success";
            $x->closeCursor();
        }else{
            echo "malo";
        };
        $x->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }else{
            throw $e;
            
        }
    }
    

?>