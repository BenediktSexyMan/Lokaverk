<!DOCTYPE html><html>
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
            $sql = "SELECT titill, efni, nafn FROM post WHERE titill = \"" . $_POST["titill"] . "\" AND efni = \"" . $_POST["efni"] . "\" AND nafn = \"" . $_POST["nafn"] . "\";" ;
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("Query failed: " . mysqli_error($conn));
            }
            if(mysqli_num_rows($result) == 0){
                $sql = "INSERT INTO post(titill, efni, nafn) VALUES(\"" . $_POST["titill"] . "\",\"" . $_POST["efni"] . "\",\"" . $_POST["nafn"] . "\");";
                if (!mysqli_query($conn, $sql)) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            $_POST = array();
        }
        mysqli_close($conn);
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="spjallStyle.css">
    </head>
    <body>
        <label for="toggle" id="menu"><p>&#9776; menu</p></label>
        <input type="checkbox" id="toggle">
        <div class="selectionBar">
            <div><a href="index.html">Heim</a></div>
            <div><a href="info.html">Um</a></div>
            <div><a href="dagskra.html">Dagskrá</a></div>
            <div><a href="panta.php">Pöntun</a></div>
            <div><a href="#">Umfjöllun</a></div>
        </div>
        <div class="spjallContainer">
            <div class="postList">
                <iframe src="posts.php"></iframe>
            </div>
            <div class="innslattur">
                <form action="spjall.php" method="post" id="postPost">
                    <p style="margin:0 0 0 0.5em;">Titill</p><input style="margin:0 0 0 0.5em;" autocomplete="off" type="text" name="titill" required><br>
                    <!--Efni: <input autocomplete="off" type="text" name="efni" required><br>-->
                    <p style="margin:0 0 0 0.5em;">Efni</p><textarea style="margin:0 0 0 0.5em;" name="efni" required form="postPost"></textarea><br>
                    <p style="margin:0 0 0 0.5em;">Nafn (Aukaval)</p><input style="margin:0 0 0 0.5em;" autocomplete="off" type="text" name="nafn"><br>
                    <input  style="margin:0 0 1em 0.5em;" type="submit">
                </form>
            </div>
        </div>
        <footer class="botn">
            <div class="footer-mainInfo">
                <div>
                    <p>Símanúmer:</p>
                    <p>5812345</p>
                </div>
                <div>
                    <p>Skrifstofa:</p>
                    <p>Panama 69</p>
                </div>
                <div>
                    <p>Símanúmer:</p>
                    <p>5812345</p>
                </div>
            </div>
            <div class="sponsors">
                <img src="pizzeria.svg">
                <img src="AKS.svg">
                <img src="slug.svg">
            </div>
        </footer>
    </body>
</html>