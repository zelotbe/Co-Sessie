<?php
 session_start();
// Show all errors (for educational purposes)
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'leden');

try {
    $db = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Verbindingsfout: ' .  $e->getMessage();
    exit;
}

date_default_timezone_set('Europe/Brussels');

$stmt = $db->prepare('SELECT * FROM leden ORDER BY leden_id DESC');
$stmt->execute();
$lid = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Inschrijven - Flac Hoppeland</title>
</head>

<body>
    <header class="justify-content-md-center">
        <div id="header" class="row">
            <div class="col-md-2 col-xs-0"></div>
            <figure class="col-md-2 col-xs-12" id="logo">
                <a href="index.html"><img src="../images/logo.png" alt="logo van de flachoppeland" /></a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ORGANISATIE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../organisatie/trainers.html">TRAINERS</a>
                            <a class="dropdown-item" href="../organisatie/bestuur.html">BESTUUR</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <li class="nav-item"><a class="nav-link" href="../archief/archief.html">ARCHIEF</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="../links/links.html">LINKS &amp; SPONSERS</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://flachoppelandwebshop.jonasdekeyzer.ikdoeict.be/">WINKEL</a></li>
                </ul>
            </div>
        </nav>
        <div></div>
    </header>
    <main class="w-50 mx-auto">

        <?php if (sizeof($lid) > 0) { ?>

        <?php foreach ($lid as $lid) { ?>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title font-weight-bold"><?php echo htmlentities($lid['voornaam']); echo " ".htmlentities($lid['achternaam']);?></h5>
                <p class="card-text">
                    <a  class="tekstkleur" href="ledendetail.php?lid_id=<?php echo htmlentities($lid['leden_id']); ?>">Meer info</a>
                </p>
            </div>
            <div class="card-footer"> <small class="text-muted"> (<?php echo (new Datetime($lid['inschrijving']))->format('d-m-Y'); ?>)</small></div>


        </div>
        <?php } ?>


        <?php
    } else {
        echo '<p>Nog geen berichten ontvangen.</p>' . PHP_EOL;
    }
    ?>

    </main>
    <footer class="row w-100">
        <div class="col-md-5">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="4000">
                        <img src="https://media1.tenor.com/images/11771d5e9e588e5d99052acdf63512ee/tenor.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/VulstekeVerbeke.gif" class="d-flex w-100">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/finfacts.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/page.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/addelhaize.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/decapmaker.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/elektrocappoen.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/staelen-recup.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/peugeot.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/renoma.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/schoencenter.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/schoonaert.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/terminus.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/vandeputte.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/vandermarliere.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/pmo.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/delanote.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/alulermytte.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/belfius.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/madeininox.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/drafab.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/timotuin.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/kbc.gif" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Boligna.png/" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Bouton.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/DerooConstructie.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Eskimo.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/HoteldelaPaix.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/HoutskeletbouwDevos.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/OptiekLobelle.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/TraiteurPure.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Verpoort.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Decrock_WG.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="http://www.flachoppeland.be/images/sponsorlogos/Dejonckheere.JPG" class="d-flex w-100" alt="...">
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
                <div class="gmap_canvas"><iframe height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=Reningelstseweg%2020%2C%208970%20Poperinge&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
        </div>

    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
