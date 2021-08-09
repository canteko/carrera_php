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

        if ($nota2 >= 5) {
            echo("Aprobado");
            echo("<br><br>");
        }

        if ($nota2 >= 5):
            echo("Aprobado");
            echo("<br><br>");
        endif;

        if($nota3 >= 5) {
            echo ("Dentro del primer if");
            echo ("<br><br>");
            if ($nota3 >= 9) {
                echo ("Dentro del segundo if");
                echo ("<br><br>");
            }
        }

        if($nota2 >= 5 && $nota3 >= 5) {
            echo ("Aprobadas las dos");
            echo ("<br><br>");
        }
    ?>
</body>

</html>