<!DOCTYPE html>
    <html>
        <head>
            <title>Squares of Numbers</title>
        </head>
        <style>
            h1 {
            font-family:'Courier New', Courier, monospace;
            font-size: 25px;
            font-weight: bold;
            }
        </style>
        <body>
        <h1>Squares of Numbers </h1>
        <?php
            $n = 10; // Specify the value of 'n'

            $i = 1; // Start from 1

            echo "Square of numbers from 1 to $n: ";
 

            while ($i <= $n) {
            $square = $i * $i; 
            echo $square . " ";
            $i++;
            }
        ?>
        </body>
    </html>