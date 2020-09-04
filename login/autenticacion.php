<?php 

session_start();
// coger las variables de login
if (isset($_POST['email'], $_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    include '../conexion.php';
    $consulta = 'SELECT * FROM usuarios';
    if($datos = mysqli_query($conexion,$consulta)){
        $coincidencia = false;
        while($fila = mysqli_fetch_array($datos)){
            if ($fila['email']===$email && $fila['password']===$password){
                
                $_SESSION['autenticacion']='si';
                $coincidencia=true;
                
            
            }
        }
       $coincidencia?header('location:../admin') : header('location:../');
        
    }else{
        echo 'la consulta no ha podido realizarse';
    }

}else{
   header('location:../index.php');
}


// compararlas con la base de datos


// si coicide le damos a $_SESSION['autenticacion'] y le damos el valor $_SESSION['autenticacion']=='si'



// si ninguna coincide ya veremos lo que hacemos






?>