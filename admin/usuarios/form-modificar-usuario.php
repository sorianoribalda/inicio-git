<?php 
include '../../header.php';
if (isset($_GET['id_usuario'])){
    $id = $_GET['id_usuario'];
    // preparamos la consulta
    $consulta="SELECT * FROM usuarios WHERE id_usuario = $id";
    // incluimos la conexion
    include '../../conexion.php';
    // ejecutamos la consulta
    if($datos = mysqli_query($conexion,$consulta)){
        // aquí mostramos los datos
        while($fila = mysqli_fetch_array($datos)){
        // mostrar el html con los datos obtenidos
        include 'template-form-modificar-usuario.php';
        }
        }else{
        echo ' la consulta no se ha realizado';
    }
}else{
    header('location:../../index.php');
}
include '../../footer.php';
?>