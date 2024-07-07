Dropzone.autoDiscover = false;
var myDropzone = new Dropzone("#myDropzone", {
    url: "#",
    autoProcessQueue: false,
    paramName: "file",
    maxFilesize: 100, // MB
    maxFiles: 1,
    acceptedFiles: "image/*",
    addRemoveLinks: true,
    dictDefaultMessage: '<i class="bi bi-box-arrow-up text-success"></i> Arrastre o seleccione una imagen',
    dictRemoveFile: 'Eliminar'
});

$("#form1covid").on("submit", function(e) {
    e.preventDefault();

    Swal.fire({
        title: '¿Estás seguro de hacer el diagnóstico?',
        text: "Esta acción enviará los datos del formulario",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            var formData = new FormData(this);
            var nombres = $("#nombres").val();
            formData.append('nombres', nombres);

            myDropzone.getAcceptedFiles().forEach(function(file) {
                formData.append('file', file);
            });

            $.ajax({
                url: '/system_covid19/controlador/controller_service.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    //console.log(response);
                    var nombres = $("#nombres").val();

                    // Determinar el diagnóstico según la respuesta del servidor
                    var diagnostico = (response === 'SI') ? 'RESULTADO: Usted dió positivo en la prueba realizada, por favor tome precausiones' : 'RESULTADO: Usted dió negativo en la prueba realizada';

                    //Swal.fire('Enviado','El dignóstico se ha realizado correctamente', 'success');
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
                            Swal.fire('Éxito', 'El dignóstico se ha realizado correctamente', 'success');
                            // Actualizar el nombre en el elemento HTML con ID "nombre"
                            $("#nombre").text(nombres);
                            // Actualizar el diagnóstico en el elemento HTML con ID "resultado"
                            $("#resultado").text(diagnostico);
                        }
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    Swal.fire('Error', 'Hubo un error al enviar los datos', 'error');
                }
            });
        }
    });
});