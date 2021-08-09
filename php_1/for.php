<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        for($i = 1; $i <= 10; $i++) {
            echo($i);
            echo("<br><br>");
        }
        
        for($j = 10; $j >= 1; $j--) {
            echo($j);
            echo("<br><br>");
        }

        // Imprimimos los pares
        for($k = 0; $k <= 100; $k+=2) {
            echo($k);
            echo("<br><br>");
        }

        for ($h = 1; $h <= 10; $h++) {
            if($h % 2 == 0) {
                echo ($h);
                echo ("<br><br>");
            }
        }

        // La tabla del 5
        $num = 5;
        for ($i = 1; $i < 10; $i++) {
            echo ("$num x $i = " . $num * $i);
            echo ("<br><br>");
        }
    ?>
</body>

</html>