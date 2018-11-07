<?php 
    require_once('../conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
    try{
        $data = array();
        $st=$llamar->prepare("SELECT p.ID_PERSONA AS CODIGO,(p.PRIMER_NOMBRE ||' ' || p.SEGUNDO_NOMBRE || ' ' || p.PRIMER_APELLIDO || ' ' || p.SEGUNDO_APELLIDO || ' ' || p.APELLIDO_CASADA ) as NOMBRE
                                FROM PERSONA p");
        $st->execute(); 
        $resultado=$st->fetchAll(PDO::FETCH_ASSOC);
        $i=0;
        $combo = '<option value="0">Seleccione...</option>';
        foreach($resultado as $row) {
            $combo .= '<option value="'.$row['CODIGO'].'">'.$row['NOMBRE'].'</option>';
        }
         echo $combo;
       $st->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }
    }
?>



