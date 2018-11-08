<?php 

    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();

    $cita = $_POST['cita'];
    $diagnostico = $_POST['diagnostico'];
    $medico = $_POST['medico'];
    $alimento = $_POST['alimento'];
    $cantidad = $_POST['cantidad'];
    $Tcomida = $_POST['Tcomida'];
    $descripcion = $_POST['descripcion'];

    try{
        $x = $llamar->prepare("BEGIN paquete_nutricion.add_dieta(?,?,?,?,?,?,?); END;");
         $x->bindParam(1, $cita, PDO::PARAM_INT);
         $x->bindParam(2, $medico, PDO::PARAM_INT);
         $x->bindParam(3, $diagnostico, PDO::PARAM_INT);
         $x->bindParam(4, $alimento, PDO::PARAM_INT);
         $x->bindParam(5, $cantidad, PDO::PARAM_STR);
         $x->bindParam(6, $Tcomida, PDO::PARAM_INT);
         $x->bindParam(7, $descripcion, PDO::PARAM_STR);

         $x->execute();
        if( $x ) {
            echo "success";
        }else{
            echo "malo";
        };
        $x->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }else{
            throw $e;
            
        }
    }
?>