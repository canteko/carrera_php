<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        // Asociativos
        $exploradores = array(
            "explorador" => "Chrome",
            "explorador1" => "Explorer",
            "explorador2" => "Firefox",
            "explorador3" => "Opera",
        );

        $datos = array(
            "nombre" => "Francisco",
            "edad" => 26,
            "profesor" => false,
            3 => 100,
        ); 

        echo("Explorador 3: " . $exploradores["explorador3"]);
        echo("<br><br>");
        echo("Nombre: " . $datos["nombre"]);
        echo("<br><br>");
        echo("3: " . $datos[3]);
        echo("<br><br>");
        
        var_dump($exploradores);
        echo("<br><br>");
        var_dump($datos);
    
    ?>
</body>

</html>