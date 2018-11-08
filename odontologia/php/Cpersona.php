<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    try{
        $data = array();
        $st=$llamar->prepare("SELECT ID_PERSONA,(PRIMER_NOMBRE || ' ' || SEGUNDO_NOMBRE || ' ' || PRIMER_APELLIDO || ' ' || SEGUNDO_APELLIDO) AS NOMBRE FROM PERSONA");
        $st->setFetchMode(PDO::FETCH_ASSOC);
        $st->execute(); 
        $i=0;
        $combo = '<option value="0">Seleccione...</option>';
        while ($row = $st->fetch()){
            $combo .= '<option value="'.$row['ID_PERSONA'].'">'.$row['NOMBRE'].'</option>';
        }
        echo $combo;
       $st->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }
    }
?>



