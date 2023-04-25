<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>

<?php
$nombre = $_POST[ "nombre"];
$apellido = $_POST["apellido"];
$matricula = $_POST["matricula"];
$carrera = $_POST["carrera"];

// echo "Mi nombre es:". "&nbsp"."<span class= 'negritas'>". $nombre. "&nbsp". $apellido. "</span>";

?>

<table class="credencial">
<tr>
<td rowspan="3" class="foto_credencial"></td>
<td class="nombre_credencial">
    <?php 
echo $nombre. "&nbsp". $apellido;
?> 
</td>
</tr>

<tr>
<td class="matricula_credencial">
<?php 
echo $matricula;
?> 
</td>
</tr>

<tr>
<td class="carrera_credencial"> <?php 
echo $carrera;
?> </td>
</tr>

</table>
</body>
</html>