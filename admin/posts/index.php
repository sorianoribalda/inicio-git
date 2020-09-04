<?php 
include '../../header.php';
if(isset($_GET['exito']) && $_GET['exito']=='modificacion'){
echo '<div class="alert alert-success" role="alert">
<h4 class="alert-heading">Well done!</h4>
<p>Aww yeah, Has modificado con exito el post!!!!!</p>
<hr>
<p class="mb-0">Enhorabuena campeón!</p>
</div>';
}
include '../../conexion.php';
 
        if (!$conexion){
            echo 'No has podido acceder. Revisa los datos';
        }else{
            
            // preparamos la consulta
            $consulta = " SELECT * FROM post ";
            if($datos = mysqli_query($conexion, $consulta)){
                // botón añadir post
                echo"<a class='btn btn-success'href='form-agregar-post.php'>Nuevo Post</a>";
            // aqui empieza la tabla
                echo "<table class='table'>
                      <thead>
                        <tr>
                          <th scope='col'>ID</th>
                          <th scope='col'>Título</th>
                          <th scope='col'>Publicado</th>
                          <th scope='col'>Modificar</th>
                          <th scope='col'>Borrar</th>
                        </tr>
                      </thead>
                      <tbody>";
             
                while($fila = mysqli_fetch_array($datos)){
                   include 'template-tabla-admin.php';
      

                

                }
                mysqli_close($conexion);
            // aqui usaremos los datos
            }else{
                echo 'No se ha podido realizar la consulta';
            }
            // cierro la tabla
            echo "  </tbody>
            </table>";
            
        }
        include '../../footer.php';
?>