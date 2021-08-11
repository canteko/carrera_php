<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        $nota1 = 2;
        $nota2 = 5;
        $nota3 = 9;

        if ($nota1 >= 5) {
            echo("Aprobado");
            echo("<br><br>");
        } else {
            echo("Suspenso");
            echo("<br><br>");
        }
    ?>
</body>

</html>