<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php

        $array = array(
            "arbusto" => "asd", 
            "dftgh", 
            "dftgh2", 
            "dftgh3", 
            "dftgh4", 
            "puente" => "dftgh5", 
            "dftgh6", 
            "dftgh7", 
            "dftgh8");
        foreach($array AS $key => $element) {
            echo("$key => $element");
            echo("<br>");
        }
    ?>
</body>

</html>