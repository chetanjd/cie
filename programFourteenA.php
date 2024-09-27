<!DOCTYPE html>
<html>
    <head>
        <title>Student Information</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <style>
            table { 
    width: 80%; 
    margin: auto;
    border-collapse: collapse; 
    box-shadow: 5px 5px 2px #888; 
}

th, td { 
    padding: 10px; 
    text-align: left; 
    border: 1px solid black; 
}

th { 
    background-color: #f2f2f2; 
    font-weight: bold; 
}

tr:nth-child(even) { 
    background-color: #f9f9f9; 
}

tr:hover { 
    background-color: antiquewhite; 
}

    </style>
    </head>
    <body>
        <h3> Student Information</h3>
        <?php
        $host = "localhost";
        $username = "root";
        $password = '';
        $dbname = 'chetanjd';
        
        $conn = new mysqli($host, $username, $password, $dbname);
        if (!$conn) {
            die('! ! ! Database Connetion Failed ! ! !'. mysqli_connect_error());
        }
        $query='SELECT * FROM students';
        $result = mysqli_query( $conn, $query );
        
        if(mysqli_num_rows($result) > 0) {
            echo"<table>";
            echo "<tr><th>ID</th><th>NAME</th><th>AGE</th><th>EMAIL</th></tr>";

            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO STUDENT INFO PRESENT IN DATABASE";
        }
        mysqli_close($conn);
        ?>
    </body>
</html>