<form action="./index.php?controller=main&action=create" method="post">

  <div class="form-group">
    <label> Nombre </label>
    <input class="form-control" name="prueba[nombre]" />
  </div>
  <div class="form-group">
    <label> Apellido </label>
    <input class="form-control" name="prueba[apellido]" />
  </div>

  <input type="submit" value="Guardar" class="btn btn-success" />

</form>