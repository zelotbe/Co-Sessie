<?php
session_start();

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/quintin.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Inschrijven Compleet! - Flac Hoppeland</title>
</head>

<body>
    <header class="justify-content-md-center">
        <div id="header" class="row">
            <div class="col-lg-1 col-md-0"></div>
            <figure class="col-lg-2 col-md-12" id="logo">
                <a href="../index.html"><img src="../images/logo.png" alt="logo van de flachoppeland" /></a>
            </figure>
            <div class="col-md-6 title">

                <h1>FLAC Hoppeland</h1>
            </div>

        </div>
        <div class="blackline col">
            <br>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link here" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ORGANISATIE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../organisatie/trainers.html">TRAINERS</a>
                            <a class="dropdown-item" href="../organisatie/bestuur.html">BESTUUR</a>
                            <a class="dropdown-item" href="../organisatie/kalender.html">KALENDER</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SPORTIEF
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../sportief/sportief.html#uitrusting">UITRUSTING</a>
                            <a class="dropdown-item" href="../sportief/sportief.html#categorieen">CATEGORIEËN</a>
                            <a class="dropdown-item" href="../sportief/sportief.html#jeugd">JEUGD</a>
                            <a class="dropdown-item" href="../sportief/sportief.html#competieven">COMPETIEVEN</a>
                            <a class="dropdown-item" href="../sportief/sportief.html#joggers">JOGGERS</a>
                            <a class="dropdown-item" href="../sportief/sportief.html#starttorun">START TO RUN</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="archief/archief.html">ARCHIEF</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="../links/links.html">LINKS &amp; SPONSERS</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://flachoppelandwebshop.jonasdekeyzer.ikdoeict.be/">WINKEL</a></li>
                </ul>
            </div>
        </nav>
        <div></div>
    </header>


    <main>
        <div class="container" id="compleet">
            <div class="d-flex h-100 flex-column justify-content-center align-items-center align-items-center">
                <h1 class="display-4 text-center tekstkleur">Inschrijving compleet!</h1>
                <p class="lead">Bedankt <?php echo htmlspecialchars($_SESSION["username"]); ?>, we nemen contact met je op om jouw inschrijving te bevestigen!</p>
                <a href="welcome.php" class="btn btn-primary">Terug naar jouw profiel</a>
            </div>
        </div>
    </main>


    <footer class="row w-100">
        <div class="col-md-1">
        </div>
        <div class="col-md-5">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="2000">
                        <img src="https://media1.tenor.com/images/11771d5e9e588e5d99052acdf63512ee/tenor.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/VulstekeVerbeke.gif" alt="vulstekeverbeke" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/finfacts.gif" class="d-block  w-100" alt="finfacts">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/page.gif" class="d-block  w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/addelhaize.gif" class="d-block w-100" alt="addelhaize">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/decapmaker.gif" class="d-block w-100" alt="decapmaker">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/elektrocappoen.gif" class="d-block w-100" alt="elektrocappoen">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/staelen-recup.gif" class="d-block w-100" alt="staelen-recup">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/peugeot.gif" class="d-block w-100" alt="peugeot">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/renoma.gif" class="d-block w-100" alt="renoma">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/schoencenter.gif" class="d-block w-100" alt="schoencenter">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/schoonaert.gif" class="d-block w-100" alt="schoonaert">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/terminus.gif" class="d-block w-100" alt="terminus">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/vandeputte.gif" class="d-block w-100" alt="vandeputte">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/vandermarliere.gif" class="d-block w-100" alt="vandermarliere">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/pmo.gif" class="d-block-flex w-100" alt="pmo">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/delanote.gif" class="d-block w-100" alt="delanote">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/alulermytte.gif" class="d-block w-100" alt="alulermytte">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/belfius.gif" class="d-block w-100" alt="belfius">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/madeininox.gif" class="d-block w-100" alt="madeininox">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/drafab.gif" class="d-block w-100" alt="drafab">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/timotuin.gif" class="d-block w-100" alt="timotuin">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/kbc.gif" class="d-block w-100" alt="kbc">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Boligna.png/" class="d-block w-100" alt="Boligna">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Bouton.png" class="d-block w-100" alt="Bouton">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/DerooConstructie.png" class="d-block w-100" alt="DerooConstructie">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Eskimo.png" class="d-block w-100" alt="Eskimo">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/HoteldelaPaix.png" class="d-block w-100" alt="HoteldelaPaix">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/HoutskeletbouwDevos.png" class="d-block w-100" alt="HoutskeletbouwDevos">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/OptiekLobelle.png" class="d-block w-100" alt="OptiekLobelle">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/TraiteurPure.png" class="d-block w-100" alt="TraiteurPure">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Verpoort.png" class="d-block w-100" alt="Verpoort">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Decrock_WG.png" class="d-block w-100" alt="Decrock_WG">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Dejonckheere.JPG" class="d-block w-100" alt="Dejonckheere">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="w-100" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=Reningelstseweg%2020%2C%208970%20Poperinge&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </footer>


    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        (function(w, d) {
            w.CollectId = "5f859ded69a22830e955678e";
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.async = true;
            s.setAttribute("src", "https://collectcdn.com/launcher.js");
            h.appendChild(s);
        })(window, document);
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180461284-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-180461284-1');
    </script>
</body></html>