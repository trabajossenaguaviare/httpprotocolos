<pre>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST);
        die();
    }
    ?> 
 
</pre>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <form method="post" action="" enctype="multipart/form-data" >
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>


</body>

</html>