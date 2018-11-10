<?php

require_once('../conexion/conexion.php');
$conn = new Conexion();
$llamar = $conn->Conectar();

        $query = "select count(*) AS CANTIDAD,EXTRACT(MONTH FROM FECHA_CITA) AS MES from CITA
        GROUP BY EXTRACT(MONTH FROM FECHA_CITA)
        ORDER BY EXTRACT(MONTH FROM FECHA_CITA)";
            $statement = $llamar->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            $output[] = array(
            'mes'   => $row["MES"],
            'cantidad'  => floatval($row["CANTIDAD"])
            );
            }
            $statement->closeCursor();
            echo json_encode($output);


?>
