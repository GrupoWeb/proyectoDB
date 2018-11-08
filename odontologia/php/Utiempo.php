<?php 
    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $timer = $_POST['times'];
    $idtimer = $_POST['idtime'];
    try{
        $x = $llamar->prepare("UPDATE TIEMPO_COMIDA T  SET T.TIEMPO = :timer WHERE T.ID_TIEMPO_COMIDA = :idtimer");
         $x->bindParam(1, $timer, PDO::PARAM_STR);
         $x->bindParam(2, $idtimer, PDO::PARAM_INT);
         $x->execute();
        if( $x ) {
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