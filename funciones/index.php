<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <title>¡Renta!</title>
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

<body class="bg-warning">
    <content>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top rounded " style="background-color: #302b63;">
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
                        <a class="btn btn-outline-info mr-3" href="catalogo.php">Mostrar Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="read.php">Nuestros Compañeros</a>
                        <!-- <button class="btn btn-outline-primary" type="submit">Nuestros Compañeros</button> -->
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="¡Busca tu Película!"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>

        <section class="container-fluid slider d-flex justify-content-center align-items-center">
            <article class="row">
                <h1 class="col-12 display-2 text-center text-warning">
                    Bienvenido a ¡Rent - A!
                </h1>
                <h2 class="col-12 display-4 text-center text-warning">Todo el entretenimiento en un solo lugar</h2>
            </article>
        </section>

        <section class="container">
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            </nav> -->

            <article class="mt-5 text-center font-weight-bold font-italic text-uppercase">
                <h1>Primero el titulo.</h1>
            </article>
            <article class="text-primary h4">
                Aliquid adipisci enim, dolore doloremque doloribus praesentium,
                maiores laboriosam amet eligendi sed blanditiis, quos excepturi eius sequi.
                Consectetur,labore et id magni cupiditate sint necessitatibus odit
                voluptatibus, laudantium velit temporibus.
            </article>
            <!-- <article class="bg-primary text-white p-4 w-25 float-left mr-4">
                Opciones:
            </article> -->
            <article class="text-justify text-secondary h4">
                <p>Modi ad fuga quos earum adipisci maiores, sint
                    beatae, error eligendi nostrum, culpa. Qui nisi dolorum non odit possimus repudiandae
                    eveniet aliquam inventore deleniti totam, est facere excepturi ea quo!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, qui
                    voluptatum dicta rerum, nam adipisci laudantium officia excepturi totam cum maiores a
                    iure at odit quas voluptate molestiae fuga dolores.</p>
                <p>Officia necessitatibus corporis laboriosam deleniti aliquid sit voluptas
                    reiciendis, aliquam cupiditate accusamus voluptate. Debitis dolore explicabo natus velit
                    ratione, error nobis, harum voluptate cumque obcaecati eius, animi ducimus doloremque
                    perspiciatis.
                    At possimus aspernatur ab voluptatum nam aperiam excepturi aliquid, vitae
                    ipsum commodi, nostrum corrupti iusto, nemo nesciunt hic iste. Consequuntur qui quaerat
                    impedit recusandae quis nihil dolores labore odit ratione.</p>
                <p>Officia necessitatibus corporis laboriosam deleniti aliquid sit voluptas
                    reiciendis, aliquam cupiditate accusamus voluptate.</p>
                <p>Debitis dolore explicabo natus velit ratione, error nobis, harum voluptate
                    cumque obcaecati eius, animi ducimus doloremque perspiciatis.
                    Modi ad fuga quos earum adipisci maiores, sint beatae, error eligendi nostrum,
                    culpa. Qui nisi dolorum non odit possimus repudiandae eveniet aliquam inventore deleniti
                    totam, est facere excepturi ea quo!</p>

            </article>
        </section>
        <?php include("modalAgregar.php")?>
    </content>
    <!-- <div class="modal fade" id="ModalNuevo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar un nuevo título</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="FrmAdd" role="form" enctype="multipart/form-data" method="post">
                    <div class="modal-body">
                        <label for="titulo">
                            Título
                            <input type="text" name="titulo" id="titulo" class="form-control input-sm required" placeholder="Título" required>
                        </label>
                        <br>
                        <label for="fecha_creacion">
                            Fecha de estreno
                            <input type="number" name="fecha_creacion" id="fecha_creacion" min="1900" class="form-control input-sm required" placeholder="Año de estreno" required>
                        </label>
                        <label for = "duracion">
                            Duracion
                            <input type="time" name="duracion" id="duracion" min="01:25" max="04:00" class="form-control input-sm required" placeholder="Año de estreno" required>
                        </label>
                        <br>
                        <label for = "estatus">
                            Disponibilidad
                            <select name="estatus" id="estatus" class="form-control input-sm required" required>
                                <option>Seleccione el estatus del titulo...</option>
                                <option value="Disponible">Disponible</option>
                                <option value="No Disponible">No Disponible</option>
                            </select>
                        </label>
                        <label for = "costo">
                            Costo del Título
                            <input type="number" name="costo" id="costo" min="1" class="form-control input-sm required" placeholder="$0.00" required>
                        </label>
                        <br>
                        <label for = "sinopsis">
                            Sinopsis
                            <input type="text" name="sinopsis" id="sinopsis" class="form-control input-sm required" placeholder="Sinopsis" required>
                        </label>
                        <label for="productora" >
                            Productora
                            <input type="text" name="productora" id="productora" class="form-control input-sm required" placeholder="Productora" required>
                        </label>
                        <label for = "poster">
                            Poster
                            <input type="file" name="poster" id="poster" class="form-control input-sm" />
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-dismiss="modal" id="guardarnuevo" onclick="agregar();">Guardar título</button>
                    </div>
                </form>
            </div>
        </div>
        <span id="res">
            Resultados: <?php if (isset($_GET['r'])) echo $_GET['r'];?>
        </span>
    </div>
    
    <script type="text/javascript">
        function agregar(){
            document.getElementById("FrmAdd").method = "POST";
            document.getElementById("FrmAdd").action = "funciones/agregar.php";
            document.getElementById("FrmAdd").submit();
        }
    </script> -->

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