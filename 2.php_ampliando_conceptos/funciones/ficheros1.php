<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        $miarchivo = fopen("files/fichero1.txt", "r+");
        if($miarchivo == false) {
            echo "Error al abrir el archivo<br>";
        } else {
            $contenido = fread($miarchivo, filesize("files/fichero1.txt"));
            echo($contenido);
        }

        
        // Sobreescribe
        $miarchivo2 = fopen("files/fichero2.txt", "w");

        // Creamos uno que no exista
        $miarchivo3 = fopen("files/fichero3.txt", "w");

        rewind($miarchivo);
        while(feof($miarchivo) == false) {
            echo(fgets($miarchivo));
            echo("<br>");
        }

        $todo = file_get_contents("files/fichero1.txt");
        echo $todo;

        $todoArray = file("files/fichero1.txt");
        var_dump($todoArray);
    ?>
</body>

</html>