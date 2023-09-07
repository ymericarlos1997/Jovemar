<?php

require_once ("_db.php");

if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
     

        case 'insertar_citas':
        insertar_citas();

        break;    
    }

}



function insertar_citas(){

    global $conexion;
    extract($_POST);


        
                
    
        
                

    $consulta="INSERT INTO citas (nombre, email, jornada)
    VALUES ('$nombre', '$email', '$jornada');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../../jove_mar/views/citas/cita_guardar.php");

}
?>