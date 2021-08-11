<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        
        echo(round(0.65));
        echo("<br>");
        echo(round(0.50));
        echo("<br>");
        echo(round(0.49));
        echo("<br>");
        echo(round(-4.40));
        echo("<br>");
        echo(round(-4.640));
        echo("<br>");
        echo(round(4.98797897, 2));
        echo("<br>");
        
        echo("<br>");

        echo(round(1.5, 0, PHP_ROUND_HALF_UP));
        echo("<br>");
        echo(round(1.5, 0, PHP_ROUND_HALF_DOWN));
        echo("<br>");
        echo(round(1.5, 0, PHP_ROUND_HALF_EVEN));
        echo("<br>");

        echo("<br>");

        echo(ceil(0.60));
        echo("<br>");
        echo(ceil(5));
        echo("<br>");
        echo(ceil(5.1));
        echo("<br>");

        echo("<br>");

        echo(floor(0.60));
        echo("<br>");
        echo(floor(5));
        echo("<br>");
        echo(floor(5.1));
        echo("<br>");

    ?>
</body>

</html>