<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion(); 
    $llamar = $conn->Conectar();
    $ID = 1;
    try{
        $data = array();
        $st=$llamar->prepare("SELECT CITA.ACTIVO,CITA.ID_CITA, (S.SEGURO) AS SEGURO,CLI.DESCRIPCION,(P.PRIMER_NOMBRE || ' ' || P.SEGUNDO_NOMBRE || ' ' || P.PRIMER_APELLIDO || ' ' || P.SEGUNDO_APELLIDO) AS NOMBRE,CITA.CITA,(CITA.FECHA_CITA || '  ' || TO_CHAR(CITA.HORA_CITA,'HH:MI')) AS FECHA
                FROM CITA 
                    INNER JOIN SEGURO S ON S.ID_SEGURO = CITA.ID_SEGURO 
                    INNER JOIN PERSONA P ON P.ID_PERSONA = CITA.ID_PERSONA_PACIENTE
                    INNER JOIN CLINICAS CLI ON CLI.ID_CLINICA = CITA.ID_CLINICA ");
              
               
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

