<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        // Variables
        $edad = 26;
        $sueldo;

        $estatura = 1.80;
        $nombre = "Francisco";
        $apellido = 'Sáenz';

        $profesor = false;
        $profesorEncoded = json_encode($profesor);

        echo("Tengo $edad años<br>");
        echo("Me llamo $nombre $apellido<br>");
        echo("Soy profesor: $profesorEncoded");

        $Edad = 44;

    ?>
</body>

</html>