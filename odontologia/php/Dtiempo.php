<?php 
    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $idtiempo = $_POST['idtiempo'];
    try{
        $x = $llamar->prepare("DELETE FROM TIEMPO_COMIDA WHERE ID_TIEMPO_COMIDA = :idtiempo");
         $x->bindParam(1, $idtiempo, PDO::PARAM_INT);
         $x->execute();
        if( $x ) {
            $x->closeCursor();
            echo "success";
        }else{
            echo "malo";
        };
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }else{
            throw $e;
            
        }
    }
    
?>