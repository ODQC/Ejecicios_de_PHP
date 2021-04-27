<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>

<body>

    <h1>My first PHP page</h1>
    <form method="POST" action="3.php">
        <h1>Calcular area de triangulo</h1>
        <H2>Ingrese el area y la altura del tringulo que quiere calcular</H2>
        Base <input type="number" name="b"><br>
        Altura <input type="number" name="h"><br>
        <input type="submit" name="area" value="Area">
    </form>

</body>

</html>
<?php
    if (isset($_POST['area'])) {
        $res = ($_POST['b'] * $_POST['h'])/2;
        echo "El resultado es: $res";
    }
?>