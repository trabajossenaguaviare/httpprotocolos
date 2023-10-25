<?php

// Declarar tipos estrictos
declare(strict_types=1);

// Filtrar y obtener el valor de 'stars' del método POST y sanitizarlo como número entero
$stars = filter_input(INPUT_POST, 'stars', FILTER_SANITIZE_NUMBER_INT);
// $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
// Filtrar y obtener el valor de 'message' del método POST y sanitizarlo como cadena de caracteres con caracteres especiales completos
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Alternativa para sanitizar 'message' usando htmlspecialchars:
// $message = isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : "";

// Verificar si 'stars' es nulo
if (null === $stars) {
    // Tratar el caso en que la entrada no existe
    echo '<p>La entrada de Stars no está definida.</p>';
} elseif (false === $stars) {
    // Tratar el caso en que el filtro falla
    echo '<p>Stars no pasó el filtro de saneamiento.</p>';
} else {
    // Primer enfoque: Convertir 'stars' a un entero
    $stars = (int)$stars;
    if ($stars < 1 || $stars > 5) {
        echo '<p>Stars puede tener valores entre 1 y 5.</p>';
    }
    // O segundo enfoque: Utilizar filter_var para validar 'stars'
    $stars = filter_var($stars, FILTER_VALIDATE_INT, [
        'options' => [
            'default' => 0, // Valor a devolver si la validación falla
            'min_range' => 1,
            'max_range' => 5,
        ]
    ]);
    if (0 === $stars) {
        echo '<p>Stars puede tener valores entre 1 y 5.</p>';
    }
}

// Verificar si 'message' es nulo
if (null === $message) {
    // Tratar el caso en que la entrada no existe
    echo '<p>La entrada de Message no está definida.</p>';
} elseif (false === $message) {
    // Tratar el caso en que el filtro falla
    echo '<p>Message no pasó el filtro de saneamiento.</p>';
}

// Mostrar los valores filtrados/sanitizados
echo sprintf("<p>Estrellas: %s</p><p>Mensaje: %s</p>", var_export($stars, true), var_export($message, true));

?>

<hr>

<!-- Formulario para enviar datos POST -->
<form method="post">
    <label for="stars">Estrellas: </label><br>
    <input type="text" name="stars" id="stars"><br>
    <label for="message">Mensaje: </label><br>
    <textarea name="message" id="message" rows="10" cols="40"></textarea><br>
    <input type="submit" value="Enviar">
</form>