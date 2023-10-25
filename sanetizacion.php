<?php
// Utilizando la función strip_tags()
$input = 'Hello <script>alert(1)</script> World!';
$sanitizedInput = strip_tags($input);
echo $sanitizedInput;  // Resultado: "Hello alert(1) World!"

echo "<br>";

// Utilizando la función trim()
$nombre = "     Juan     ";
$nombreTrimmed = trim($nombre);
echo "Hola, " . $nombreTrimmed . "!";  // Resultado: "Hola, Juan!"

echo "<br>";

// Utilizando la función is_numeric()
$numero = "12345";
if(is_numeric($numero)) {
    echo $numero . " es un número.";
} else {
    echo $numero . " no es un número.";
}  // Resultado: "12345 es un número."

echo "<br>";

// Utilizando la función preg_match()
$correo = "juan@example.com";
if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $correo)) {
    echo $correo . " es un correo válido.";
} else {
    echo $correo . " no es un correo válido.";
}  // Resultado: "juan@example.com es un correo válido."

echo "<br>";

// Utilizando la función in_array()
$frutas = array("manzana", "banana", "cereza");
$frutaBuscada = "banana";
if(in_array($frutaBuscada, $frutas)) {
    echo "La " . $frutaBuscada . " está en la lista.";
} else {
    echo "La " . $frutaBuscada . " no está en la lista.";
}  // Resultado: "La banana está en la lista."
