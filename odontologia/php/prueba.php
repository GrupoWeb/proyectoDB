<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();

    try{
        $st = $llamar->prepare("SELECT * 
                                    from diagnostico;");
        
        $st->setFetchMode(PDO::FETCH_ASSOC);
        $st->execute();

        $combo = '<option value="0">Seleccione...</option>';
        while ($row = $st->fetch()){
           
            $combo .= '<option value="'.$row['ID_DIAGNOSTICO'].'">'.$row['DIAGNOSTICO'].'</option>';
        };

         echo $combo;

         $stmt = $llamar->prepare("SELECT * FROM DIAGNOSTICO;");
            $stmt->execute();
            echo $stmt->rowCount();
       $st->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }
    }
?>



