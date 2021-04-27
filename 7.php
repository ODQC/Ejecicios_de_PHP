<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>

<body>

    <h1>Calcular Fibonacci</h1>
    <form method="POST" action="7.php">
        <H2>Ingrese </H2>
        Ingrese el Valor del tamanio:<input type="text" name="val" id="val" />
        <input type="submit" name="fibonacci" id="fibonacci" value="Fibonacci" />
    </form>

</body>

</html>
<?php
function fibonacci($n)
{

    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter < $n) {
        echo ' ' . $num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}

if(isset($_POST["fibonacci"])){
    $n = $_POST = ["val"];
    fibonacci($n);
}

?>