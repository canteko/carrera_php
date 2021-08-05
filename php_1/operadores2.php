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
        $valor1 = "5";

        if($num1 == $num2) {
            echo("num1 y num2 son iguales");
            echo ("<br><br>");
        }

        if($num1 != $num2) {
            echo("num1 y num2 no son iguales");
            echo ("<br><br>");
        }

        if($num1 <> $num2) {
            echo("num1 y num2 no son iguales");
            echo ("<br><br>");
        }

        if($num1 == $num3) {
            echo("num1 y num3 son iguales");
            echo ("<br><br>");
        }

        if($num1 < $num2) {
            echo("num1 no es mayor que num3");
            echo ("<br><br>");
        }

        if($num1 !== $valor1) {
            echo("num1 y valor1 no son iguales");
            echo ("<br><br>");
        }
    ?>
</body>

</html>