<!DOCTYPE html>
<html>
    <head>
        <title> Student Welcome Page </title>
    </head>
    <body>
        <?php
        $sem=3;
        if($sem==1){
            echo"Welcome to your first semester";
        }elseif($sem==2){
            echo"Welcome to your second semester";
        }elseif($sem==3){
            echo"Welcome to your third semester";
        }else{
            echo"Welcome to another semester";
        }

        echo "<br>";
        switch($sem){
            case 1:
                echo"Welcome to your first semester";
                break;
            case 2:
                echo"Welcome to your second semester";
                break;
            case 3:
                echo"Welcome to your third semester";
                break;
            default:
                echo "Welcome to another semester";
                break;
        }
        ?>
    </body>
</html>