<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $ID = 1;
    try{
        $data = array();
        $st=$llamar->prepare("SELECT
                                D.ID_DIETA, C.CITA, (P.PRIMER_NOMBRE || ' ' || P.SEGUNDO_NOMBRE || ' ' || P.PRIMER_APELLIDO || ' ' || p.SEGUNDO_APELLIDO) AS NOMBRE, D2.DIAGNOSTICO
                                FROM DIETA D
                                INNER JOIN CITA C ON C.ID_CITA = D.ID_CITA
                                INNER JOIN MEDICO M ON M.ID_MEDICO = D.ID_MEDICO
                                INNER JOIN DIAGNOSTICO D2 ON D2.ID_DIAGNOSTICO = D.ID_DIAGNOSTICO
                                INNER JOIN PERSONA P ON P.ID_PERSONA = M.ID_PERSONA");
              
               
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

