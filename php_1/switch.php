<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        $dia = 23;

        switch($dia) {
            case 1:
                echo("Lunes");
                echo("<br><br>");
                break;
            case 2:
                echo("Martes");
                echo("<br><br>");
                break;
            case 3:
                echo("Miercoles");
                echo("<br><br>");
                break;
            default:
                echo("Día no válido");
                echo("<br><br>");
                break;
        }
    ?>
</body>

</html>