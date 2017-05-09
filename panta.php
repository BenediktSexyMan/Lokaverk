<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="pantaStyle.css">
    </head>
    <script>
        function closeMessage(){
            document.getElementById("message").style.display = "none";
        }
    </script>
    <body>
        <label for="toggle" id="menu"><p>&#9776; menu</p></label>
        <input type="checkbox" id="toggle">
        <div class="selectionBar">
            <div><a href="index.html">Heim</a></div>
            <div><a href="info.html">Um</a></div>
            <div><a href="dagskra.html">Dagskrá</a></div>
            <div><a href="#">Pöntun</a></div>
            <div><a href="spjall.php">Umfjöllun</a></div>
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
            
            if (!empty($_POST)){
                echo "<div id=\"message\" class=\"hider\"> <div class=\"msg\"> <div class=\"msgInner\"> <div class=\"msgContent\"> <p> Takk fyrir að skrá þig á Sumarnótt! </p> <div onclick=\"closeMessage()\" class=\"msgClose\"><img src=\"X.svg\"></div> </div> </div> </div> </div>";
                $_POST = array();
            }
            mysqli_close($conn);
        ?>
        <div class="pontunCon">
            <form action="panta.php" method="post" id="postPontun">
                <p>Sláðu inn nafn</p>
                <div class="nafnInslattur">
                    <div>
                        <p>Fornafn</p>
                        <input autocomplete="off" class="fornafn" name="fnafn" type="text" required>
                    </div>
                    <div>
                        <p>Eftirnafn</p>
                        <input autocomplete="off" class="eftirnafn" name="enafn" type="text">
                    </div>
                </div>
                <p>Sláðu inn netfang</p>
                <div class="mailInfo">
                    <div>
                        <p>Netfang</p>
                        <input autocomplete="off" type="email" name="netfang" required>
                    </div>
                </div>
                <p>Hversu marga af 3 dögunum tekur þú þátt</p>
                <div class="dagInnslattur">
                    <div>
                        <p>1</p>
                        <input autocomplete="off" type="radio" name="dagur" required>
                    </div>
                    <div>
                        <p>2</p>
                        <input autocomplete="off" type="radio" name="dagur" required>
                    </div>
                    <div>
                        <p>3</p>
                        <input autocomplete="off" type="radio" name="dagur" required>
                    </div>
                    <div>
                        <p>?</p>
                        <input autocomplete="off" type="radio" name="dagur" required checked>
                    </div>
                    
                </div>
                <div class="skil">
                    <input autocomplete="off" type="submit">
                </div>
            </form>
            <div class="anim">
                <div class="prong1"></div>
                <div class="ball"></div>
                <div class="prong2"></div>
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