<div class="modal fade" id="modalEliminarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Eliminar Usuario:</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body px-4">
          <form method="post" action="../crud/delete.php">
            <div class="mb-3">
              <label for="idDesarrollador" class="form-label fs-5">Nombre Usuario:</label>
              <select class="form-select rounded-pill" name="usuario">
                  <option selected disabled>Seleccionar..</option>
                  <?php
                      $query ="SELECT id_usuario, nombre_usuario FROM usuarios";
                      $resultado = mysqli_query($conexion, $query);
                      while ($row = mysqli_fetch_assoc($resultado)) {
                          echo '<option value="'.$row['id_usuario'].'">'.$row['nombre_usuario'].'</option>';
                      }
                  ?>
              </select>
            </div>
            <div class="d-grid gap-2 my-4">
              <button class="rounded-pill fs-4 shadow-sm" type="submit" name="elimanar">Elimar Usuario</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>