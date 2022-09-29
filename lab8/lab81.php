<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>

<body>
    <form name="formularioDatos" method="POST" action="lab81.php">
        <p>CALCULO DEL PRECIO MEDIO DE UN PRODUCTO</p>
        <br/> Introduzca el precio del producto en el establecimiento numero 1, en dolares: <input type="text" name="precio1" value="">
        <br/> <br/> Introduzca el precio del producto en el establecimiento numero 2, en dolares: <input type="text" name="precio2" value="">
        <br/> <br/> Introduzca el precio del producto en el establecimiento numero 3, en dolares: <input type="text" name="precio3" value="">
        <br/> <br/>
        <input value="calcular" type="submit">
    </form>


    <?php

         include 'class_lib.php';

        $sacar_precio = new Precio();
        $sacar_precio -> sacarPrecio($_POST['precio1'],$_POST['precio2'],$_POST['precio3']);

    ?>


</body>

</html>