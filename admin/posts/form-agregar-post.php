<?php include '../../header.php'; ?>
<form method='post' action="procesar-agregar-post.php">
<div class="form-group">
    <label for="titulo">Título</label>
    <input class='form-control' type="text" name='titulo' id='titulo'>
</div>
<div class="form-group">
    <label for="contenido">Contenido</label>
    <textarea class='form-control'type="text" name='contenido' id='contenido' cols="30" rows="10"></textarea>
</div>
<div class="form-group">
    <label for="temas">Temas</label>
    <input class='form-control'type="text" name='temas' id='temas'>
</div>

<button class='btn btn-primary' type='submit'>Añadir Post</button>


</form>
<?php include '../../footer.php'; ?>