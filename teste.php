<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Document</title>
    </head>
    <body>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "usuarios";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        ?>
        <form method="post" id="" action="teste1.php">
            <input type="text" name="nome" value="" />
            <button type="submit">SUBMIT</button>
        </form>
        <?php $conn->close();?>
    </body>
</html>
