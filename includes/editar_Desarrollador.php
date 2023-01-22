<div class="modal fade" id="editarDesarrolador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Editar Desarrollador</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body px-4">
          <form method="post" action="../crud/update.php">
            <div class="mb-3">
              <label for="idDesarrollador" class="form-label fs-5">Seleccionar Desarrollador:</label>
              <select class="form-select rounded-pill" name="idDesarrollador" id="idDesarrollador" required>
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
            <div id="contenidoForm">
              <div class="mb-3">
                <label for="nombre" class="form-label fs-5">Nombre:</label>
                <input type="text" class="form-control rounded-pill border-2" name="nombre" placeholder="Nombre">
              </div>
              <div class="mb-3">
                <label for="apellidos" class="form-label fs-5">Apellidos:</label>
                <input type="text" class="form-control rounded-pill border-2" name="apellidos" placeholder="Apellidos">
              </div>
              <div class="mb-3">
                <label for="edad" class="form-label fs-5">Edad:</label>
                <input type="text" class="form-control rounded-pill border-2" name="edad" placeholder="Edad">
              </div>
              <div class="mb-3">
                <label for="numIdentificacon" class="form-label fs-5">Numero Identificación:</label>
                <input type="text" class="form-control rounded-pill border-2" name="numIdentificacon" placeholder="Identificación">
              </div>
              <div class="mb-3">
                <label for="pais" class="form-label fs-5">Nacionalidad:</label>
                <input type="text" class="form-control rounded-pill border-2" name="pais" placeholder="Nacionalidad">
              </div>
              <div class="mb-3">
                <label for="carrera" class="form-label fs-5">Perfil de Desarrollador:</label>
                <input type="text" class="form-control rounded-pill border-2" name="carrera" placeholder="Perfil Desarrollador">
              </div>
            </div>
            <div class="d-grid gap-2 my-4">
              <button class="rounded-pill fs-4 shadow-sm" type="submit" name="editarDesarrollador">Editar Desarrollador</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>