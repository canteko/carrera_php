<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        $num = 10;
        $respuesta = "Oporto";
        $intentos = 1;

        while($num >= 0) {
            echo($num);
            echo("<br>");
            $num--;
        }

        while($respuesta != "Lisboa") {
            echo("Intentos: $intentos" );
            echo("<br>");
            if($intentos == 3) {
                $respuesta = "Lisboa";
            }

            $intentos++;
        }

    ?>
</body>

</html>