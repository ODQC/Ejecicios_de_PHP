<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>

<body>

    <form method="POST" action="4.php">
        <h1>Calcular area de Circulo</h1>
        <H2>Ingrese </H2>
        Ingrese el Radio<input type="text" name="radio" id="radio" />
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
    </form>

</body>

</html>

<?php
    if (isset($_POST["enviar"])) {
        $radio = $_POST["radio"];
        $Pi = 3.1416;
        $a = $Pi * $radio * $radio;
        echo "El area del circulo es:<h2> $a</h2><br/>";
    }
?>
?>