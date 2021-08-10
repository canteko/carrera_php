<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        $numero1 = 5;
        $numero2 = 10;

        function valor($a, $b) {
            $a = 1;
            $b = 2;
        }

        function referencia(&$a, &$b)
        {
            $a = 1;
            $b = 2;
        }

        valor($numero1, $numero2);
        
        echo("$numero1 y $numero2");
        echo("<br>");
        
        referencia($numero1, $numero2);

        echo("$numero1 y $numero2");
        echo("<br>");

    ?>
</body>

</html>