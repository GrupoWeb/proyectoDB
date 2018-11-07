<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    try{
        $data = array();
        $st=$llamar->prepare("SELECT m.id_medico as ID_MEDICOS,(p.PRIMER_NOMBRE ||' ' || p.SEGUNDO_NOMBRE || ' ' || p.PRIMER_APELLIDO || ' ' || p.SEGUNDO_APELLIDO || ' ' || p.APELLIDO_CASADA ) AS NOMBRE,
                                E.ESPECIALIDAD, m.fecha_ingreso AS FECHA FROM MEDICO m 
                                INNER JOIN PERSONA p ON p.ID_PERSONA = m.ID_PERSONA
                                INNER JOIN ESPECIALIDAD E ON e.ID_ESPECIALIDAD = m.ID_ESPECIALIDAD");
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


