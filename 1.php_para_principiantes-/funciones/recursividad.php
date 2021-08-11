<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        function factorial($n) {
            if($n == 1) {
                return 1;
            }
            return $n * factorial($n - 1);
        }

        echo(factorial(5));

    ?>
</body>

</html>