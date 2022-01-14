<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../images/icons/icono.png" />
    <title>Compañeros</title>
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
              <!-- <li class="nav-item">
                  <button class="btn btn-outline-success mr-3" data-toggle="modal"
                            data-target="#ModalNuevo">Agregar Película</button>
              </li> -->
              <!-- 
                  <li class="nav-item">
                      <button class="btn btn-outline-primary btn-lg mr-3" type="button">Buscar Película</button>
                  </li> -->
              <!-- <li class="nav-item">
                  <button class="btn btn-outline-danger mr-3" type="button">Eliminar Película</button>
              </li> -->
              <li class="nav-item">
                    <a class="btn btn-outline-info mr-3" href="catalogo.php">Mostrar Catálogo</a>
              </li>
              <form action="funciones/read.php">
                  <li class="nav-item">
                      <a class="btn btn-outline-primary nav-link active" href="read.php">Nuestros Compañeros</a>
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
  <br>
  <br>
  <br>
  <br>
  <h1>Nuestros Compañeros</h1>
  <hr>
<?php
/*
Listado de Usuarios
*/
include("conexion.php");
//incluimos la conexión a la base de datos
    $sql = mysqli_query($con, "SELECT * FROM usuarios order by id");
?>
<br/>
    <!-- //iniciamos con la tabla y la vamos preparando para bootstrap -->
    <div class="table-responsive"> <!-- //adaptable a cualquier dispositivo -->
    <table class="table table-striped table-hover"> <!-- //rayada -->
        <thead>
            <caption>Listado de Usuarios</caption> <!-- //el título de la información -->
                <tr> <!-- //los encabezados de las columnas -->
                    <th>No</th>
                    <th>Usuario</th>
                    <th>Nivel</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
        </thead>
        <tbody><!-- //los datos de la tabla -->
    <?php
        if(mysqli_num_rows($sql) == 0){
        //si no retorna ningún dato
        echo '<tr><td colspan="5">No hay datos.</td></tr>';
        }else
        {
            $no = 1;
            //mientras haya datos en la consulta
            while($row = mysqli_fetch_assoc($sql)){
                //pintamos la tabla
                echo '
                <tr>
                    <td>'.$no.'</td>
                    
                    <td>
                        <a href="profile.php?nid='.$row['id'].'">
                        <span class="fa fa-user" aria-hidden="true"></span> '.$row['user'].'</a>
                    </td>
                    <td>'.$row['level'].'</td>
                    
                    <td><img  width="50" height="50" src=../images/usuarios/'.$row['imagen'].'></td>
                    ';
                //ahora las acciones
                echo '
                <td>
                    
                    <a href="edit.php?nid='.$row['id'].'" title="Editar datos" class="btn btn-primary
                    btn-sm"><span class="fa fa-edit" aria-
                    hidden="true">Editar</span>Editar</a>
                    
                    <a href="index.php?aksi=delete&nid='.$row['id'].'" title="Eliminar"
                    onclick="return confirm(\'Esta seguro de borrar los datos '.$row['user'].'?\')"
                    class="btn btn-danger btn-sm"><span class="fa fa-trash" aria-
                    hidden="true">Eliminar</span>Eliminar</a>
                </td>
                </tr>
                ';
                $no++;
            }
        }
        ?>

<?php
mysqli_free_result($sql);
$con->close();
?>
<?php include("modalAgregar.php")?>
</body>
</html>