<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>

<body>

   
    <form method="POST" action="9.php">
        <h1>Conversor</h1>
        <H2>Ingrese los datos que quiere convertir de onzas-libras-kilogramos</H2>
        Ingrese valor en onzas: <input type="text" name="val1" id="val1" />
        <input type="submit" name="convertir" id="convertir" value="Convertir" />

    </form>

</body>

</html>
<?php
    if(isset($_POST["convertir"])){
        $onzas = $_POST["val1"];
        $libras = $onzas * 0.062500;
        $kilos = $onzas / 35.274;
        echo nl2br("El resultado en onzas: $onzas \n El resultado en libras: $libras \n El resultado en kilogramos: $kilos");

    }
?>