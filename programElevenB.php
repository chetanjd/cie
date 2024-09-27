<!DOCTYPE html>
<html>
    <head>
        <title>String Comparision </title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1> String Comparision </h1>
        <form method="POST" action="">
            <label for="string1">Enter String 1</label>
            <input type="text" name="string1" id="string1">
            <br>
            <label for="string2">Enter String 2</label>
            <input type="text" name="string2" id="string2">
            <br>
            <button type="submit" name="submit">COMPARE</button>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $string1 = $_POST['string1'];
            $string2 = $_POST['string2'];

            if($string1 === $string2){
                echo "The strings are equal";
            }else{
                echo "The strings are not equal"; 
            }
        }
        ?>
    </body>
</html>