<!DOCTYPE php>
<php>

    <head>
        <meta charset="utf-8">
        <title>AI Market</title>
        <link rel="icon" href="irudiak/IKONOAK/favicon_dark.svg" media="(prefers-color-scheme: dark)">
        <link rel="icon" href="irudiak/IKONOAK/favicon_light.svg" media="(prefers-color-scheme: light)">
        <script src="https://kit.fontawesome.com/83f15f6aab.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css.css" />
    </head>

    <body>

        <?php include 'header_EN.php'; ?>

        <div class="sticky">
            <div class="navbar">
                <div class="left">
                    <a class="left active" href="hasiera_EN.php">Home</a>
                    <a class="left" href="norGara_EN.php">About us</a>
                    <div class="subnav left">
                        <button class="subnavbtn">Catalogue <i class="fa fa-caret-down"></i></button>
                        <div class="subnav-content">
                            <a href="katalogoa_EN.php"><b>All Products |</b></a>
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
                    <label for="erabiltzailea">Username:</label>
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
        <img class="deskontuak" src="irudiak/DESKONTUAK/Discounts-01.png" alt="deskontuak">
        <div class="produktuak">
            <h1>Latest products</h1>
        </div>
        <?php

        include 'db.php';

        $sql = "SELECT id, categoria, enlace, imagen, descripcion FROM productos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="imagenes">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="imagen" id="imagen' . $row['id'] . '">';
                echo '<a href="' . $row['enlace'] . '" class="irudiak">';
                echo '<img src="' . $row['imagen'] . '" alt="Imagen ' . $row['id'] . '">';
                echo '</a>';
                echo '<p class="deskribapena">' . $row['descripcion'] . '</p>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo "Ez da produtkurik aurkitu";
        }

        $conn->close();
        ?>
        <div class="produktuak">
            <h1>News</h1>
        </div>
        <div class="albisteak">
            <div class="albisteIrudia1">
                <img src="irudiak/ALBISTEAK/20241023124623_adimen-artifiziala-dls-zu_amp_w1200.jpg" width="100%">
            </div>
            <div class="izenburua1">
                <h2>12% of Entities in the Basque Country Use Artificial Intelligence, an Emerging Field in the Region
                </h2>
            </div>
            <div class="laburpena1">
                <h5>The Basque Center for Artificial Intelligence (BAIC) has conducted its first analysis of this
                    technology. According to the data provided, at least 89 companies are developing AI, and although
                    they
                    may not be enough to meet demand, 908 people have some training in this area.</h5>
            </div>
            <div class="albistea1">
                <p>In the Autonomous Community of the Basque Country (EAE), 12.2% of entities use Artificial
                    Intelligence
                    (AI) systems. Although the sector is still in its early stages, it shows significant growth. BAIC
                    has
                    published a diagnostic report for 2023, analyzing the state of the AI ecosystem. Founded in 2021,
                    BAIC
                    comprises 700 stakeholders, including public organizations, companies, and training centers.</p>

                <p>According to the report, the Basque Country is above the national average, with AI usage comparable
                    to
                    that of the United Kingdom, France, or Germany. Public administration shows a higher rate of use
                    (16.4%), and among businesses, 89 companies offer AI solutions, generating a turnover of 105 million
                    euros last year.</p>

                <p>Additionally, the availability of AI education is increasing, with around 900 people specializing
                    annually, although this is still insufficient to meet demand. In the field of research, 1,200
                    professionals are working, and there are 21 Data Processing Centers and 6 high-performance computing
                    centers in the Basque Country.</p>

                <p>Industry Minister Mikel Jauregi has emphasized that AI represents a "historic revolution" and
                    positions
                    it as a tool to enhance the Basque industry's international competitiveness.</p>
            </div>
        </div>
        <div class="albisteak">
            <div class="albisteIrudia2">
                <img src="irudiak/ALBISTEAK/20241018105413_urko-esnaola_foto610x342.jpg" width="100%">
            </div>
            <div class="izenburua2">
                <h2>Urko Esnaola, Tecnalia: "The main challenge is for anyone to be able to program robots"</h2>
            </div>
            <div class="laburpena2">
                <h5>We got to know Tecnalia's newest robots at the research center's headquarters in the Gipuzkoa
                    Science
                    and Technology Park. Urko Esnaola, director of robotics projects, stated: "Even the most advanced
                    imaginations don’t know how far robotics could reach."</h5>
            </div>
            <div class="albistea2">
                <p>According to projections from The Business Research Company, the international robotics industry will
                    generate 120 billion euros this year, and by 2028, business volume is expected to double. In the
                    European Union alone, the sector is expected to grow by 68% this year, and Tecnalia is one of the
                    references in robotic research in the Basque Country. We were welcomed by Urko Esnaola, director of
                    robotics projects at Tecnalia, at the research center’s headquarters in the Gipuzkoa Science and
                    Technology Park.</p>

                <p>Esnaola introduced us to three robots: Thomas, developed in collaboration with the company Robotnik,
                    which polishes parts for the aerospace industry; a robotic arm capable of automating polishing using
                    virtual reality glasses; and NextStage, a humanoid capable of autonomously assembling glass-ceramic
                    pieces using voice commands (including in Basque).</p>

                <p>"We’ve made great strides in recent years," Esnaola explained, "and we’re in a very good position in
                    the
                    international competition." He emphasized that the future challenge is "ease of use," so that
                    "anyone"
                    can program the robot: "We need to work on intelligence, vision, and artificial intelligence to
                    facilitate communication between humans and robots." Esnaola described a future "full of
                    possibilities"
                    for Tecnalia’s robotics projects: "Even the most advanced imaginations don’t know how far robotics
                    could
                    reach."</p>
            </div>
        </div>

        <?php include 'footer_EN.php'; ?>



    </body>

</php>