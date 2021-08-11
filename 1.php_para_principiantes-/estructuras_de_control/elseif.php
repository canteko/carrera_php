<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        $valor1 = 2;
        $valor2 = 6;
        $dia = 4;

        if ($valor1 > $valor2) {
            echo("$valor1 > $valor2");
            echo("<br><br>");
        } else if ($valor1 == $valor2) {
            echo("$valor1 == $valor2");
            echo("<br><br>");
        } else {
            echo ("$valor1 < $valor2");
            echo ("<br><br>");
        }

        if ($dia == 1) {
            echo("Lunes");
            echo("<br><br>");
        } else if ($dia == 2) {
            echo("Martes");
            echo("<br><br>");
        } else {
            echo ("Ni lunes ni martes");
            echo ("<br><br>");
        }
    ?>
</body>

</html>