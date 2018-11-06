<?php 

    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $time = $_POST['time'];
    try{
        $x = $llamar->prepare("BEGIN pk_nutricion.add_tiempo_comida(:time); END;");
         $x->bindParam(1, $time, PDO::PARAM_STR);
         $x->execute();
        // echo "true";
        if( $x ) {
            $x-closeCursor();
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