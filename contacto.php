<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="estilos.css">
    <title>include</title>
</head>
<body>
<?php
    include "cabecera.php";
    ?>
    <div id="contenido" class="contenido ancho">
        <h1>Contacto</h1>
        <div class="formulario">
        <form action="mostrar_datos.php" method="post">
            <label for="">NOMBRE:</label>
            <input type="text" name="nombre">
            <br>
            <label for="">APELLIDO:</label>
            <input type="text" name="apellido">
            <br>
            <label for="">MATRICULA:</label>
            <input type="text" name="matricula">
            <br>
            <label for="">CARRERA:</label>
            <input type="text" name="carrera">
            <br>
            <button class="btn1" type="submit" value="enviar">Enviar</button>
        </form>
        </div>
    </div>
   <?php
   include "footer.php";
   ?>
</body>
</html>