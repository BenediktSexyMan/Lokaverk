<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="postStyle.css">
    </head>
    <body>
        <p>sddfjhskjdfhkjsdhfjasshdfk</p>
        <?php
            $servername = "localhost";
            $username = "1311992289";
            $password = "mypassword";
            $dbname = "1311992289_hatidSpjall";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT titill, efni, nafn FROM post";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class=\"post\">  <h1>" . $row["titill"] . "</h1> <h3>" . $row["efni"] . "</h3> <h6>" . $row["nafn"] . "</h6> </div>";
                }
            } else {
                echo "0 results";
            }
            
            mysqli_close($conn);
        ?>
    </body>
</html>