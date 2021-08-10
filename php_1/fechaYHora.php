<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        $date = new DateTime();
        var_dump($date);

        echo(date("Y"));
        echo("<br>");

        echo(date("Y-m-d H:i:s"));
        echo("<br>");

        echo(date("d M y"));
        echo("<br>");

        echo(date("d/m/Y h:i:s"));
        echo("<br>");

        echo(date("l jS \of F Y h:i:s A"));
        echo("<br>");
        
        $hoy = getdate();
        var_dump($hoy);
        echo("<br>");
        
        var_dump("Zona horaria: " . date_default_timezone_get());
        echo("<br>");
        var_dump("Zona horaria: " . date_default_timezone_set("America/Los_Angeles"));
        echo("<br>");
        var_dump("Zona horaria: " . date_default_timezone_get());
        echo("<br>");
        
    ?>
</body>

</html>