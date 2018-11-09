<?php

    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();

            $query = "SELECT COUNT(*) AS contador, 
                                        EXTRACT(YEAR FROM FECHA_NACIMIENTO) AS anno
                                            FROM PERSONA
                                            GROUP BY EXTRACT(YEAR FROM FECHA_NACIMIENTO)
                                            ORDER BY EXTRACT(YEAR FROM FECHA_NACIMIENTO)";
                $statement = $llamar->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                $output[] = array(
                'cantidad'  => $row["CONTADOR"],
                'anno'  => intval($row["ANNO"])
                );
                }
                $statement->closeCursor();
                echo json_encode($output);


?>
