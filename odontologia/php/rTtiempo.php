<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    try{
        $data = array();
        $st=$llamar->prepare("SELECT ID_TIEMPO_COMIDA, TIEMPO FROM TIEMPO_COMIDA");
        $st->execute(); 
        $resultado=$st->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultado as $row) {
            $data['data'][] = $row;
        }
       $st->closeCursor();
        echo json_encode($data);

    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }
    }
?>

