<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    try{
        $data = array();
        $st=$llamar->prepare("SELECT  
                                    (O.ID_PACIENTE_ODONTOLOGIA) AS CODIGO,(P.PRIMER_NOMBRE || ' ' || P.SEGUNDO_NOMBRE || ' ' || P.PRIMER_APELLIDO || '  ' || P.SEGUNDO_APELLIDO ) AS NOMBRE,
                                    (P.PRIMER_NOMBRE || ' ' || P.SEGUNDO_NOMBRE || ' ' || P.PRIMER_APELLIDO || '  ' || P.SEGUNDO_APELLIDO) AS NOMBREMEDICO,C.DESCRIPCION,
                                    T.OBSERVACION,T.FECHAREGISTRO, dg.diagnostico
                                    FROM PACIENTE_ODONTOLOGIA O
                                    INNER JOIN PERSONA P ON P.ID_PERSONA = O.ID_PERSONA
                                    INNER JOIN MEDICO M ON M.ID_PERSONA = P.ID_PERSONA AND M.ID_MEDICO = O.ID_MEDICO
                                    INNER JOIN CLINICAS C ON C.ID_CLINICA = O.ID_CLINICA
                                    INNER JOIN TIPO_PACIENTE_O T ON T.IDPACIENTE = O.ID_PERSONA
                                    INNER JOIN DIAGNOSTICO DG ON DG.ID_DIAGNOSTICO = T.iddiagnostico");
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


