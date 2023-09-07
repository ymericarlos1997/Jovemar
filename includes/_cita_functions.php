<?php

require_once ("_db.php");

if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_cita':
            eliminar_cita();

        break;        
        case 'editar_cita':
        editar_cita();

        break;

        case 'insertar_cita':
        insertar_cita();

        break;    
    }

}



function insertar_cita(){

    global $conexion;
    extract($_POST);


        
                
    
        
                

    $consulta="INSERT INTO citas (nombre, email, jornada)
    VALUES ('$nombre', '$email', '$jornada');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/citas/citas_list.php");

}
function editar_cita(){

    global $conexion;
    extract($_POST);


        
                
    $consulta="UPDATE citas SET nombre = '$nombre', email = '$email', jornada = '$jornada' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/citas/citas_list.php");
}
function eliminar_cita(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM citas WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/citas/citas_list.php");
}
function regresar_cita(){
    header("Location: ../views/citas/citas_list.php");


}




?>