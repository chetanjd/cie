<!DOCTYPE html>
<html>
    <head>
        <title>Position Of Character</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Position of Character</h1>
        <pre>
        <?php
        $string = 'Hello World';
        $character = 'o';

        $position = strpos($string,$character);
        if ($position !== false) {
            echo "The character '$character' is found at' $position 'in string";
        } else {
            echo "The character '$character' is not found";
        }
        ?>
        </pre>
    </body>
</html>