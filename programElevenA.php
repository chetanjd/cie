<!DOCTYPE html>
<html>
    <head>
        <title> String Length </title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h2> String Length </h2>

        <form method="POST" action=""> 
            <label for="string">Enter a String</label>
            <input type="text" name="string" id="string">
            <button type="submit">Calculate Length</button>
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $string=$_POST['string'];
            $length=strlen($string);
            echo "Length of the string '$string' is: $length"; 
        }
        ?>
    </body>
</html>