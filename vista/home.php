<?php
require_once("layouts/header.php");
?>
<div id="particles-js" style="background-color: #26805E"></div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <form id="form1covid" enctype="multipart/form-data">
                <div class="card shadow-lg p-3 mb-5 rounded" >
                    <div class="card-header bg-white">
                        <h5 class="card-title">Datos iniciales para el diagnóstico</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="BreathingProblem">Problema respiratorio:</label>
                                <select class="form-select" id="BreathingProblem" name="BreathingProblem">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Fever">Fiebre:</label>
                                <select class="form-select" id="Fever" name="Fever">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="DryCough">Tos seca:</label>
                                <select class="form-select" id="DryCough" name="DryCough">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Sorethroat">Dolor de garganta:</label>
                                <select class="form-select" id="Sorethroat" name="Sorethroat">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="RunningNose">Nariz congestionada:</label>
                                <select class="form-select" id="RunningNose" name="RunningNose">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Asthma">Asma:</label>
                                <select class="form-select" id="Asthma" name="Asthma">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="ChronicLungDisease">Enfermedad pulmonar crónica:</label>
                                <select class="form-select" id="ChronicLungDisease" name="ChronicLungDisease">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Headache">Dolor de cabeza:</label>
                                <select class="form-select" id="Headache" name="Headache">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="HeartDisease">Enfermedad cardíaca:</label>
                                <select class="form-select" id="HeartDisease" name="HeartDisease">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Diabetes">Diabetes:</label>
                                <select class="form-select" id="Diabetes" name="Diabetes">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="HyperTension">Hipertensión:</label>
                                <select class="form-select" id="HyperTension" name="HyperTension">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Fatigue">Fatiga:</label>
                                <select class="form-select" id="Fatigue" name="Fatigue">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Gastrointestinal">Problemas gastrointestinales:</label>
                                <select class="form-select" id="Gastrointestinal" name="Gastrointestinal">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Abroadtravel">Viaje al extranjero:</label>
                                <select class="form-select" id="Abroadtravel" name="Abroadtravel">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="ContactwithCOVIDPatient">Contacto con paciente COVID-19:</label>
                                <select class="form-select" id="ContactwithCOVIDPatient" name="ContactwithCOVIDPatient">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="AttendedLargeGathering">Asistencia a grandes reuniones:</label>
                                <select class="form-select" id="AttendedLargeGathering" name="AttendedLargeGathering">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="VisitedPublicExposedPlaces">Visitó lugares públicos expuestos:</label>
                                <select class="form-select" id="VisitedPublicExposedPlaces" name="VisitedPublicExposedPlaces">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="FamilyworkinginPublicExposedPlaces">Familia trabajando en lugares públicos expuestos:</label>
                                <select class="form-select" id="FamilyworkinginPublicExposedPlaces" name="FamilyworkinginPublicExposedPlaces">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="WearingMasks">Uso de mascarillas:</label>
                                <select class="form-select" id="WearingMasks" name="WearingMasks">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="SanitizationfromMarket">Desinfección después de ir al mercado:</label>
                                <select class="form-select" id="SanitizationfromMarket" name="SanitizationfromMarket">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-right-square"></i> Realizar Diagnóstico</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5  rounded">
                <div class="card-header bg-white">
                    <h5 class="card-title">Resultado del diagnóstico</h5>
                </div>
                <div class="card-body">

                    <div class="text-center">
                        <i class="bi bi-person-circle" style="font-size: 80px;"></i>
                        <!--h6 id="nombre" class="card-subtitle mb-2 text-muted">Pedrito Perez</h6-->
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
<script>
    document.getElementById('form1covid').addEventListener('submit', async function(event) {
        event.preventDefault();

        Swal.fire({
            title: '¿Estás seguro de hacer el diagnóstico?',
            text: "Esta acción enviará los datos del formulario",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar'
        }).then(async (result) => {
            if (result.isConfirmed) {
                const formData = new FormData(event.target);
                const data = {};

                formData.forEach((value, key) => {
                    data[key] = parseInt(value);
                });
                console.log(data);
                try {
                    const response = await fetch('https://oscarcz-proy-final.hf.space/predict/', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    });

                    if (!response.ok) {
                        throw new Error('Error en la solicitud');
                    }
                    const result = await response.json();
                    if (result.Prediction === 0) {
                        var dataresult = 0;
                        var resultado = "RESULTADO: Usted dió negativo en la prueba realizada";
                    } else if (result.Prediction === 1) {
                        var dataresult = 1;
                        var resultado = "RESULTADO: Usted dió positivo en la prueba realizada, por favor tome precausiones";
                    }
                    //var nombres = $("#nombres").val();
                    let timerInterval;
                    Swal.fire({
                        title: "Diagnóstico en progreso",
                        html: "Espere por favor mientras se realiza el diagnóstico <b></b>",
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading();
                            const timer = Swal.getPopup().querySelector("b");
                            timerInterval = setInterval(() => {
                                timer.textContent = `${Swal.getTimerLeft()}`;
                            }, 100);
                        },
                        willClose: () => {
                            clearInterval(timerInterval);
                        }
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {

                            Swal.fire({
                                title: 'Éxito',
                                text: 'El diagnóstico se ha realizado correctamente',
                                icon: 'success',
                                didClose: () => {
                                    if (dataresult === 0) {
                                        Swal.fire('Resultado', 'Felicidades usted dió negativo en la prueba realizada', 'success');

                                    } else if (dataresult === 1) {
                                        Swal.fire('Resultado', 'Usted dió positivo en la prueba realizada, por favor tome precausiones', 'warning');

                                    }
                                }
                            });
                            //Swal.fire('Éxito', 'El dignóstico se ha realizado correctamente', 'success');

                            // Actualizar el nombre en el elemento HTML con ID "nombre"
                            //$("#nombre").text(nombres);
                            // Actualizar el diagnóstico en el elemento HTML con ID "resultado"

                            $("#resultado").text(resultado);
                        }
                    });

                    console.log(result);
                } catch (error) {
                    console.error('Error:', error);
                }
            }
        });
    });
</script>