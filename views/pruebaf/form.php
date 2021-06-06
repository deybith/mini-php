<form  id="formulario" method="post" action="" >
	  <div class="form-group">
		    <label for="nombres">Nombres</label>
		    <input type="text" class="form-control" name="nombre" value="<?= isset($row) ? $row->nombre : null ?>" id="nombres" placeholder="Ingrese nombres" >
	  </div>
	  <div class="form-group">
		    <label for="apellidos">Apellidos</label>
		    <input type="text" class="form-control" name="apellido" value="<?= isset($row) ? $row->apellido : null ?>" id="apellidos" placeholder="Ingrese apellidos" >
	  </div>
	  <div class="form-group">
		    <label for="Cedula">Cedula</label>
		    <input type="number" class="form-control" name="cedula" value="<?= isset($row) ? $row->cedula : null ?>" id="cedula" placeholder="Ingrese edula" >
	  </div>
	  <div class="form-group">
		    <label for="Fecha Nacimiento">Fecha Nacimiento</label>
		    <input type="date" class="form-control" name="fecha_nacimiento" value="<?= isset($row) ? $row->fecha_nacimiento : null ?>" id="fechaNacimiento" placeholder="Ingrese fecha de Nacimiento" >
	  </div>
	  <div class="form-group">
		    <label for="Telefono">Telefono</label>
		    <input type="number" class="form-control" name="telefono" value="<?= isset($row) ? $row->telefono : null ?>" id="numeroTelefono" placeholder="Ingrese telefono" >
	  </div>
	  <div class="form-group">
		    <label for="Direccion Correo">Direccion Correo</label>
		    <input type="email" class="form-control" name="direccion_correo" value="<?= isset($row) ? $row->direccion_correo : null ?>" id="direccionCorreo" placeholder="Ingrese email" >
	  </div>
	  <button type="submit" class="btn btn-primary">Guardar</button>
</form>