<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    try{
        $data = array();
        $st=$llamar->prepare("Select id_alimento,alimento from alimento");
        $st->execute(); 
        $resultado=$st->fetchAll();
        foreach($resultado as $row) {
            $data['data'][] = $row;
        }
       
        echo json_encode($data);
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }
    }
?>

