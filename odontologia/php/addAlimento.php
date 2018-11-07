<?php 

    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $food = $_POST['food'];
    try{
        $x = $llamar->prepare("BEGIN PAQUETE_NUTRICION.add_alimento(:food); END;");
         $x->bindParam(1, $food, PDO::PARAM_STR);
         $x->execute();
        // echo "true";
        if( $x ) {
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