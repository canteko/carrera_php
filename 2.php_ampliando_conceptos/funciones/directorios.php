<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        
        // DIrectorio actual
        echo(getcwd());
        
        // Comprovamos el directorio actual
        var_dump(scandir(getcwd()));
        
        // Directorio anterior
        chdir('../');
        echo(getcwd());

    ?>
</body>

</html>