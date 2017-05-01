<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="postStyle.css">
    </head>
    <body>
        <div class="posts">
            <div class="post">
                <div class="post-content">
                    <div class="post-title">
                        <p>Cookies</p>
                    </div>
                    <div class="post-efni">
                        <p>Can some super duper advanced scintist tell me what in the world cookies are?!?! It's all over my Google Chrome!!! Do these cookies not jam the computers hardware?!?!?!?!?! Please answer Meeeee</p>
                    </div>
                    <div class="post-nafn">
                        <p>Alan Rickman</p>
                    </div>
                </div>
                <div class="comment">
                    <div class="com-efni">
                        <p>They track yo shit</p>
                    </div>
                    <div class="com-nafn">
                        <p>Captain Obvious</p>
                    </div>
                </div>
            </div>
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
                
                $sql = "SELECT ID, titill, efni, nafn FROM post";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class=\"post\"> <div class=\"post-content\">  <div class=\"post-title\">  <p>" . $row["titill"] . " </p> </div> <div class=\"post-efni\"> <p>" . $row["efni"] . "</p> </div> <div class=\"post-nafn\"> <p>" . $row["nafn"] . " </p> </div> </div>";
                        
                        $sql2 = "SELECT post.ID, com.efni, com.nafn FROM post JOIN com ON post.ID = com.orPost ORDER BY post.ID;";
                        $result2 = mysqli_query($conn, $sql2);
                        
                        if (mysqli_num_rows($result2) > 0) {
                            while($row2 = mysqli_fetch_assoc($result2)) {
                                if($row2["ID"] == $row["ID"])
                                    echo "<div class=\"comment\"> <div class=\"com-efni \"> <p> " . $row2["efni"] . "</p> </div> <div class=\"com-nafn\"> <p> " . $row2["nafn"] . "<p> </div> </div>";
                            }
                        }
                        echo "</div>";
                    }
                } else {
                    echo "0 post results";
                }
                
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>