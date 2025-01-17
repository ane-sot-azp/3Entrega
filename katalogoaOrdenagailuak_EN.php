<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI Market | Catalogue</title>
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
    <div id="saskia" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Cart</h2>
            <h3>Your cart is empty</h3>
        </div>
    </div>
    <div class="general">
        <div class="sidebar">
            <ul class="prod">
                <form>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item1">
                            <label class="accordion-title" for="item1">
                                <h3>Brand:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" id="acer" name="acer" />
                                <label for="acer">Acer</label><br>
                                <input type="checkbox" id=alurin name="alurin" />
                                <label for="alurin">Alurin</label><br>
                                <input type="checkbox" id="apple" name="apple" />
                                <label for="apple">Apple</label><br>
                                <input type="checkbox" id="asus" name="asus" />
                                <label for="asus">Asus</label><br>
                                <input type="checkbox" id="dell" name="dell" />
                                <label for="dell">Dell</label><br>
                                <input type="checkbox" id="hp" name="hp" />
                                <label for="hp">HP</label><br>
                                <input type="checkbox" id="lenovo" name="lenovo" />
                                <label for="hp">Lenovo</label><br>
                                <input type="checkbox" id=medion name="medion" />
                                <label for="medion">Medion</label><br>
                                <input type="checkbox" id="msi" name="msi" />
                                <label for="msi">MSI</label><br>
                                <input type="checkbox" id="pccom" name="pccom" />
                                <label for="pccom">PcCom</label><br>

                            </div>
                        </div>
                    </li>
                    <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item2">
                            <label class="accordion-title" for="item2">
                                <h3>Processor:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="applegpu" id="applegpu" />
                                <label for="applegpu">Apple GPU</label> <br>
                                <input type="checkbox" name="inteli5" id="inteli5" />
                                <label for="inteli5">Intel I5</label> <br>
                                <input type="checkbox" name="inteli7" id="inteli7" />
                                <label for="inteli7">Intel I7</label> <br>
                                <input type="checkbox" name="ryzen5" id="ryzen5" />
                                <label for="ryzen5">Ryzen 5</label> <br>
                                <input type="checkbox" name="ryzen7" id="ryzen7" />
                                <label for="ryzen7">Ryzen 7</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item3">
                            <label class="accordion-title" for="item3">
                                <h3>Memory:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="1tb16gb" id="1tb16gb" />
                                <label for="1tb16gb">1TB SSD-16GB RAM</label> <br>
                                <input type="checkbox" name="512gb16gb" id="512gb16gb" />
                                <label for="512gb16gb">512GB SSD-16GB RAM</label> <br>
                                <input type="checkbox" name="512gb8gb" id="512gb8gb" />
                                <label for="512gb8gb">512GB SSD-8GB RAM</label> <br>
                                <input type="checkbox" name="256gb16gb" id="256gb16gb" />
                                <label for="256gb16gb">256GB SSD-16GB RAM</label> <br>
                                <input type="checkbox" name="256gb8gb" id="256gb8gb" />
                                <label for="256gb8gb">256GB SSD-8GB RAM</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item4">
                            <label class="accordion-title" for="item4">
                                <h3>Size (inches):</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="15.6" id="15.6" />
                                <label for="15.6">15,6</label> <br>
                            </div>
                        </div>
                    </li><br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item5">
                            <label class="accordion-title" for="item5">
                                <h3>Operating system:</h3>
                            </label>
                            <div class="accordion-content">

                                <input type="checkbox" name="macos" id="macos" />
                                <label for="macos">MacOS</label> <br>
                                <input type="checkbox" name="windows10" id="windows10" />
                                <label for="windows10">Windows 10</label> <br>
                                <input type="checkbox" name="windows11" id="windows11" />
                                <label for="windows11">Windows 11</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item6">
                            <label class="accordion-title" for="item6">
                                <h3>Price:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="merkea" id="merkea" />
                                <label for="merkea">Cheap (0€-250€)</label> <br>
                                <input type="checkbox" name="aukerakoa" id="aukerakoa" />
                                <label for="aukerakoa">Bargain (250€-500€)</label> <br>
                                <input type="checkbox" name="garestia" id="garestia" />
                                <label for="garestia">Expensive (500€-800€)</label> <br>
                                <input type="checkbox" name="luxuzkoa" id="luxuzkoa" />
                                <label for="luxuzkoa">Luxury (800€+)</label> <br>
                                <br>
                            </div>
                        </div><br><br>
                    </li>

                    <input class="botoiaez" type="reset" id="ezabatu" value="Delete" />


                </form>
            </ul>
        </div>
        <div id="produktua1">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/1.2.Produktua.png" />
            <p><b>Brand:</b> HP</p>
            <p><b>Model:</b> FD0079NS</p>
            <p><b>Price:</b> 498€ </p>
        </div>
        <div id="produktua2">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/2.1.Produktua.png" />
            <p><b>Brand:</b> Alurin</p>
            <p><b>Model:</b> Go Start N24</p>
            <p><b>Price:</b> 239€ </p>
        </div>
        <div id="produktua3">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/3.1.Produktua.png" />
            <p><b>Brand:</b> Lenovo</p>
            <p><b>Model:</b> IdeaPad Gaming 3 15IAH7</p>
            <p><b>Price:</b> 699€</p>
        </div>
        <div id="produktua4">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/4.1.Produktua.png" />
            <p><b>Brand:</b> Apple</p>
            <p><b>Model:</b> MacBook Air Apple M3</p>
            <p><b>Price:</b> 1179€</p>
        </div>
        <div id="produktua5">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/5.1.Produktua.png" />
            <p><b>Brand:</b> Medion</p>
            <p><b>Model:</b> Erazer Crawler E30e</p>
            <p><b>Price:</b> 649€</p>
        </div>
        <div id="produktua6">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/6.1.Produktua.png" />
            <p><b>Brand:</b> Asus</p>
            <p><b>Model:</b> TUF Gaming F15 FX506LH-HN042</p>
            <p><b>Price:</b> 627€</p>
        </div>
        <div id="produktua7">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/7.1.Produktua.png" />
            <p><b>Brand:</b> MSI</p>
            <p><b>Model:</b> Modern 15 B7M-243XES</p>
            <p><b>Price:</b> 509€</p>
        </div>
        <div id="produktua8">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/8.1.Produktua.png" />
            <p><b>Brand:</b> Acer</p>
            <p><b>Model:</b> Gaming Nitro V 15 ANV15-51</p>
            <p><b>Price:</b> 859€</p>
        </div>
        <div id="produktua9">
            <img id="argazkia" src="irudiak/PRODUKTUAK/ORDENAGAILUAK/9.1.Produktua.png" />
            <p><b>Brand:</b> PcCom</p>
            <p><b>Model:</b> Revolt 3050</p>
            <p><b>Price:</b> 538€ </p>
        </div>

    </div>

    <?php include 'footer_EN.php'; ?>



</body>

</html>