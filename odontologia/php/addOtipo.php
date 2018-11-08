<?php 

    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $DESCRIPCION = $_POST['descripcion'];
    try{
        $x = $llamar->prepare("BEGIN paquete_odontologia.add_TipoOdontologia(?); END;");
         $x->bindParam(1, $DESCRIPCION, PDO::PARAM_STR);
         $x->execute();
        if( $x ) {
            
            echo "success";
        }else{
            echo "malo";
        }
        $x-closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }else{
            throw $e;
            
        }
    }
?>