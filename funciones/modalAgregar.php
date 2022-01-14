<div class="modal fade" id="ModalNuevo" tabindex="-1" role="dialog" aria-hidden="true">
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
    <!-- Optional JavaScript -->
    <script type="text/javascript">
        function agregar(){
            document.getElementById("FrmAdd").method = "POST";
            document.getElementById("FrmAdd").action = "agregar.php";
            document.getElementById("FrmAdd").submit();
        }
    </script>