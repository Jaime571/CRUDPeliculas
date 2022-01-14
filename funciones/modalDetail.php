<!-- Mostrar info de la película mediante un modal -->
<div class="modal fade" tabindex="-1" id="Detalles<?php echo $row['cod_pelicula']?>" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalles de la película</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Cuerpo del modal -->
      <div class="card mb-3">
        <img class="card-img" src="../images/peliculas/<?php echo $row['poster']?>"
          alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">
            <?php echo $row['titulo']?>
          </h2>
          <h6>
            <?php 
              if($row['disponibilidad'] == "Disponible"){
            ?>
              <span class="badge badge-success"><?php echo $row['disponibilidad']?></span>
            <?php }else{ ?>
              <span class="badge badge-danger"><?php echo $row['disponibilidad']?></span>
            <?php }?>
          </h6>
          <p class="card-text text-muted">Año de estreno:
            <span class="badge badge-primary">
              <?php echo $row['fecha_creacion']?>
            </span>
          </p>
          <p class="card-text text-muted">Duracion:
            <?php echo $row['duracion']?>
          </p>
          <p class="card-text">
            <?php echo $row['sinopsis']?>
          </p>
          <p class="card-text">Productoras:
            <?php echo $row['productora']?>
          </p>
          <h3>Costo: 
            <span class="badge badge-info">
              $
              <?php echo $dinero = number_format($row['costo'])?>
            </span>
          </h3>
        </div>
      </div>
      <div class="modal-footer mx-auto">
        <button class="btn btn-primary btn-block"
                type="button"
                data-toggle="modal"
                data-target="#Update<?php echo $row['cod_pelicula']?>">Editar Título</button>
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Volver</button>
        <a href="delete.php?aksi=delete&cod_pelicula=<?php echo $cod_pelicula = $row['cod_pelicula']?>" 
           title="Eliminar"
           onclick="return confirm(\'Esta seguro de borrar siguiente titulo: <?php $row['titulo']?>?\')"
           class="btn btn-danger ">
            <span class="fa fa-trash" 
                  aria-hidden="true">Eliminar Título</span>
        </a>
      </div>
    </div>
  </div>
  <?php  include('modalUpdate.php'); ?>
</div>