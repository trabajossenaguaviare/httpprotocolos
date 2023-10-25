<?php
// Función para enviar una respuesta HTTP con un código de estado y un mensaje personalizado
function sendHttpResponse($statusCode, $message)
{
    http_response_code($statusCode);
    echo $message;
}

// Ejemplo de solicitud HTTP
$_SERVER['REQUEST_METHOD'] = "PUT";
$requestMethod = $_SERVER['REQUEST_METHOD'];

// var_dump($requestMethod);
// die; 

// Aquí simulamos diferentes tipos de respuestas HTTP según la solicitud
if ($requestMethod === 'GET') {
    // Respuesta 200 OK
    sendHttpResponse(200, 'La solicitud GET ha tenido éxito.');
} elseif ($requestMethod === 'POST') {
    // Respuesta 201 Created
    sendHttpResponse(201, 'La solicitud POST ha tenido éxito y se ha creado un nuevo recurso.');
} elseif ($requestMethod === 'PUT') {
    // Respuesta 202 Accepted
    sendHttpResponse(202, 'La solicitud PUT ha sido aceptada, pero aún no se ha actuado.');
} elseif ($requestMethod === 'DELETE') {
    // Respuesta 204 No Content
    sendHttpResponse(204, 'La solicitud DELETE se ha completado con éxito, pero no tiene contenido.');
} elseif ($requestMethod === 'HEAD') {
    // Respuesta 200 OK (o 204 No Content si no se quiere contenido en la respuesta)

} elseif ($requestMethod === 'TRACE') {
    // Respuesta 200 OK o cualquier otra respuesta adecuada

} else {
    // Respuesta 405 Method Not Allowed para otros métodos
    sendHttpResponse(405, 'El método solicitado no está permitido en este servidor.');
}
