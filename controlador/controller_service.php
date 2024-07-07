<?php

$nombres = $_POST['nombres']; 
$file = $_FILES['file']; 

$targetDir = "../vista/imagenes/"; 
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true); // Crea la carpeta con permisos 7777 (lectura y escritura para el propietario, lectura para el grupo y otros)
}
$originalName = basename($file["name"]);
$ext = pathinfo($originalName, PATHINFO_EXTENSION);

$newName = "radio_" . str_replace(" ", "_", $nombres) . ".$ext";
$targetFileNew = $targetDir . $newName;

if (move_uploaded_file($file["tmp_name"], $targetFileNew)) {
    //echo "El archivo " . basename($file["name"]) . " ha sido subido correctamente.";
    $diagnostico = 'SI'; 

    echo $diagnostico;
} else {
    echo "Hubo un error al subir el archivo.";
}