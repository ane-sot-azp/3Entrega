<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI Market | Zure produktuak saldu</title>
    <link rel="icon" href="irudiak/IKONOAK/favicon_dark.svg" media="(prefers-color-scheme: dark)">
    <link rel="icon" href="irudiak/IKONOAK/favicon_light.svg" media="(prefers-color-scheme: light)">
    <script src="https://kit.fontawesome.com/83f15f6aab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css.css">
    </linkrel>
</head>

<body>
    <header>
        <div class="header">
            <a href="hasiera_EN.php"><img class="logo" src="irudiak/IKONOAK/LOGO.svg" alt="Logoa" height="150px"
                    padding="8px" class="center"></a>
        </div>
    </header>
    <div class="sticky">
        <div class="navbar">
            <div class="left">
                <a class="left" href="hasiera_EN.php">Home</a>
                <a class="left" href="norGara_EN.php">About us</a>
                <div class="subnav left">
                    <button class="subnavbtn">Catalogue <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="katalogoa_EN.php"><b>All products |</b></a>
                        <a href="katalogoaMugikorrak_EN.php">Mobile phones</a>
                        <a href="katalogoaOrdenagailuak_EN.php">Laptops</a>
                        <a href="katalogoaMonitoreak_EN.php">Screens</a>
                        <a href="katalogoaAurikularrak_EN.php">Headphones</a>
                    </div>
                </div>
                <a class="left active" href="prodSaldu_EN.php">Sell your products</a>
                <a class="left" href="kontaktua_EN.php">Contact us</a>
            </div>
            <div class="right">
                <a class="right">
                    <form action="buscar.php" method="GET">
                        <input type="search" name="query" placeholder="Search...">
                    </form>
                </a>
                <a class="right" href="#saskia"><i class="fa-solid fa-cart-shopping"></i></a>
                <a class="right" href="#saioHasiera"><i class="fa-solid fa-user"></i></a>
                <a class="hizkuntza hiz right" href="hasiera.php"><img src="irudiak/IKONOAK/uk.png"></a>

            </div>
        </div>
    </div>
    <div id="saioHasiera" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Sign in</h2>
            <form>
                <label for="erabiltzailea">User name:</label>
                <input class="sesioHasiera" type="text" id="erabiltzailea" name="erabiltzailea" required><br><br>
                <label for="pasahitza">Password:</label>
                <input class="sesioHasiera" type="password" id="pasahitza" name="pasahitza" required><br><br>
                <button type="submit">Sign in</button>
            </form>
        </div>
    </div>
    <div id="saskia" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Cart</h2>
            <h3>Your cart is empty</h3>
        </div>
    </div>


        <div class="formularioa">
            <div class="produktua">
                <h2 id="formularioa">Fill this form with your product's info</h2>
                <br>
                <form action="/action_page.php">
                    <label for="modeloa">Product type:</label><br>
                    <select name="modeloa" id="mota">
                        <option value="mugikorra">Mobile phone</option>
                        <option value="ordenagailua">Laptop</option>
                        <option value="aurikularra">Headphone</option>
                        <option value="monitorea">Screen</option>
                    </select> <br>
                    <label for="marka">Brand:</label><br>
                    <input type="text" name="marka" id="marka" /><br>
                    <label for="modeloa">Model:</label><br>
                    <input type="text" name="modeloa" id="modeloa" /><br>
                    <label for="memoria">Memory:</label><br>
                    <input type="text" name="Memoria" id="memoria" /><br>
                    <label for="kolorea">Color:</label><br>
                    <input type="color" name="kolorea" id="kolorea" /><br>
                    <label for="erosketaData">Date of purchase:</label><br>
                    <input type="date" name="erosketaData" id="erosketaData" /><br>
                    <br>
                    <input type="submit" class="botoiak1" value="Send">
                </form>
            </div>

            <div class="hornitzailea">
                <h2 id="formularioa">Fill this form with your info</h2>
                <br>
                <form action="/action_page.php"></form>
                <label for="izena">Name:</label><br>
                <input type="text" name="izena" id="izena" /><br>
                <label for="abizena">Surname:</label><br>
                <input type="text" name="abizena" id="abizena" /><br>
                <label for="postaElektronikoa">E-mail:</label><br>
                <input type="email" name="postaElektronikoa" id="postaElektronikoa"
                    placeholder="example@gmail.com" /><br>
                <label for="helbidea">Adress:</label><br>
                <input type="text" name="helbidea" id="helbidea" /><br>
                <label for="telefonoZenbakia">Phone number:</label><br>
                <input type="tel" name="telefonoZenbakia" id="telefonoZenbakia" /><br>
                <br><br><br>
                <input type="submit" class="botoiak1" value="Send">
                </form>
            </div>
        </div>

        <?php include 'footer_EN.php'; ?>


    </body>

</html>

</body>

</html>