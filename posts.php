<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="postStyle.css">
    </head>
    <body>
        <div class="posts">
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
                
                if (!empty($_POST)){
                    $sql = "SELECT orPost, efni, nafn FROM com WHERE orPost = \"" . $_POST["postID"] . "\" AND efni = \"" . $_POST["efni"] . "\" AND nafn = \"" . $_POST["nafn"] . "\";" ;
                    $result = mysqli_query($conn, $sql);
                    if(!$result){
                        die("Query failed: " . mysqli_error($conn));
                    }
                    if(mysqli_num_rows($result) == 0){
                        $sql = "INSERT INTO com(orPost, efni, nafn) VALUES(" . $_POST["postID"] . ",\"" . $_POST["efni"] . "\",\"" . $_POST["nafn"] . "\");";
                        if (!mysqli_query($conn, $sql)) {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                    $_POST = array();
                }
                
                $sql = "SELECT ID, titill, efni, nafn FROM post ORDER BY ID DESC";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class=\"post\"> <div class=\"post-content\">  <div class=\"post-title\">  <p style=\"word-wrap: break-word;\">" . $row["titill"] . " </p> </div> <div class=\"post-efni\"> <p style=\"word-wrap: break-word;\">" . $row["efni"] . "</p> </div> <div class=\"post-nafn\"> <p style=\"word-wrap: break-word;\">" . $row["nafn"] . " </p> </div> <form id=\"postCom" . $row["ID"] . "\" action=\"posts.php\" method=\"post\"> <p style=\"font-size:0.7em;margin:0.6em 0 0 0;\"> Skrifaðu ummæli</p> <textarea name=\"efni\" required form=\"postCom" . $row["ID"] . "\"></textarea> <br> <p style=\"font-size:0.5em;margin:0.6em 0 0 0;\">Nafn (Aukaval)</p> <input autocomplete=\"off\" type=\"text\" name=\"nafn\" style=\"width: 25%;\"> <br> <input autocomplete=\"off\" type=\"number\" name=\"postID\" value=" . $row["ID"] . " style=\"display: none;\"> <input autocomplete=\"off\" type=\"submit\"> </form> </div>";
                        
                        $sql2 = "SELECT post.ID, com.efni, com.nafn FROM post JOIN com ON post.ID = com.orPost ORDER BY com.ID;";
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