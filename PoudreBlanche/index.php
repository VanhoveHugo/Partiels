<html lang="en">
<?php include "preset/config.php" ?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Poudre Blanche PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/all.min.css" />
    <link rel="stylesheet" href="styles/index.css" />
</head>
<body>
    <nav id='nav'>
        <div id='content'>
            <a href="index.php">
                <div id='logo'></div>
            </a>
            <div>
                <p>Poudre Blanche</p>
                <p><?php echo $lang['logo_baseline'] ?></p>
            </div>
        </div>
        <ul>
            <li class='active'>
                <a class='tab' href="#menu"><?php echo $lang['menu'] ?></a>
            </li>
            <li>
                <a class='tab' href="#about"><?php echo $lang['about'] ?></a>
            </li>
            <li>
                <a class='tab' href="#contact"><?php echo $lang['contact'] ?></a>
            </li>
            <li>
                <a id='lang' class='tab' href="<?php if($lang['v'] == 'En') echo '?lang=en'; else echo '?lang=fr
                ' ?>">
                    <?php echo $lang['v']; ?>
                </a>
            </li>
        </ul>
        <button><i class="fas fa-bars"></i></button>
    </nav>

    <main>
        <img id='circle' src="img/circle.png">
        <div id='container'>
            <h1><?php echo $lang['main_h1'] ?></h1>
            <p><?php echo $lang['main_p'] ?></p>
            <button class="button"><?php echo $lang['main_button'] ?> <i class="fas fa-arrow-right"></i></button>
        </div>
    </main>

    <section id='avis'>
        <div id="container">
            <div>
                <img id='img' src="#" alt="A picture of client">
                <p id='name'></p>
                <p id='work'></p>
            </div>
            <p id='text'></p>    
        </div>
        <div id='progress_bar'>
            <div id='bar'></div>
        </div>
    </section>

    <section id="carte">
        <div id="container">
            <article>
                <img src="img/carte/raclette.jpg" alt="A menu of the restorant">
                <h1>Raclette</h1>
                <h2>Crevettes, charcuterie, patates, fromages...</h2>
                <a href="menu.php#raclette">Voir le plat</a>
            </article>
            <article>
                <img src="img/carte/fondu.jpg" alt="A menu of the restorant">
                <h1>Fondue Bourguignonne</h1>
                <h2>Poulet, Boeuf, Dinde</h2>
                <a href="menu.php#fondu">Voir le plat</a>
            </article>
            <article>
                <img src="img/carte/tourte.jpg" alt="A menu of the restorant">
                <h1>Tourte étoiler</h1>
                <h2>Au Mont d'or</h2>
                <a href="menu.php#tourte">Voir le plat</a>
            </article>
            <article>
                <img src="img/carte/tomahawk.jpg" alt="A menu of the restorant">
                <h1>Tomahawk</h1>
                <h2>Acconpagné de son beurre de noêl</h2>
                <a href="menu.php#tomahawk">Voir le plat</a>
            </article>
            <article>
                <img src="img/carte/roti.jpg" alt="A menu of the restorant">
                <h1>Rôti de dinde</h1>
                <h2>Accompagné de sa purée de chou-fleur et de panais</h2>
                <a href="menu.php#roti">Voir le plat</a>
            </article>
            <article>
                <img src="img/carte/pain.jpg" alt="A menu of the restorant">
                <h1>Pain traditionnelle</h1>
                <h2>Courgettes, bannanes et aux noix</h2>
                <a href="menu.php#pain">Voir le plat</a>
            </article>
        </div>
        <button class="button"><?php echo $lang['carte_button'] ?> <i class="fas fa-arrow-right"></i></button>
    </section>

    <footer>
        <div id="container">
            <nav>
                <a class="tab" href="#livraison"><?php echo $lang['footer_l'] ?></a>
                <a class="tab" href="#faq">Faq</a>
                <a class="tab" href="#map"><?php echo $lang['footer_m'] ?></a>
                <a class="tab" href="#plan"><?php echo $lang['footer_p'] ?></a>
            </nav>
            <p id="text">Integer in arcu ut purus faucibus luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia cura proin at augue condimentum, ornare metus nec, consequat massa. Vestibulum celerisque aliquam.</p>
            <div>
                <p>06 80 48 95 87</p>
                <p>contact@poudre-blacnhe.com</p>
            </div>
        </div>
        <div id="baseline">
            <div id="logo">
                <img src="img/mono.png" alt="Logo">
                <p>©poudre-blanche.fr</p>
            </div>
            <ul>
                <li><a class="tab" href="#facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="tab" href="#instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a class="tab" href="#linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </footer>

    <script src='js/app.js'></script>
    <script src='js/random_client.js'></script>

</body>
</html>