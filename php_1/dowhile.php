<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Plantilla PHP</title>
</head>

<body>
    <?php
        $valor = 10;

        do {
            echo ("Entro do while");
            echo ("<br>");
        } while ($valor != 10);
        
        while ($valor != 10) {
            echo ("Entro while");
            echo ("<br>");
        }

    ?>
</body>

</html>