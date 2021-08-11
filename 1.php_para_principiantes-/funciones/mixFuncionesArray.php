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
        
        // Count cuenta los elementos de un array
        resetArray($dias);

        echo(count($dias));
        echo("<br>");

        echo(current($dias));
        echo("<br>");

        end($dias);
        echo(current($dias));
        echo("<br>");

        reset($dias);
        echo(current($dias));
        echo("<br>");

        $key = array_search("Lunes", $dias);
        if($key !== false) {
            echo($dias[$key] . ", key=$key");
            echo("<br>");
        }
        

    ?>
</body>

</html>