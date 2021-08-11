<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        // Modo añadir
        $miarchivo = fopen("files/fichero3.txt", "a+");

        fwrite($miarchivo, "Hola, escribo en el fichero");
        fflush($miarchivo);

        echo(filesize("files/fichero3.txt"));

        var_dump(stat("files/fichero3.txt"));
    ?>
</body>

</html>