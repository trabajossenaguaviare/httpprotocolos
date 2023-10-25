<?php
// if (array_key_exists('refcode', $_GET)) {
//     // Almacenado por  30 dias
//     setcookie('ref', $_GET['refcode'], time() + 60 * 60 * 24 * 30);
// } else {
//     echo sprintf('<p> No se estableció ningún código de referencia en la cadena de consulta. </p>');
// }


// if (array_key_exists('refcode', $_GET)) {
//     // almacenar durante 30 días
//     setcookie('ref', $_GET['refcode'], time() + 60 * 60 * 24 * 30);
//     echo sprintf(
//         '<p>El código de referencia [%s] se almacenó en una cookie. ' .
//             'Recarga la página para ver el valor de la cookie arriba. ' .
//             '<a href="super-cookie.php">Borrar la cadena de consulta</a>.</p>',
//         $_GET['refcode']
//     );
// } else {
//     echo sprintf('<p>No se estableció ningún código de referencia en la cadena de consulta.</p>');
// }
?>

<?php

if (array_key_exists('refcode', $_GET)) {
    setcookie('ref', $_GET['refcode'], time() + 60 * 60 * 24 * 30); // almacenar durante 30 días
    echo sprintf('<p>El código de referencia [%s] se almacenó en una cookie. ' .
        'Recarga la página para ver el valor de la cookie arriba. ' .
        '<a href="super_cookies.php">Borrar la cadena de consulta</a>.</p>', $_GET['refcode']);
} else {
    echo sprintf('<p>No se estableció ningún código de referencia en la cadena de consulta.</p>');
}

echo sprintf(
    '<p>Código de referencia (enviado por el navegador como cookie): [%s]</p>',
    array_key_exists('ref', $_COOKIE) ? $_COOKIE['ref'] : '-Ninguno-'
);

?>

<form action="super_cookies.php" method="get">
    <input type="text" name="refcode" placeholder="EVENT19" value="EVENT19">
    <input type="submit" value="Apply referral code">
</form>