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
            <a href="hasiera.php"><img class="logo" src="irudiak/IKONOAK/LOGO.svg" alt="Logoa" height="150px"
                    padding="8px" class="center"></a>
        </div>
    </header>
    <div class="sticky">
        <div class="navbar">
            <div class="left">
                <a class="left" href="hasiera.php">Hasiera</a>
                <a class="left" href="norGara.php">Nor gara</a>
                <div class="subnav left">
                    <button class="subnavbtn">Katalogoa <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="katalogoa.php"><b>Produktu guztiak |</b></a>
                        <a href="katalogoaMugikorrak.php">Mugikorrak</a>
                        <a href="katalogoaOrdenagailuak.php">Ordenagailuak</a>
                        <a href="katalogoaMonitoreak.php">Monitoreak</a>
                        <a href="katalogoaAurikularrak.php">Aurikularrak</a>
                    </div>
                </div>
                <a class="left active" href="prodSaldu.php">Zure produktuak saldu</a>
                <a class="left" href="kontaktua.php">Kontaktua</a>
            </div>
            <div class="right">
                <a class="right">
                    <form action="buscar.php" method="GET">
                        <input type="search" name="query" placeholder="Bilatu...">
                    </form>
                </a>
                <a class="right" href="#saskia"><i class="fa-solid fa-cart-shopping"></i></a>
                <a class="right" href="#saioHasiera"><i class="fa-solid fa-user"></i></a>
                <a class="hizkuntza hiz right" href="hasiera_EN.php"><img src="irudiak/IKONOAK/uk.png"></a>

            </div>
        </div>
    </div>
    <div id="saioHasiera" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Saioa Hasi</h2>
            <form>
                <label for="erabiltzailea">Erabiltzailea:</label>
                <input class="sesioHasiera" type="text" id="erabiltzailea" name="erabiltzailea" required><br><br>
                <label for="pasahitza">Pasahitza:</label>
                <input class="sesioHasiera" type="password" id="pasahitza" name="pasahitza" required><br><br>
                <button type="submit">Saioa Hasi</button>
            </form>
        </div>
    </div>
    <div id="saskia" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Saskia</h2>
            <h3>Saskia hutsik dago</h3>
        </div>
    </div>

    <div class="formularioa">
        <div class="produktua">
            <h2 id="formularioa">Bete ezazu formularioa zure produktuaren xehetasunekin</h2>
            <br>
            <form action="/action_page.php">
                <label for="modeloa">Produktu mota:</label><br>
                <select name="modeloa" id="mota">
                    <option value="mugikorra">Mugikorra</option>
                    <option value="ordenagailua">Ordenagailua</option>
                    <option value="aurikularra">Aurkilarra</option>
                    <option value="monitorea">Monitorea</option>
                </select> <br>
                <label for="marka">Marka:</label><br>
                <input type="text" name="marka" id="marka" /><br>
                <label for="modeloa">Modeloa:</label><br>
                <input type="text" name="modeloa" id="modeloa" /><br>
                <label for="memoria">Memoria:</label><br>
                <input type="text" name="Memoria" id="memoria" /><br>
                <label for="kolorea">Kolorea:</label><br>
                <input type="color" name="kolorea" id="kolorea" /><br>
                <label for="erosketaData">Produktua erosi zenuen data:</label><br>
                <input type="date" name="erosketaData" id="erosketaData" /><br>
                <br>
                <input type="submit" class="botoiak1" value="Bidali">
            </form>
        </div>

        <div class="hornitzailea">
            <h2 id="formularioa">Bete ezazu formularioa zure datu pertsonalekin</h2>
            <br>
            <form action="/action_page.php"></form>
            <label for="izena">Izena:</label><br>
            <input type="text" name="izena" id="izena" /><br>
            <label for="abizena">Abizena:</label><br>
            <input type="text" name="abizena" id="abizena" /><br>
            <label for="postaElektronikoa">Posta elektronikoa:</label><br>
            <input type="email" name="postaElektronikoa" id="postaElektronikoa" placeholder="example@gmail.com" /><br>
            <label for="helbidea">Helbidea:</label><br>
            <input type="text" name="helbidea" id="helbidea" /><br>
            <label for="telefonoZenbakia">Telefono zenbakia:</label><br>
            <input type="tel" name="telefonoZenbakia" id="telefonoZenbakia" /><br>
            <br><br><br>
            <input type="submit" class="botoiak1" value="Bidali">
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>


</body>

</html>

</body>

</html>