<?php

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


$voornaam = isset($_POST['voornaam']) ? (string) $_POST['voornaam'] : '';
$achternaam = isset($_POST['achternaam']) ? (string) $_POST['achternaam'] : '';
$mail = isset($_POST['mail']) ? (string) $_POST['mail'] : '';
$adres = isset($_POST['adres']) ? (string) $_POST['adres'] : '';
$gemeente = isset($_POST['gemeente']) ? (string) $_POST['gemeente'] : '';
$postcode = isset($_POST['postcode']) ? (string) $_POST['postcode'] : '';
$geboortedatum = isset($_POST['geboortedatum']) ? (string) $_POST['geboortedatum'] : '';
$geboorteplaats = isset($_POST['geboorteplaats']) ? (string) $_POST['geboorteplaats'] : '';
$geslacht = isset($_POST['geslacht']) ? (string) $_POST['geslacht'] : '';
$nationaliteit = isset($_POST['nationaliteit']) ? (string) $_POST['nationaliteit'] : '';
$gsm = isset($_POST['gsm']) ? (string) $_POST['gsm'] : '';
$msgName = '*';
$msgMessage = '*';

// form is sent: perform formchecking!
if (isset($_POST['submit'])) {

	$allOk = true;

	// name not empty
	if (trim($voornaam) === '') {
		$msgName = 'Gelieve een voornaam in te voeren';
		$allOk = false;
	}

	if (trim($achternaam) === '') {
		$msgMessage = 'Gelieve een achternaam in te voeren';
		$allOk = false;
	}
    if (trim($mail) === '') {
		$msgMessage = 'Gelieve een e-mailadres in te voeren';
		$allOk = false;
	}
    if (trim($adres) === '') {
		$msgMessage = 'Gelieve een adres in te voeren';
		$allOk = false;
	}
    if (trim($gemeente) === '') {
		$msgMessage = 'Gelieve een gemeente in te voeren';
		$allOk = false;
	}
    if (trim($postcode) === '') {
		$msgMessage = 'Gelieve een postcode in te voeren';
		$allOk = false;
	}
    if (trim($geboortedatum) === '') {
		$msgMessage = 'Gelieve een geboortedatum in te voeren';
		$allOk = false;
	}
    if (trim($geboorteplaats) === '') {
		$msgMessage = 'Gelieve een geboorteplaats in te voeren';
		$allOk = false;
	}
    if (trim($geslacht) === '') {
		$msgMessage = 'Gelieve een geslacht in te voeren';
		$allOk = false;
	}
     if (trim($nationaliteit) === '') {
		$msgMessage = 'Gelieve een nationaliteit in te voeren';
		$allOk = false;
	}
     if (trim($gsm) === '') {
		$msgMessage = 'Gelieve een telefoonnummer in te voeren';
		$allOk = false;
	}

	// end of form check. If $allOk still is true, then the form was sent in correctly
	if ($allOk) {
		$stmt = $db->prepare('INSERT INTO leden (voornaam, achternaam, mail, adres, gemeente, postcode, geboortedatum, geboorteplaats, geslacht, nationaliteit, gsm) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute(array($voornaam, $achternaam, $mail, $adres, $gemeente, $postcode, $geboortedatum, $geboorteplaats, $geslacht, $nationaliteit, $gsm));

		// the query succeeded, redirect to this very same page
		if ($db->lastInsertId() !== 0) {
			echo 'Twerkt';
			exit();
		}

		// the query failed
		else {
		    echo 'Databankfout.';
		    exit;
		}		

	}

}

?><!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/quintin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Inschrijven - Flac Hoppeland</title>
</head>

<body>
    <header class="justify-content-md-center">
        <div id="header" class="row">
            <div class="col-md-2 col-xs-0"></div>
            <figure class="col-md-2 col-xs-12" id="logo">
                <a href="index.html"><img src="images/logo.png" alt="logo van de flachoppeland" /></a>
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
                        <a class="nav-link here" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ORGANISATIE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="organisatie/trainers.html">TRAINERS</a>
                            <a class="dropdown-item" href="organisatie/bestuur.html">BESTUUR</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SPORTIEF
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="sportief/sportief.html#uitrusting">UITRUSTING</a>
                            <a class="dropdown-item" href="sportief/sportief.html#categorieen">CATEGORIEËN</a>
                            <a class="dropdown-item" href="sportief/sportief.html#jeugd">JEUGD</a>
                            <a class="dropdown-item" href="sportief/sportief.html#competieven">COMPETIEVEN</a>
                            <a class="dropdown-item" href="sportief/sportief.html#joggers">JOGGERS</a>
                            <a class="dropdown-item" href="sportief/sportief.html#starttorun">START TO RUN</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="archief/archief.html">ARCHIEF</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="links/links.html">LINKS &amp; SPONSERS</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://flachoppelandwebshop.jonasdekeyzer.ikdoeict.be/">WINKEL</a></li>
                </ul>
            </div>
        </nav>
        <div></div>
    </header>
    <main>
            <h2 class="text-center mt-5">Inschrijven</h2>
            <h3 class="text-center mb-5">Voor nieuwe leden!</h3>
            <div class="container w-50 mx-auto">
                <form class="form-signin mt-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="on">
                    <div class="row justify-content-lg-center">
                        <input type="text" name="voornaam" class="form-control col-lg-5" placeholder="Voornaam" autofocus required>
                        <input type="text" name="achternaam" class="form-control offset-lg-1 col-lg-5" placeholder="Achternaam" required>
                    </div>
                    <div class="row justify-content-lg-center">
                        <input type="email" name="mail" class="form-control col-lg-11 mt-3" placeholder="E-mail" required>
                        <input type="tel" name="gsm" class="form-control col-lg-11 mt-3" placeholder="Telefoonnummer" required>
                    </div>

                    <div class="row justify-content-lg-center">
                        <input type="text" name="adres" class="form-control col-lg-11 mt-3" placeholder="Adres + nummer" required>
                    </div>
                    <div class="row justify-content-lg-center">
                        <input type="text" name="gemeente" class="form-control col-lg-5 mt-3" placeholder="Gemeente" required>
                        <input type="text" name="postcode" class="form-control offset-lg-1 col-lg-5 mt-3" placeholder="Postcode" required>
                    </div>
                    <div class="row justify-content-lg-center">
                        <input type="date" name="geboortedatum" class="form-control col-lg-5 mt-3" placeholder="Geboortedatum" required>
                        <input type="text" name="geboorteplaats" class="form-control offset-lg-1 col-lg-5 mt-3" placeholder="Geboorteplaats" required>
                    </div>
                    <div class="row justify-content-lg-center">
                        <input type="text" name="nationaliteit" class="form-control col-lg-11 mt-3" placeholder="Nationaliteit" required>
                    </div>
                    <div class="form-group justify-content-lg-center">
                        <label for="geslacht" class="ml-3 mt-3">Geslacht:</label>
                        <input type="radio" class="" value="man" name="geslacht" id="man">
                        <label for="man">Man</label>
                        <input type="radio" class="" value="vrouw" name="geslacht" id="vrouw">
                        <label for="vrouw">Vrouw</label>
                    </div>
                    <div class="row justify-content-lg-center">
                        <input type="submit" class="btn btn-lg btn-primary btn-block col-lg-9" placeholder="Inschrijven"  id="submit" name="submit" value="Inschrijven">
                    </div>
                </form>
            </div>



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


    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
