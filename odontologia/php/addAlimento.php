<?php 

    require_once('../conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();

   

    $food = $_POST['food'];
    //$food = "Carne";
    try{

        // $st=$llamar->prepare("Select * from alimento");
        // $st->execute(); 
        // $resultado=$st->fetchAll( );
        // foreach($resultado as $mat)  
        //     {
        //        list($c1,$c2,$c3)=$mat;  
        //         echo "$c1---$c2--- $c3"; 
        //     }//
        //$query = "BEGIN pk_nutricion.add_alimento(:food); END;"
        $x = $llamar->prepare("BEGIN pk_nutricion.add_alimento(:food); END;");
         $x->bindParam(1, $food, PDO::PARAM_STR);
         $x->execute();
        // echo "true";
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