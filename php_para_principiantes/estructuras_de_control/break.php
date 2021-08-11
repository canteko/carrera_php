<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        for($i = 0; $i < 5; $i++) {
            echo("Valor de i: $i");
            echo("<br>");
            if($i == 3) {
                break;
            }
        }

        echo ("<br><br>");

        for($j = 0; $j < 5; $j++) {
            for ($k = 0; $k < 5; $k++) {
                echo ("Valor de j: $j ;Valor de k: $k ");
                echo ("<br>");
                if ($k == 3) {
                    break;
                }
            }
        }
        
        echo ("<br><br>");

        for($j = 0; $j < 10; $j++) {
            for ($k = 0; $k < 10; $k++) {
                echo ("Valor de j: $j ;Valor de k: $k ");
                echo ("<br>");
                if ($j == 4 && $k == 3) {
                    break(2);
                }
            }
        }
    ?>
</body>

</html>