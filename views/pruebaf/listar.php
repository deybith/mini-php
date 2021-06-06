<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $key => $value): ?>
    	<tr>
    		<td><?= $value->id ?></td>
    		<td><?= $value->nombre ?></td>
    		<td><?= $value->apellido ?></td>
    		<td><?= $value->cedula ?></td>
    		<td><?= $value->fecha_nacimiento ?></td>
    		<td><?= $value->telefono ?></td>
    		<td><?= $value->direccion_correo ?></td>
    		<td><a href="index.php?controller=prueba&action=update&id=<?= $value->id ?>">Actualizar</a>-
    		<a href="index.php?controller=prueba&action=delete&id=<?= $value->id ?>">Borrar</a></td>
    	</tr>
    <?php endforeach;?>
  </tbody>
</table>
<a class="btn btn-dark" href="index.php?controller=prueba&action=crear">crear</a>
