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

        function sumar() {
            echo ("Suma");
            echo ("<br>");
        }

        function sumarNumeros($a, $b) {
            echo($a + $b);
            echo("<br>");
        }

        function sumarNumerosRetorno($a, $b) {
            return $a + $b;
        }

        sumar();
        sumarNumeros($numero1, $numero2);
        $retorno = sumarNumerosRetorno($numero1, $numero2);

        echo($retorno);

    ?>
</body>

</html>