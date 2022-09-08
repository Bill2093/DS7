<!DOCTYPE html>
<html lang="en">
<head>
    <title>laboratorio 2.5</title>
</head>
<body>
<?php 
$figuras = array('cuadrado', 'triangulo', 'ciruclo');
$figuras [1] = 'rectángula';
mostrar_figuras($figuras,"asignacion de rectangulo");

array_push ($figuras, 'pentagono');
mostrar_figuras ($figuras, "adicion de pentagono al final");

array_unshift ($figuras, 'hexagono');
mostrar_figuras ($figuras, "adicion de haxageno al inicio");

array_pop($figuras);
mostrar_figuras($figuras, "eliminacion del ultimo");

array_shift($figuras);
mostrar_figuras($figuras,"eliminacion del primero");

function mostrar_figuras($figuras, $mensaje) {
    echo "<br>Arreglo despues de $mensaje <br>";
    foreach ( $figuras as $figura) {
        echo "$figura <br>";
    }
}
?>
</body>
</html>