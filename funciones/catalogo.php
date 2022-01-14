<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <title>Catalogo</title>
  <style type="text/css">
    .slider {
      background: url(../images/room-with-neon-lights_1920x1080_xtrafondos.com.jpg);
      height: 100vh;
      background-size: cover;
      background-position: center;
    }
  </style>
  <link rel="shortcut icon" href="../images/icons/icono.png" />
</head>

<body>
  <section>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top rounded" style="background-color: #302b63;">
      <a class="navbar-brand" href="index.php">
        <img src="../images/icons/icono.png" width="50" height="50" class="d-inline-block align-center" alt="">
        ¡Rent-a!
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <!--<a class="nav-item nav-link active" href="">
                      Expresiones 1
                  </a> -->
            <button class="btn btn-outline-success mr-3" data-toggle="modal"
                      data-target="#ModalNuevo">Agregar Película</button>
          </li>
          <!-- 
                  <li class="nav-item">
                      <button class="btn btn-outline-primary btn-lg mr-3" type="button">Buscar Película</button>
                  </li> -->
          <!-- <li class="nav-item">
            <button class="btn btn-outline-danger mr-3" type="button">Eliminar Película</button>
          </li> -->
          <li class="nav-item">
            <button class="btn btn-outline-info  mr-3 nav-link active" type="button">Mostrar Catálogo</button>
          </li>
          <form action="funciones/read.php">
            <li class="nav-item">
              <a class="btn btn-outline-primary" href="read.php">Nuestros Compañeros</a>
              <!-- <button class="btn btn-outline-primary" type="submit">Nuestros Compañeros</button> -->
            </li>
          </form>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="¡Busca tu Película!" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </section>
  <div class="container">
    <?php 
      include("conexion.php");
      $sql = mysqli_query($con, "SELECT * FROM peliculas");
    ?>
    <br>
    <br>
    <br>
    <hr>
    <h1>Las Favoritas</h1>
    <hr>
    <div class="row">

      <div class="card-columns">

        <?php
            while($row = mysqli_fetch_assoc($sql))
            {
        ?>

              <div class="card border-info shadow" style="width: 20rem;">
                <img class="card-img-top img-fluid" src="../images/peliculas/<?php echo $row['poster']?>"
                  alt="Card image cap">
                <div class="card-body bg-light">
                  <h3 class="card-title">
                    <?php echo $row['titulo']?>
                  </h3><!-- Nombre de la película -->
                  <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-primary"><?php echo $row['fecha_creacion']?></span>
                  </h6>
                  <p class="card-text">
                    <?php echo $row['sinopsis']?>
                  </p>
                  <button class="btn btn-outline-success btn-block disabled" 
                    type="button"
                    data-toggle="modal"
                    data-target="#Detalles<?php echo $row['cod_pelicula']?>">
                    Rentar
                  </button>
                  <button class="btn btn-outline-info btn-block"
                    type="button"
                    data-toggle="modal"
                    data-target="#Detalles<?php echo $row['cod_pelicula']?>">
                    Ver más...
                  </button>
                    <!-- <a href="#" class="btn btn-outline-success btn-block">Rentar</a>
                    <a href="#" class="btn btn-outline-info btn-block">Ver más</a> -->
                  </div>
                </div>
                <?php  include('modalDetail.php'); ?>
        <?php
            }
        ?>

      </div>
    </div>
  </div>
  <?php include("modalAgregar.php")?>
  </div>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>