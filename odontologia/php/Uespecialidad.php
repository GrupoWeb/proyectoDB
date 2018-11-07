<?php 
    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $esecialidad = $_POST['especialidad'];
    $idespecialidad = $_POST['idespe'];
    try{
        $x = $llamar->prepare("UPDATE  ESPECIALIDAD E SET E.ESPECIALIDAD = :esecialidad WHERE E.ID_ESPECIALIDAD = :idespecialidad");
         $x->bindParam(1, $esecialidad, PDO::PARAM_STR);
         $x->bindParam(2, $idespecialidad, PDO::PARAM_INT);
         $x->execute();
        if( $x ) {
            echo "success";
            $x->closeCursor();
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