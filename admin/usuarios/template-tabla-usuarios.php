<tr>
      <th scope="row"><?php echo $fila['id_usuario']?></th>
      <td><?php echo $fila['nombre']?></td>
      <td><?php echo $fila['email']?></td>
      <td><?php echo $fila['password']?></td>
      <td><a class='btn btn-warning'href="form-modificar-usuario.php?id_usuario=<?php echo $fila['id_usuario']?>">Modificar</td>
      <td><a class='btn btn-danger'href="procesar-borrar-usuario.php?id_usuario=<?php echo $fila['id_usuario']?>">Borrar</td>
</tr>