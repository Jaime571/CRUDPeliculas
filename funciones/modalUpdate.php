<!-- Mostrar info de la película mediante un modal -->
<div class="modal fade" tabindex="-1" id="Update<?php echo $row['cod_pelicula']?>" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Cuerpo del modal -->
      <form id="FrmUpd" role="form" enctype="multipart/form-data" method="post">
        <div class="modal-body">
          <div class="card mb-3">
            <!-- <img class="card-img" src="../images/peliculas/<?php echo $row['poster']?>"
              alt="Card image cap"> -->
            <div class="card-body">
              <h2 class="card-title">
                Titulo:<input type="text" name="titulo" id="titulo" class="form-control input-sm required"
                  placeholder="Título" value="<?php echo $row['titulo']?>" required>
              </h2>
              <h6>
                Disponibilidad: <select name="estatus" id="estatus" class="form-control input-sm required" required>
                  <option>Actualmente:
                    <?php echo $row['disponibilidad']?>
                  </option>
                  <option value="Disponible">Disponible</option>
                  <option value="No Disponible">No Disponible</option>
                </select>
              </h6>
              <p class="card-text text-muted">
                Fecha de estreno: <input type="number" name="fecha_creacion" id="fecha_creacion" min="1900"
                  class="form-control input-sm required" placeholder="Año de estreno"
                  value="<?php echo $row['fecha_creacion']?>" required>
              </p>
              <p class="card-text text-muted">
                Duracion: <input type="time" name="duracion" id="duracion" min="01:25" max="04:00"
                  class="form-control input-sm required" placeholder="Año de estreno" value="<?php echo $row['duracion']?>"
                  required>
              </p>
              <p class="card-text">
                Sinopsis: <input type="text" name="sinopsis" id="sinopsis" class="form-control input-sm required"
                  placeholder="Sinopsis" value="<?php echo $row['sinopsis']?>" required>
              </p>
              <p class="card-text">
                Productoras: <input type="text" name="productora" id="productora" class="form-control input-sm required"
                  placeholder="Productora" value="<?php echo $row['productora']?>" required>
              </p>
              <h3>
                Costo: $ <input type="number" name="costo" id="costo" min="1" class="form-control input-sm required"
                  placeholder="$0.00" value="<?php echo $dinero = number_format($row['costo'])?>" required>
              </h3>
              <input type="hidden" name="cod_pelicula" value="<?php echo $cod_pelicula = $row['cod_pelicula']?>">
            </div>
          </div>
          <div class="modal-footer mx-auto">
            <button type="submit" class="btn btn-success" data-dismiss="modal" id="guardarnuevo" onclick="actualizar();">Guardar Cambios</button>
            <a href="delete.php?aksi=delete&cod_pelicula=<?php echo $cod_pelicula = $row['cod_pelicula']?>" title="Eliminar"
              onclick="return confirm(\'Esta seguro de borrar siguiente titulo: <?php $row['titulo']?>?\')"
              class="btn btn-danger">
              <span class="fa fa-trash" aria-hidden="true">Eliminar Título</span>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <span id="res">
            Resultados: <?php if (isset($_GET['r'])) echo $_GET['r'];?>
        </span>
</div>
<!-- Optional JavaScript -->
<script type="text/javascript">
        function actualizar(){
            document.getElementById("FrmUpd").method = "POST";
            document.getElementById("FrmUpd").action = "update.php";
            document.getElementById("FrmUpd").submit();
        }
    </script>