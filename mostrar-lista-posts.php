<?php 

include 'conexion.php';
 
        if (!$conexion){
            echo 'No has podido acceder. Revisa los datos';
        }else{
            
            // preparamos la consulta
            $consulta = " SELECT * FROM post ";
            if($datos = mysqli_query($conexion, $consulta)){
                while($fila = mysqli_fetch_array($datos)){
                   include 'templates/template-lista-post.php';

                }
                mysqli_close($conexion);
            // aqui usaremos los datos
            }else{
                echo 'No se ha podido realizar la consulta';
            }
            
            
        }
       
?>