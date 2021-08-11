<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantilla PHP</title>
</head>

<body>
    <?php
        
        echo(abs(-0.65));
        echo("<br>");

        echo(min(5,2,7,8,0,2,1,3));
        echo("<br>");

        echo(max(5,2,7,8,0,2,1,3));
        echo("<br>");

        echo(min([5,2,7,8,0,2,1,3]));
        echo("<br>");

        echo(max([5,2,7,8,0,2,1,3]));
        echo("<br>");

        echo(rand());
        echo("<br>");

        echo(rand(10, 100));
        echo("<br>");

        echo(sqrt(9));
        echo("<br>");
        
        // Otros sistemas numericos
        echo("<br>");

        echo(decbin(9));
        echo("<br>");

        echo(decbin(1231));
        echo("<br>");

        echo(dechex(15));
        echo("<br>");

        echo(bindec(1001010));
        echo("<br>");


    ?>
</body>

</html>