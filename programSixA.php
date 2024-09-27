<!DOCTYPE html>
    <html>
        <head>
            <title>Fibonacci Series</title>
        </head>
        <style>
            h1 {
            font-family:'Courier New', Courier, monospace;
            font-size: 25px;
            font-weight: bold;
            }
        </style>

        <body>
            <h1>Fibonacci Series</h1>
            <?php
            $n = 20; // Specify the number of Fibonacci numbers to display
            $first = 0; // First number of the series
            $second = 1; // Second number of the series 
            echo "Fibonacci series for $n numbers: ";
            echo $first . ", " . $second; // Display the first two numbers 
            for ($i = 2; $i < $n; $i++) {
            $next = $first + $second; 
            echo "," . $next;
            $first = $second;
            $second = $next;
            }
            ?>
</body>
</html>