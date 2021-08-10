<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        function resetArray(&$array) {
            $array = array(
                "Lunes",
                "Martes",
                "Miercoles",
                "Jueves",
                "Viernes",
                "Sabado",
                "Domingo",
            );
        }

        $dias = array();
        
        // Ordena los elementos de forma ascendente (sort) o descendente (asort)
        resetArray($dias);

        echo ("sort() Ordena los elementos de forma ascendente");
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        var_dump(sort($dias));
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        echo ("rsort() Ordena los elementos de forma descendente");
        echo ("<br>");
        var_dump(rsort($dias));
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        
        // Ordena los elementos sin modificar los keys
        resetArray($dias);

        echo ("asort() Ordena los elementos sin modificar los keys");
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        var_dump(asort($dias));
        var_dump($dias);
        echo ("<br>");

        // Ordena los elementos por key
        // resetArray($dias);

        echo ("ksort() Ordena los elementos por key");
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        var_dump(ksort($dias));
        var_dump($dias);
        echo ("<br>");

        // Desordena aleatoriamente los elementos y reasigna los keys
        resetArray($dias);

        echo ("shuffle() Desordena aleatoriamente los elementos y reasigna los keys");
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        var_dump(shuffle($dias));
        var_dump($dias);
        echo ("<br>");
    ?>
</body>

</html>