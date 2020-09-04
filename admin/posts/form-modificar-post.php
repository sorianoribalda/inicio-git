<?php include '../../header.php'; ?>
<?php 
    if(isset($_GET['id_post'])){
        $id=$_GET['id_post'];
        $consulta="SELECT * from post WHERE id_post=$id";
        include '../../conexion.php';
        if($datos = mysqli_query($conexion, $consulta)){
            while($fila = mysqli_fetch_array($datos)):
                include 'template-form-modificar-post.php';
                
                
              
            endwhile;
            mysqli_close($conexion);
        }else{
            echo 'la consulta no exite';
        }
    }
?>
<?php include '../../footer.php'; ?>

