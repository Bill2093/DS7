<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.2</title>
</head>

<body>
    <form name="formularioDatos" method="post" action="lab82.php">
        Introdusca el valor minimo de los datos<input type="text" value="" name="min">
        <br><br> Introdusca el valor maximo de los datos <input type="text" value="" name="max">
        <br><br>
        <input type="submit" value="Evaluar">
    </form>


     <?php

         include 'class_lib.php';

        $crear_arreglo = new Arreglo();
        $crear_arreglo -> crearArreglo($_POST['min'],$_POST['max']);

    ?>

</body>

</html>