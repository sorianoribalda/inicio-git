<?php 
    // mostrar lista de usuarios
    include '../../header.php';
    if (isset($_GET['exito']) && $_GET['exito'] =='modificacion'){
        echo '<div class="alert alert-success" role="alert">
            Has modificado con exito los datos!
          </div>';
    }

    echo '<a class="btn btn-success mb-2 mt-2" href="form-agregar-usuario.php">Añadir Usuario</a>';
    include '../../conexion.php';
    $conexion = mysqli_connect('localhost','root','','blog');
    if (!$conexion): //sintaxis alternativa a las llaves : endif;

        echo 'No se ha podido establecer la conexión';
    else:
        // preparamos la consulta
        $consulta = "SELECT * FROM usuarios";
        // ejecutamos una variable
        $datos = mysqli_query($conexion,$consulta);
        if ($datos){
           echo '<table class="table">
                    <th>id</th>
                    <th>nombre</th>
                    <th>email</th>
                    <th>password</th>
                    <th>modificar</th>
                    <th>borrar</th>


            ';
           while($fila = mysqli_fetch_array($datos)){
               // muestra las filas
               include 'template-tabla-usuarios.php';
           } //aquí termina el loop

           echo '</table>';
        }else{
            echo 'Ha fallado la consulta';
        }
    endif;
    include '../../footer.php';
    

