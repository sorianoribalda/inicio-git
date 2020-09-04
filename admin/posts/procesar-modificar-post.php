<?php 
// recoger los datos que nos envía el formulario
if(isset($_POST['id_post'],$_POST['titulo'], $_POST['contenido'], $_POST['temas'])){
    $id = $_POST['id_post'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $temas = $_POST['temas'];
    include '../../conexion.php';
    // preparamos la consulta
    $consulta = "UPDATE post SET titulo = '$titulo', contenido = '$contenido', temas = '$temas' WHERE id_post = '$id'";
    // le mandamos al index de usuarios para comprobar cambios 
    if(mysqli_query($conexion, $consulta)){
        header('location:index.php?exito=modificacion');
    }else{
        echo 'Ha habido un error al modificar los datos';

    }   

}else{
    header('location:../../index.php');
}

?>