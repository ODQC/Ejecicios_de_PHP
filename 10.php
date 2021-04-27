<!DOCTYPE html>
<html lang="en">


<body>

    <h1>My first PHP page</h1>
    <form method="POST" action="10.php">
        <h1>Compara números</h1>
        <H2>Ingrese los dígitos que quiere comparar </H2>
        Ingrese el primer valor: <input type="text" name="val1" id="val1" />
        Ingrese el sugundo valor: <input type="text" name="val2" id="val2" />
        <input type="submit" name="enviar" id="enviar" value="Enviar" />

    </form>

</body>

</html>
<?php
if (isset($_POST["enviar"])) {
    $num1 = $_POST["val1"];
    $num2 = $_POST["val2"];

    if ($num1 < $num2) {
        $res = $num1 + $num2;
        echo "El resultado es: $res";
    } elseif ($num1 > $num2) {
        $res = $num1 - $num2;
        echo "El resultado es: $res";
    } elseif ($num1 == $num2) {
        $res = $num1 * $num2;
        echo "El resultado es: $res";
    }
}
?>