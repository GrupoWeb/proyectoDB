<?php

require_once('../conexion/conexion.php');
$conn = new Conexion();
$llamar = $conn->Conectar();

        $query = "SELECT COUNT(*) AS CONTADOR,USUARIO_REGISTRO FROM CITA GROUP BY USUARIO_REGISTRO";
            $statement = $llamar->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            $output[] = array(
            'usuario'   => $row["USUARIO_REGISTRO"],
            'cantidad'  => floatval($row["CONTADOR"])
            );
            }
            $statement->closeCursor();
            echo json_encode($output);


?>
