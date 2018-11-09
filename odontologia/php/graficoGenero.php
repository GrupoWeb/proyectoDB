<?php

    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();

            $query = "SELECT GENERO, COUNT(*) AS PERSONAS FROM PERSONA GROUP BY GENERO";
                $statement = $llamar->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                $output[] = array(
                'GENERO'   => $row["GENERO"],
                'PERSONAS'  => floatval($row["PERSONAS"])
                );
                }
                $statement->closeCursor();
                echo json_encode($output);


?>
