<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="pantaStyle.css">
    </head>
    <body>
        <label for="toggle" id="menu"><p>&#9776; menu</p></label>
        <input type="checkbox" id="toggle">
        <div class="selectionBar">
            <div><a href="#">Heim</a></div>
            <div><a href="#">Um</a></div>
            <div><a href="#">Dagskrá</a></div>
            <div><a href="#">Pöntun</a></div>
            <div><a href="#">Umfjöllun</a></div>
        </div>
        <div class="pontunCon">
            <form action="panta.php" method="post" id="postPontun">
                <p>Sláðu inn nafn</p>
                <div class="nafnInslattur">
                    <div>
                        <p>Fornafn</p>
                        <input class="fornafn" name="fnafn" type="text" required>
                    </div>
                    <div>
                        <p>Eftirnafn</p>
                        <input class="eftirnafn" name="enafn" type="text">
                    </div>
                </div>
                <p>Sláðu inn netfang</p>
                <div class="mailInfo">
                    <div>
                        <p>Netfang</p>
                        <input type="email" required>
                    </div>
                </div>
                <p>Hversu marga af 3 dögunum tekur þú þátt</p>
                <div class="dagInnslattur">
                    <div>
                        <p>1</p>
                        <input type="radio" name="dagur" required>
                    </div>
                    <div>
                        <p>2</p>
                        <input type="radio" name="dagur" required>
                    </div>
                    <div>
                        <p>3</p>
                        <input type="radio" name="dagur" required>
                    </div>
                    <div>
                        <p>?</p>
                        <input type="radio" name="dagur" required checked>
                    </div>
                    
                </div>
                <div class="skil">
                    <input type="submit">
                </div>
            </form>
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