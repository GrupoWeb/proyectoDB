<?php 
    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $idespecialidad = $_POST['idespecialidad'];
    try{
        $x = $llamar->prepare("DELETE * FROM ESPECIALIDAD D WHERE D.ID_ESPECIALIDAD = :idespecialidad;");
         $x->bindParam(1, $idespecialidad, PDO::PARAM_INT);
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