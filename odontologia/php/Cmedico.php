<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    try{
        $data = array();
        $st=$llamar->prepare("SELECT 
                                    M.ID_MEDICO,
                                    (P.PRIMER_NOMBRE || ' ' || P.SEGUNDO_NOMBRE || ' ' || P.PRIMER_APELLIDO || ' ' || P.SEGUNDO_NOMBRE) AS NOMBRE    
                                FROM MEDICO M
                                    INNER JOIN PERSONA P ON P.ID_PERSONA = M.ID_PERSONA");
        $st->execute(); 
        $resultado=$st->fetchAll(PDO::FETCH_ASSOC);
        $i=0;
        $combo = '<option value="0">Seleccione...</option>';
        foreach($resultado as $row) {
            $combo .= '<option value="'.$row['ID_MEDICO'].'">'.$row['NOMBRE'].'</option>';
        }
         echo $combo;
       $st->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }
    }
?>



