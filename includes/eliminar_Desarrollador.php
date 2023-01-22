<div class="modal fade" id="EliminarDesarrollador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Eliminar Desarrollador</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body px-4">
          <form method="post" action="../crud/delete.php">
            <div class="mb-3">
            <label for="idDesarrollador" class="form-label fs-5">Seleccionar Desarrollador:</label>
              <select class="form-select rounded-pill" name="idDesarrollador" required>
                  <option selected disabled>Seleccionar..</option>
                  <?php
                      $query ="SELECT CONCAT(nombre,' ', apellidos) AS nombre, id_desarrollador FROM `desarrolladores`";
                      $resultado = mysqli_query($conexion, $query);
                      while ($row = mysqli_fetch_assoc($resultado)) {
                          echo '<option value="'.$row['id_desarrollador'].'">'.$row['nombre'].'</option>';
                      }
                  ?>
              </select>
            </div>
            <div class="d-grid gap-2 my-4">
              <button class="rounded-pill fs-4 shadow-sm" type="submit" name="elimanarDesarrollador">Elimar Desarrollador</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>