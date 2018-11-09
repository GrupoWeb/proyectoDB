<?php 

    require_once('../conexion/conexion.php'); 

    $conn = new Conexion();
    $llamar = $conn->Conectar();

    $ctSeguro = $_POST['ctSeguro'];
    $cSeguro = $_POST['cSeguro'];
    $iSede = $_POST['iSede'];
    $Disede = $_POST['Disede'];
    $Nclinica = $_POST['Nclinica'];
    $persona = $_POST['persona'];
    $Ncita = $_POST['Ncita'];
    $Nusuario = $_POST['Nusuario'];
    $Fcita = $_POST['Fcita'];
    $Hhora = $_POST['Hhora'];



    try{
        $x = $llamar->prepare("BEGIN PAQUETE_NUTRICION.add_cita(?,?,?,?,?,?,?,?,?,to_date(?,'HH24:MI')); END;");
         $x->bindParam(1, $ctSeguro, PDO::PARAM_STR);
         $x->bindParam(2, $cSeguro, PDO::PARAM_STR);
         $x->bindParam(3, $iSede, PDO::PARAM_INT);
         $x->bindParam(4, $Disede, PDO::PARAM_STR);
         $x->bindParam(5, $Nclinica, PDO::PARAM_STR);
         $x->bindParam(6, $persona, PDO::PARAM_INT);
         $x->bindParam(7, $Ncita, PDO::PARAM_STR);
         $x->bindParam(8, $Nusuario, PDO::PARAM_STR);
         $x->bindParam(9, $Fcita, PDO::PARAM_STR);
         $x->bindParam(10, $Hhora, PDO::PARAM_STR);
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