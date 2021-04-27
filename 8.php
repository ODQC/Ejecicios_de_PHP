<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>

<body>
    <form method="POST" action="8.php">
        <h1>Calcular número aleatorio</h1>
            <H2>Indique el rango del numero que quiere</H2>
            Ingrese el rango minimo: <input type="text" name="min" id="min" />
            Ingrese el rango máximo: <input type="text" name="max" id="max" />
            <input type="submit" name="enviar" id="enviar" value="Enviar" />
    </form>
</body>

</html>
<?php
if (isset($_POST["enviar"])) {
    $maximo = $_POST["max"];
    $minimo = $_POST["min"];
    echo (rand($minimo, $maximo));
}

?>