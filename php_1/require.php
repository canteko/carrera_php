<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        echo("Soy include");
        echo("<br>");

        require "include2.php"
    ?>
</body>

</html>