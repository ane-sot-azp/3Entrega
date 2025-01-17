<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI Market | Kontaktoa</title>
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
                <a class="left" href="prodSaldu_EN.php">Sell your products</a>
                <a class="left active" href="kontaktua_EN.php">Contact us</a>
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
    <div class="kontaktua">
        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d375.34188198830094!2d-2.18120071344725!3d43.05354558108277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd50365ee96e9269%3A0x967b005b094dd634!2sC.%20Urdaneta%2C%206%2C%2020240%20Ordizia%2C%20Guip%C3%BAzcoa!5e1!3m2!1ses!2ses!4v1729588843286!5m2!1ses!2ses"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="helbidea">
            <h2>Adress</h2>
            <div><i class="fa-solid fa-location-dot"></i> C. Urdaneta, 6, 20240 Ordizia,
                Guipuzkoa</div>
            <div><i class="fa-solid fa-envelope"></i> administrazioa@iamarket.com</div>
            <div><i class="fa-solid fa-phone"></i> +34 623 34 76 34</div>
        </div>

        <div class="infoForm">
            <h2>Contact form:</h2>
            <form>
                <label for="name">Name</label><span class="required">*</span><br>
                <input class="kont" type="text" id="name" required><br>
                <label for="surname">Surname</label><br>
                <input class="kont" type="text" id="surname"><br>
                <label for="mail">E-mail</label><span class="required">*</span><br>
                <input class="kont" type="email" id="mail" placeholder="mail@example.com" required><br>
                <label for="tel">Phone number</label><br>
                <input class="kont" type="tel" id="tel" placeholder="123 45 67 89"><br>
                <label for="longtext">Subject</label><span class="required">*</span><br>
                <textarea class="kont" id="longtext" placeholder="Write..." required></textarea>
                <input class="botoiak" type="submit" value="Send"><input class="botoiak" type="reset" value="Delete">

            </form>
        </div>
    </div>

    <?php include 'footer_EN.php'; ?>


</body>

</html>