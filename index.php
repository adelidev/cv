<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adel TERKI | Apprenti développeur d'application multimédia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/9511e1799e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Poppins&display=swap" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <ul>
            <a href="#present">
                <li class="nav-item nav-item-active">Présentation</li>
            </a>
            <a href="#comp">
                <li class="nav-item">Compétences</li>
            </a>
            <a href="#parc">
                <li class="nav-item">Parcours</li>
            </a>
            <a href="#cdi">
                <li class="nav-item">Centres d'intérets</li>
            </a>
            <a href="#rea">
                <li class="nav-item">Réalisations</li>
            </a>
        </ul>
    </nav>
    <div id="present" class="cv-item">
        <div id="header">
            <div class="profil-card">
                <img src="assets/img/pic_profil.jpg" alt="Photo de profil" width="200px" id="profil-pic">
                <h1>Adel TERKI</h1>
                <h2>APPRENTI‌ ‌DÉVELOPPEUR‌ ‌D’APPLICATION‌ ‌MULTIMÉDIA‌</h2>
                <p><i class="fas fa-map-marker-alt"></i> Saint-Raphael
                    <br><i class="fas fa-birthday-cake"></i> 22 ans
                    <br><i class="fas fa-envelope"></i> <a
                        href="mailto:adel.terki2@outlook.fr">adel.terki2@outlook.fr</a>
                    <br><i class="fas fa-phone-alt"></i> <a href="">0643442235</a>
                </p>
            </div>
        </div>
        <div id="info">
            <div class="info-item">
                <h3>A propos</h3>
                <p>Etudiant en informatique passionné, actuellement à la recherche d'un
                    poste de developpeur en alternance.<br>
                    Le rythme de l’alternance est de 3 semaines en entreprise pour 1
                    semaine de
                    cours.</p>
            </div>
            <div class="info-item">
                <h3>Réseaux sociaux</h3>
                <a href=""><img src="https://cdn.worldvectorlogo.com/logos/linkedin-icon.svg" alt="LinkedIn"></a>
                <a href=""><img src="https://cdn.worldvectorlogo.com/logos/github-icon-1.svg" alt="Github"></a>
                <!--<a href=""><img src="https://cdn.worldvectorlogo.com/logos/soundcloud-icon-1.svg" alt="Soundcloud"></a>-->
            </div>
        </div>
    </div>
    <!--COMPETENCES-->
    <div id="comp" class="cv-item">
        <div>
            <h3>Developpement Web Front-End</h3>
            <p>Je maitrise les outils nécessaires à la conception d'interface Front-End</p>
        </div>
        <div class="comp-items">
            <div id="front-end" class="comp-item-active">
                <img src="https://www.w3.org/html/logo/downloads/HTML5_Logo.svg" alt="HTML5"
                        width="100px">
                <img
                        src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS3"
                        width="71px">
                <img
                        src="https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg"
                        alt="JavaScript" width="75px">
                <img src="https://www.vectorlogo.zone/logos/jquery/jquery-vertical.svg"
                        alt="Jquery" width="100px">
                <img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1024px-Bootstrap_logo.svg.png"
                        alt="Bootstrap" width="75px">
                <img src="https://cdn.worldvectorlogo.com/logos/sass-1.svg" alt="SASS"
                        width="100px">
            </div>
            <div id="back-end" class="comp-item-hidden">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg"
                        alt="PHP" width="100px">
                <img
                        src="https://upload.wikimedia.org/wikipedia/commons/7/7a/C_Sharp_logo.svg" alt="C#"
                        width="80px">
                <img src="https://cdn.worldvectorlogo.com/logos/sqlite.svg" alt="SQLite">
            </div>
        </div>
        <div class="comp-control">
            <button class="arrow arrow-prev"><i class="fas fa-arrow-left"></i></button>
            <h5 id="comp-active-title">Compétences Front-End</h5>
            <button class="arrow arrow-next"><i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
    <!--PARCOURS-->
    <div id="parc" class="cv-item">
    </div>
    <!--CENTRES D'INTERETS-->
    <div id="cdi" class="cv-item">
    </div>
    <!--REALISATIONS-->
    <div id="rea" class="cv-item">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>