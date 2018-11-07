<?php 

    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $especialidad = $_POST['espe'];
    $medico = $_POST['persona'];
    try{
        $x = $llamar->prepare("BEGIN PAQUETE_NUTRICION.ADD_MEDICO(?,?); END;");
         $x->bindParam(1, $especialidad, PDO::PARAM_STR);
         $x->bindParam(2, $medico, PDO::PARAM_INT);
         $x->execute();
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