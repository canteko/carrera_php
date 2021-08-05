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
        $num3 = 0;

        echo ($num1 + $num2);
        echo ("<br><br>");
        echo ($num1 . " * " . $num2 . " = " . $num1 * $num2);
        echo ("<br><br>");
        echo ($num1 . " / " . $num2 . " = " . $num1 / $num2);
        echo ("<br><br>");
        echo ($num1 . " ** " . $num2 . " = " . $num1 ** $num2);
        echo ("<br><br>");
        echo ($num1 . " % " . $num2 . " = " . $num1 % $num2);

        // Asignar e igualar

        $num3 = $num1;
        echo ($num3);
        echo ("<br><br>");
        echo ($num1 . " += " . $num2 . " = " . $num1 += $num2);
        echo ("<br><br>");
        echo ($num1 . " *= " . $num2 . " = " . $num1 *= $num2);
        echo ("<br><br>");
        echo ($num1 . " **= " . $num2 . " = " . $num1 **= $num2);
        echo ("<br><br>");
        echo ($num1 . " %= " . $num2 . " = " . $num1 %= $num2);

    ?>
</body>

</html>