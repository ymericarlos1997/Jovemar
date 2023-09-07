<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_producto':
            eliminar_producto();

        break;        
        case 'editar_producto':
        editar_producto();

        break;

        case 'insertar_productos':
        insertar_productos();

        break;    
    }

}

function insertar_productos(){

    global $conexion;
    extract($_POST);


     

    $consulta="INSERT INTO productos (nombre, descripcion, color, precio, cantidad, cantidad_min, categorias)
    VALUES ('$nombre', '$descripcion', '$color', $precio, $cantidad ,$cantidad_min, '$categorias');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/index.php");

}
function editar_producto(){

    global $conexion;
    extract($_POST);


        
             
                
    $consulta="UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', color = '$color', precio = '$precio', cantidad = '$cantidad',cantidad_min = '$cantidad_min', categorias = '$categorias' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/index.php");
}
function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM productos WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/index.php");
}
?>