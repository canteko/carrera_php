<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        for ($k = 0; $k < 10; $k++) {
            if ($k == 3) {
                continue;
            }
            echo ("Valor de k: $k");
            echo ("<br>");
        }
    ?>
</body>

</html>