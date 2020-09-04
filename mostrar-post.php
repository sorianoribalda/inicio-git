<?php
    include 'header.php';
    // recogemos la variable por get
    if (isset($_GET['id_post'])){
    $id = $_GET['id_post'];
    }
    include 'conexion.php';
   
        if (!$conexion){
            echo 'No has podido acceder. Revisa los datos';
        }else{
            
            // preparamos la consulta
            $consulta = " SELECT * FROM post WHERE id_post=$id ";
            if($datos = mysqli_query($conexion, $consulta)){
                while($fila = mysqli_fetch_array($datos)){
                   include 'templates/template-post.php';

                }
                mysqli_close($conexion);
            // aqui usaremos los datos
            }else{
                echo 'No se ha podido realizar la consulta';
            }
            
            
        }
        include 'footer.php';

?>