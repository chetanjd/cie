<!DOCTYPE html>
<html>
    <head>
        <title>String To Array</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h3>Converting String To Array</h3>
        <?php
        $string = "Chetan,Deshpande,Dept,OF,AIML";

        $aray = explode(",", $string);
        echo "Array:";
        print_r($aray);
        echo "<br>";

        $new_str = implode(",", $aray); 
        echo "String:$new_str";
        ?>
    </body>
</html>