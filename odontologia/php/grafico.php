<?php

    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();

            $query = "SELECT COUNT(M.ID_MEDICO) AS CANTIDAD,E.ESPECIALIDAD FROM MEDICO M INNER JOIN ESPECIALIDAD E ON E.ID_ESPECIALIDAD = M.ID_ESPECIALIDAD 
                        WHERE extract(year from M.fecha_ingreso) =2018 GROUP BY e.especialidad";
                $statement = $llamar->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                $output[] = array(
                'month'   => $row["ESPECIALIDAD"],
                'profit'  => floatval($row["CANTIDAD"])
                );
                }
                $statement->closeCursor();
                echo json_encode($output);


?>
