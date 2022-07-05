<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";
    $crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $crud->eliminar($id);

    if ($respuesta->getDeletedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'delete';
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }

?>