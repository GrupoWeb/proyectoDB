<?php 
    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $fecha = $_POST['Fcita'];
    $hora = $_POST['Hhora'];
    $id = $_POST['idcita'];
    try{
        $x = $llamar->prepare("UPDATE CITA SET FECHA_CITA = to_date(?,'DD/MM/YYYY'), HORA_CITA = to_date(?,'HH:MI') WHERE ID_CITA = ?");
         $x->bindParam(1, $fecha, PDO::PARAM_STR);
         $x->bindParam(2, $hora, PDO::PARAM_STR);
         $x->bindParam(3, $id, PDO::PARAM_INT);
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