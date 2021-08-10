<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        $array1 = array(2, 3, 4, 5, 6, 7, 8);
        $array2 = array(1, 3, 4, 5, 6, 7, 8);

        $colores1 = array(
            "color1" => "azul",
            "color2" => "verde",
            "color3" => "rojo",
            "color4" => "amarillo",
        );

        $colores2 = array(
            "color1" => "azul",
            "color2" => "morado",
            "color3" => "rojo",
        );

        echo("array_diff()");
        echo ("<br>");
        var_dump(array_diff($array1, $array2));
        echo("<br>");
        var_dump(array_diff($colores1, $colores2));

    ?>
</body>

</html>