<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        
        echo((is_int(123.123) ? "Es entero" : "NO es entero"));
        echo("<br>");
        echo((is_float(123.123) ? "Es flotante" : "NO es flotante"));
        echo("<br>");
        echo((is_int(123) ? "Es entero" : "NO es entero"));
        echo("<br>");
        echo((is_float(123) ? "Es flotante" : "NO es flotante"));
        echo("<br>");

        echo("<br>");
        
        echo number_format("10000000");
        echo("<br>");
        echo number_format("10000000", 2);
        echo("<br>");
        echo number_format("10000000", 2, ",", ".");
        echo("<br>");

    ?>
</body>

</html>