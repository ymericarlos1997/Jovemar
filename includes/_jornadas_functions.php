<?php

require_once ("_db.php");

if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_jornada':
            eliminar_jornada();

        break;        
        case 'editar_jornada':
        editar_jornada();

        break;

        case 'insertar_jornada':
        insertar_jornada();

        break;    
    }

}



function insertar_jornada(){

    global $conexion;
    extract($_POST);


        
                
    
        
                

    $consulta="INSERT INTO jornadas (nombre, descripcion, fecha)
    VALUES ('$nombre', '$descripcion', '$fecha');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/jornadas/jornadas_list.php");

}
function editar_jornada(){

    global $conexion;
    extract($_POST);


        
                
    $consulta="UPDATE jornadas SET nombre = '$nombre', descripcion = '$descripcion', fecha = '$fecha' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/jornadas/jornadas_list.php");
}
function eliminar_jornada(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM jornadas WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/jornadas/jornadas_list.php");
}





?>