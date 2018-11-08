<?php 

    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    
    $dclinica = $_POST['dclinica'];
    $todontologia = $_POST['Otipo'];
    $persona = $_POST['persona'];
    $medico = $_POST['medico'];
    $diagnostico = $_POST['diagnostico'];
    $obs = $_POST['obs'];


    try{
        $x = $llamar->prepare("BEGIN paquete_odontologia.add_PacienteOdontologia(?,?,?,?,?,?); END;");
         $x->bindParam(1, $persona, PDO::PARAM_INT);
         $x->bindParam(2, $medico, PDO::PARAM_INT);
         $x->bindParam(3, $dclinica, PDO::PARAM_INT);
         $x->bindParam(4, $todontologia, PDO::PARAM_INT);
         $x->bindParam(5, $diagnostico, PDO::PARAM_INT);
         $x->bindParam(6, $obs, PDO::PARAM_STR);
         $x->execute();
        if( $x ) {
            echo "success";
        }else{
            echo "malo";
        };
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }else{
            throw $e;
            
        }
    }
?>