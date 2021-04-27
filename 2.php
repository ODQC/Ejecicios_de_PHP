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
    <form method="POST" action="2.php">
        valor_1 <input type="number" name="no1"><br>
        valor_2 <input type="number" name="no2"><br>
        <input type="submit" name="sumar" value="Sumar">

    </form>

</body>

</html>
<?php
    if(isset($_POST['sumar'])){
        $res= $_POST['no1'] + $_POST['no2'];
        echo"El resultado es: $res";
    }
?>