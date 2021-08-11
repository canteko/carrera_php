<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        $nota1 = 2;
        $nota2 = 5;
        $nota3 = 9;

        $resultado = ($nota2 >= 5 ? "Aprobado" : "Suspenso");
        echo($resultado);
    ?>
</body>

</html>