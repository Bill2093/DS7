<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>
<body>
    <h3>Aplicación web con imagen dinámica</h3>
    <form name="form" method="post" action="Lab81.php">
        <p>Desempeño de ventas realizadas <input type="text" name="valorV" /></p>
        <input type="submit" value="Ingresar">
    </form>

    <?php
        include("class_lib.php");
        $valorVenta = $_POST['valorV'];
        $porcentaje = new Ventas();

        $porcentaje->calcularP($valorVenta);
    ?>
</body>
</html>