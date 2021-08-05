<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        // Operadores

        $num1 = 5;
        $num2 = 10;
        $num3 = 5;
        $num4 = 20;
        $num5 = 5;
        $activo1 = true;
        $activo2 = false;

        if($num1 == $num3 && $num3 == $num4) {
            echo ("Iguales AND");
            echo ("<br><br>");
        }

        if($num1 == $num3 || $num3 == $num4) {
            echo ("Iguales OR");
            echo ("<br><br>");
        }

        if($num1 == $num3 xor $num3 == $num4) {
            echo ("Iguales XOR");
            echo ("<br><br>");
        }

        if(!$activo1) {
            echo ("Activo");
            echo ("<br><br>");
        }

        
    ?>
</body>

</html>