<header>
    <div class="header">
        <a href="hasiera_EN.php"><img class="logo" src="irudiak/IKONOAK/LOGO.svg" alt="Logoa" height="150px"
                padding="8px" class="center"></a>


    </div>

    <div class="sticky">
        <div class="navbar">
            <div class="left">
                <a class="left" href="hasiera_EN.php">Home</a>
                <a class="left" href="norGara_EN.php">About us</a>
                <div class="subnav left active">
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
                <a class="hizkuntza hiz right" href="hasiera.php"><img src="irudiak/IKONOAK/ikurriña.png"></a>

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
</header>