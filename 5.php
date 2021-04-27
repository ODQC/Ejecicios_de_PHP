<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>

<body>

    
    <form method="POST" action="5.php">
        <h1>Calculadora</h1>
        <H2>Ingrese los datos a procesar</H2>
        Ingrese el primer valor: <input type="text" name="val1" id="val1" />
        Ingrese el sugundo valor: <input type="text" name="val2" id="val2" />
        <input type="submit" name="sumar" id="sumar" value="Sumar" />
        <input type="submit" name="restar" id="restar" value="Restar" />
        <input type="submit" name="dividir" id="dividir" value="Dividir" />
        <input type="submit" name="multiplicar" id="multiplicar" value="Multiplicar" />

    </form>

</body>

</html>
<?php
    $num1 = $_POST["val1"];
    $num2 = $_POST["val2"];

    if(isset($_POST["sumar"])){
        $res = $num1 + $num2;
        echo "El resultado es: $res";
    } elseif (isset($_POST["restar"])) {
    $res = $num1 - $num2;
    echo "El resultado es: $res";
    } elseif (isset($_POST["dividir"])) {
    $res = $num1 / $num2;
    echo "El resultado es: $res";
    } elseif (isset($_POST["multiplicar"])) {
    $res = $num1 * $num2;
    echo "El resultado es: $res";
    }
?>