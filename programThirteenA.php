<!DOCTYPE html>
<html>
    <head>
        <title>Student Information</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <style>
            button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 35%;
                font-weight: bold; color: #000000;
	            font-family: Courier, monospace; font-size: 16px;
            }

            button:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <h3> Enter the Student Information </h3>
        <?php
        $host = "localhost";
        $username = "root";
        $password = '';
        $dbname = 'chetanjd';
        
        $conn = new mysqli($host, $username, $password, $dbname);
        if (!$conn) {
            die('! ! ! Database Connetion Failed ! ! !'. mysqli_connect_error());
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name=$_POST['name'];
            $age=$_POST['age'];
            $email=$_POST['email'];

            if(empty($name) || empty($age) || empty($email)) {
                echo "Please fill all the deatils";
            }else{
                $query = "INSERT INTO students (name,age,email) VALUES ('$name',$age,'$email')";
                $result = mysqli_query($conn, $query);
            }
            if($result) {
                echo "Student Information Inserted!!!";
            }else{
                echo "Error in insertion";
            }
        }
        mysqli_close( $conn );
        ?>
        <pre>
        <form method="POST" action="">
            <label for="name">NAME:--</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="age">AGE:--</label>
            <input type="number" name="age" id="age">
            <br>
            <label for="email">EMAIL:--</label>
            <input type="text" name="email" id="email">
            <br>
            <button type="submit">SUBMIT</button>
        </form>
        </pre>
    </body>
</html>