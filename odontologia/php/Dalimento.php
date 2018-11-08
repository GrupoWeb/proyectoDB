<?php 
    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $idfood = $_POST['idAlimento'];
    try{
        $x = $llamar->prepare("DELETE FROM ALIMENTO WHERE ID_ALIMENTO = :idfood");
         $x->bindParam(1, $idfood, PDO::PARAM_INT);
         $x->execute();
        if( $x ) {
            $x->closeCursor();
            echo "success";
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