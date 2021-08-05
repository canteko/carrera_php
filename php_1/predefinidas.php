<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        $numero = 26;

        echo("Nombre del servidor: " . $_SERVER["SERVER_NAME"]);
        echo("<p> </p>");

        echo("Software del servidor: " . $_SERVER["SERVER_SOFTWARE"]);
        echo("<p> </p>");

        echo("Puerto del servidor: " . $_SERVER["SERVER_PORT"]);
        echo("<p> </p>");

        echo("Global: " . $GLOBALS["numero"]);
        echo("<p> </p>");
    ?>
</body>

</html>