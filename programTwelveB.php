<!DOCTYPE html>
<html>
    <head>
        <title>Even Odd</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>Display Even Odd Numbers Seperately</h1>
        <?php
        $num = 20;
        echo "Even Numbers";
        for ($i = 1; $i < $num; $i++) {
            if ($i%2 == 0) {
                echo $i."";
        }
        }
        echo "<br>";
        echo"Odd Numbers";
        for ($i = 1; $i < $num; $i++) {
            if ($i%2 != 0) {
                echo $i."";
        }
        }
        ?>
    </body>
</html>