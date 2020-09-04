<?php  
if (isset($_POST['titulo'], $_POST['contenido'], $_POST['temas'])){
    $titulo=$_POST['titulo'];
    $contenido=$_POST['contenido'];
    $temas=$_POST['temas'];
    
    include '../../conexion.php';
    if(!$conexion){
        echo 'La conexión no se ha establecido';
    }else{
    $consulta= "INSERT INTO post(id_post, titulo, contenido, imagen_destacada, temas, publicado) VALUES ('0','$titulo','$contenido','','','$temas','')";
        if(mysqli_query($conexion,$consulta)){
        header('location:index.php');
        }else{
        echo 'la consulta ha fallado';
        }
    
    }
}
?>