<?php 
// coge los datos del form y los envía a al tabla usuarios
if (isset($_POST['nombre'],$_POST['email'],$_POST['password'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    include '../../conexion.php';
    // preparamos consulta
    $consulta = "INSERT INTO usuarios(id_usuario,nombre,email,`password`)VALUES('0','$nombre','$email','$password')";
    // ejecutamos la consulta con if else para que nos avise en caso de fallo
    if(mysqli_query($conexion,$consulta)){
        mysqli_close($conexion);
        header('location:index.php');
        

    }else{
        echo 'No se ha podido realizar la consulta';
    }
}




?>