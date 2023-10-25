<?php

$uploadsDir = __DIR__ . DIRECTORY_SEPARATOR . "img";
// $uploadsDir = __DIR__;
$targetFilename = $uploadsDir . DIRECTORY_SEPARATOR . 'my-image.png';
$relativeFilename = substr($targetFilename, strlen(__DIR__));
// var_dump($uploadsDir);
// var_dump($relativeFilename);
// die;

if (array_key_exists('uploadFile', $_FILES)) {
    $uploadInfo = $_FILES['uploadFile'];
    // var_dump($_FILES['uploadFile']);
    // die;
    switch ($uploadInfo['error']) {
        case UPLOAD_ERR_OK:
            if (mime_content_type($uploadInfo['tmp_name']) !== 'image/png') {
                echo sprintf('El archivo cargado [%s] no está en formato de imagen PNG.', $uploadInfo['name']);
            } else {
                if (!move_uploaded_file($uploadInfo['tmp_name'], $targetFilename)) {
                    echo 'No se puede guardar la imagen cargada.';
                } else {
                    echo 'El archivo se cargó correctamente.';
                }
            }
            break;
        case UPLOAD_ERR_INI_SIZE:
            echo sprintf('No se pudo cargar [%s]: el archivo es demasiado grande.', $uploadInfo['name']);
            break;
        case UPLOAD_ERR_NO_FILE:
            echo 'No se cargó ningún archivo.';
            break;
        default:
            echo sprintf('No se pudo cargar [%s]: código de error [%d].', $uploadInfo['name'], $uploadInfo['error']);
            break;
    }
}

if (file_exists($targetFilename)) {
    var_dump($realitiveFilename);
    die;
    echo sprintf('<br><img src="%s" style="max-width: 500px; height: auto;" alt="mi imagen cargada">', $relativeFilename);
}

?>

<form action="./file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploadFile">
    <input type="submit" value="Cargar">
</form>|