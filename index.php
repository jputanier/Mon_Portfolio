<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/portfolio.css">
    <title>Jeremy</title>
    <script src="https://kit.fontawesome.com/407e673b18.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="headerMain">
        <nav>
            <div id="open_display" class="wrapper">
                <a href="#hide_display" id="push" class="circle shake"><span class="fontSize">Jeremy</span><br>web developer</a>
            </div>
            <div id="animation_menu">
                <div id="hide_display">
                    <ul class="menu">
                        <li><a href="./index.php">Accueil</a></li>
                        <li><a href="./competences.php">Compétences</a></li>
                        <li><a href="./realisations.php">Réalisations</a></li>
                        <li><a href="./experience.php">Expérience</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                    <!-- Reponsive Nav -->
                    <div id="responsiveNav">
                        <nav role="navigation">
                            <div id="menuToggle">
                                <!--
                                A fake / hidden checkbox is used as click reciever,
                                so you can use the :checked selector on it.
                                -->
                                <input type="checkbox" />
                                
                                <!--
                                Some spans to act as a hamburger.
                                
                                They are acting like a real hamburger,
                                not that McDonalds stuff.
                                -->
                                <span></span>
                                <span></span>
                                <span></span>
                                
                                <!--
                                Too bad the menu has to be inside of the button
                                but hey, it's pure CSS magic.
                                -->
                                <ul id="menuResp">
                                    <li><a href="./index.php">Accueil</a></li>
                                    <li><a href="./competences.php">Compétences</a></li>
                                    <li><a href="./realisations.php">Réalisations</a></li>
                                    <li><a href="./experience.php">Expérience</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main id="mainIndex">
        <div id="divBio">
            <main id="mainBio">
                <p>Passioné par l'univers du web, j'ai décidé d'approfondir mes connaissances en m'inscrivant à l'It-Akademy.</p>
                <p>Après un stage de deux mois de fin de formation de développeur Web et Mobile Junior au sein de l'IT-Akademy, je suis à la recherche d'un contrat en alternance pour continuer ma formation en développeur Full Stack</p>
                <p><a href="#"><i class="far fa-file-pdf"></i> Télécharger mon CV</a></p>
                <p><a href="#"><i class="far fa-file-pdf"></i> Lettre de recommandation</a></p>
            </main>
        </div>
    </main>

    <footer>
    </footer>
    <script src="./js/main.js"></script>
</body>

</html>