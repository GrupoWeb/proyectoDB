<?php 
    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $food = $_POST['food'];
    $idfood = $_POST['idfood'];
    try{
        $x = $llamar->prepare("UPDATE ALIMENTO l  SET l.ALIMENTO = :food WHERE l.ID_ALIMENTO = :idfood");
         $x->bindParam(1, $food, PDO::PARAM_STR);
         $x->bindParam(2, $idfood, PDO::PARAM_INT);
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