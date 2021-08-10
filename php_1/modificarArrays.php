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
        
        // Elimina el primer elemento del array
        resetArray($dias);

        echo ("array_shift() Elimina el primer elemento del array");
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        var_dump(array_shift($dias));
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");

        // Introduce un elemento al array por delante
        resetArray($dias);

        echo ("array_ushift() Introduce un elemento al array por delante");
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        var_dump(array_unshift($dias, "Juernes"));
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");

        // Elimina el último elemento del array
        resetArray($dias);

        echo ("array_pop() Elimina el último elemento del array");
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        var_dump(array_pop($dias));
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");

        // Introduce un elemento al array por detrás
        resetArray($dias);

        echo ("array_push() Introduce un elemento al array por detrás");
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");
        var_dump(array_push($dias, "Juernes"));
        echo ("<br>");
        var_dump($dias);
        echo ("<br>");

        // Eliminar un elemento concreto con array_search() y unset()
        resetArray($dias);
        echo ("Eliminar un elemento concreto con array_search() y unset()");
        $key = array_search("Jueves", $dias);
        if ($key !== false) {
            unset($dias[$key]);
            echo("<br>");
        }
        var_dump($dias);
        
    ?>
</body>

</html>