<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello there</title>
        <style>
            body {
                font-family: "Arial", sans-serif;
                font-size: larger;
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <img src="https://tech.osteel.me/images/2020/03/04/hello.gif" alt="Hello there" class="center">
        <?php
            $host = 'mysql';
            $user = 'root';
            $pass = 'rootpassword';
            $conn = new mysqli($host, $user, $pass);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                echo "Connected to MySQL successfully!";
            }
        ?>
    </body>
</html>