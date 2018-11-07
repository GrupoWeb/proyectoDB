<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    try{
        $data = array();
        $st=$llamar->prepare("SELECT 
                                ID_DIAGNOSTICO,
                                DIAGNOSTICO
                            FROM DIAGNOSTICO");
        $st->execute(); 
        $resultado=$st->fetchAll(PDO::FETCH_ASSOC);
        $i=0;
        $combo = '<option value="0">Seleccione...</option>';
        foreach($resultado as $row) {
            $combo .= '<option value="'.$row['ID_DIAGNOSTICO'].'">'.$row['DIAGNOSTICO'].'</option>';
        }
         echo $combo;
       $st->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }
    }
?>



