<form action="/tu/endpoint" method="POST" enctype="application/x-www-form-urlencoded">
    <!-- Aquí colocas tus campos de formulario -->
    <input type="file" name="archivo" />
    <input type="text" name="nombre" />
    <!-- Otros campos de formulario -->
    <input type="submit" value="Enviar" />
</form>

<!-- curl 'http://127.0.0.1:8080/formencode.php' -H 'Content-Type: application/x-www-form-urlencoded' --data 'nickname=Camilo' -->
curl 'http://localhost/php/persistencia/formencode.php' -H 'Content-Type: application/x-www-form-urlencoded' --data 'nickname=Camilo'