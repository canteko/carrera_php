<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        // Ámbito

        $numero = 22;

        function prueba() {
            global $numero;
            echo($numero);
        }

        prueba();
    ?>
</body>

</html>