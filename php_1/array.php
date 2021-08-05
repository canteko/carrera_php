<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        // Arrays

        $dias = array(
            "Lunes",
            "Martes",
            "Miércoles",
            "Jueves",
            "Viernes",
            "Sabado",
            "Domingo",
        );

        $temperaturas = [
            16, 18, 20, 22, 24, 26, 28,
        ];

        $vacio = array(15);

        $datos = array();

        echo($dias[1]);
        echo("<br><br>");
        echo($temperaturas[0]);
        echo("<br><br>");
        var_dump($dias);
        echo("<br><br>");
        var_dump($temperaturas);
    ?>
</body>

</html>