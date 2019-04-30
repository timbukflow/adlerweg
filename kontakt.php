<!doctype html>
<html class="no-js" lang="de-CH">

<head>
   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>adlerweg</title>
    <meta name="robots" content="all">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Graf AG Totalunternehmung">
    
    <meta name="google-site-verification" content="...folgt..." />
    
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="adlerweg-wittenbach">
    <meta property="og:url" content="http://adlerweg.sg">
    <meta property="business:contact_data:street_address" content="Oedenhofstrasse 11A">
    <meta property="business:contact_data:locality" content="Wittenbach">
    <meta property="business:contact_data:region" content="9300">
    <meta property="business:contact_data:postal_code" content="9300">
    <meta property="business:contact_data:country_name" content="Switzerland">
    
    <meta name="description" content="An zentraler Lage, mitten im Dorfkern von Wittenbach am Adlerweg, entstehen 3 neue Mehrfamilienhäuser mit insgesamt 51 Mietwohnungen, bei denen das Leben und dessen Begegnungen ganz im Zentrum stehen.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#A52340">
    <meta name="msapplication-TileColor" content="#fbfbfb">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,700" rel="stylesheet">
</head>

<body class="kontakt">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <nav id="navcontainer" >  
        <div class="logocontainer">
            <a href="index" target="_top">
                <img class="logo" alt="adlerweg-wittenbach-logo" src="img/adlerweg-wittenbach-logo.svg">
                <h1 class="header">ADLERWEG <span>WITTENBACH</span></h1>
            </a>
            <div id="navburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>    
            </div>
        </div>
        <div class="nav">
            <ul>
                <li><a href="index">Projekt</a></li>
                <li><a href="lage">Lage</a></li>
                <li><a href="grundrisse">Grundrisse</a></li>
                <li><a href="download/adlerweg-wittenbach-inlay.pdf" target="_blank">Miete</a></li>
                <li><a href="kontakt">Kontakt</a></li>
            </ul>
        </div>
    </nav>

    <?php include('form.php'); ?>
    <div class="container">  
        <form id="contact" action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
            <h1>Kontaktformular</h1>
            <fieldset>
                <input placeholder="Name&#42;" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
                <span class="error"><?= $name_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Vorname&#42;" type="text" name="vorname" value="<?= $vorname ?>" tabindex="2">
                <span class="error"><?= $vorname_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Email&#42;" type="text" name="email" value="<?= $email ?>" tabindex="3" >
                <span class="error"><?= $email_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Telefon&#42;" type="text" name="telefon" value="<?= $telefon ?>" tabindex="4" >
                <span class="error"><?= $telefon_error ?></span>
            </fieldset>
            <fieldset>
                <textarea placeholder="Schreiben Sie uns eine Nachricht...." name="mitteilung" tabindex="5" ><?php echo $mitteilung;?></textarea>
                <span class="error"><?= $mitteilung_error ?></span>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Abschicken</button>
            </fieldset>
            <div class="success"><?= $success; ?></div>
        </form>
    </div>
    
    <div class="container-kontakt">
        <h1>Kontakt</h1>
        <img alt="logo-graf-gu" src="img/logo-graf-gu.png" >
        <p>
            <!--<span>Architektur<br>Bauleitung<br>Vermarktung<br></span>-->
            Graf GU AG<br>
            Postfach 18<br>
            Oberer Graben 16<br>
            9000 St.Gallen<br><br>
            <a href="tel:0712229211">071 222 92 11</a><br>
            <a href="mailto:info@grafag-sg.ch" target="_top">info@grafag-sg.ch</a><br>
            <a href="http://www.grafag-sg.ch">www.grafag-sg.ch</a><br><br>
        </p>
    </div>
    
    <div class="container-kontakt">
        <h1>Eigent&#252;mer</h1>
        <img alt="pkar-logo" src="img/pkar.png" >
        <p>
            Pensionskasse AR<br>
            Kasernenstrasse 6<br>
            9102 Herisau<br>
            <a href="http://www.pkar.ch">www.pkar.ch</a><br><br>
            <span class="impressum togglelink" data-toggle="#konditionen">
                Konditionen
            </span>
            <span id="konditionen">
                <br>Die vorliegende Webseite stellt das Bauvorhaben in der Projektphase dar. Aus s&#228;mtlichen Pl&#228;nen, Zeichnungen, Darstellungen, M&#246;blierungen, Visualisierungen oder Beschreibungen k&#246;nnen keinerlei Anspr&#252;che abgeleitet werden. Insbesondere kommt den Pl&#228;nen keine gesetzliche Wirkung von Grundbuchpl&#228;nen zu. Ausf&#252;hrungsbedingte &#196;nderungen, Anpassungen und/oder Massabweichungen k&#246;nnen vorkommen und bleiben jederzeit ausdr&#252;cklich vorbehalten. S&#228;mtliche Massangaben sind Circa-Masse.<br>
            </span>
            <span class="impressum togglelink" data-toggle="#impressum">
                Impressum
            </span>
            <span id="impressum">
                    <br><span>Design &amp; Interaction<br></span>
                    Schwizer &amp; Schlatter GmbH<br>
                    Davidstrasse 45<br>
                    9000 St.Gallen<br>
                    <a href="https://www.schwizerschlatter.com">www.schwizerschlatter.com</a><br><br>
                    <span>Visualisierungen<br></span>    
                    Business Images AG<br>
                    Bruggerstrasse 37b<br>
                    5400 Baden<br>
                    <a href="https://www.businessimages.ch">www.businessimages.ch</a><br><br>
                    <span>Fotografie<br></span>
                    Marc Bollhalder<br>
                    Schalkhusenstrasse 10,<br>
                    9533 Kirchberg<br>
                    <a href="https://www.mbphotography.ch">www.mbphotography.ch</a><br>
            </span>
        </p>
    </div>
    <div class="footer">
        <ul>
            <li><a href="index">Projekt</a></li>
            <li><a href="lage">Lage</a></li>
            <li><a href="grundrisse">Grundrisse</a></li>
            <li><a href="download/adlerweg-wittenbach-inlay.pdf" target="_blank">Miete</a></li>   
        </ul>   
    </div>
    
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
