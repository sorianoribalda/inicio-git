<?php 
// recoger los datos que nos envía el formulario
if(isset($_POST['id_usuario'],$_POST['nombre'], $_POST['email'], $_POST['password'])){
    $id = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    include '../../conexion.php';
    // preparamos la consulta
    $consulta = "UPDATE usuarios SET nombre = '$nombre', email = '$email', `password` = '$password' WHERE id_usuario = $id";
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