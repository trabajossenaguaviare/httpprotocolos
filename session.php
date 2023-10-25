<?php


if (!session_start()) {
    echo 'No se puede iniciar la sesión.';
    return;
}

$sessionName = session_name(); // PHPSESSID de forma predeterminada

if (array_key_exists($sessionName, $_COOKIE)) {
    echo sprintf('<p>La cookie con nombre de sesión [%s] y valor [%s] ' .
        'está configurada en el navegador y se envía al script.</p>', $sessionName, $_COOKIE[$sessionName]);
    echo sprintf('<p>La sesión actual contiene los siguientes datos: <pre>%s</pre></p>', var_export($_SESSION, true));
} else {
    echo sprintf('<p>La cookie con nombre de sesión [%s] no existe.</p>', $sessionName);
    echo sprintf(
        '<p>Se confgitigurará una nueva cookie para el nombre de sesión [%s], con el valor [%s]</p>',
        $sessionName,
        session_id()
    );
    $nombres = [
        "A-Bomb (HAS)",
        "Capitán América",
        "Pantera Negra",
    ];
    $elegido = $nombres[rand(0, 2)];

    $_SESSION['name'] = $elegido;
    
    echo sprintf('<p>El nombre [%s] se eligió y se almacenó en la sesión actual.</p>', $elegido);
    echo sprintf('Lista de encabezados para enviar en la respuesta: <pre>%s</pre>', implode("\n", headers_list()));
}
