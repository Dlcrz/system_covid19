<?php
require_once("layouts/header.php");
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <form id="form1covid" enctype="multipart/form-data">
                <div class="card shadow-lg p-3 mb-5  rounded">
                    <div class="card-header bg-white ">
                        <h5 class="card-title">Datos iniciales para el diagnóstico</h5>
                    </div>
                    <div class="card-body ">
                        <div class="mb-3">
                            <label for="nombres" class="form-label">Nombres y Apellidos</label>
                            <input type="text" class="form-control" name="nombres" id="nombres">
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Seleccionar Imagen</label>
                            <div class="dropzone text-bg-light" id="myDropzone">

                            </div>
                        </div>

                    </div>
                    <div class="card-footer bg-white">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-right-square"></i> Realizar Diagnóstico</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card shadow-lg p-3 mb-5  rounded">
                <div class="card-header bg-white">
                    <h5 class="card-title">Resultado del diagnóstico</h5>
                </div>
                <div class="card-body">

                    <div class="text-center">
                        <i class="bi bi-person-circle" style="font-size: 80px;"></i>
                        <h6 id="nombre" class="card-subtitle mb-2 text-muted">Pedrito Perez</h6>
                        <p class="card-text">Diagnóstico: <span>&#x1F41E;</span></p>
                        <p class="card-text" id="resultado">RESULTADO:</p>
                    </div>

                </div>
                <br>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-info" onclick="recargarPagina()"><i class="bi bi-arrow-repeat"></i> Volver a realizar el diagnóstico</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once("layouts/footer.php");
?>
<script src="/system_covid19/vista/js/script.js"></script>