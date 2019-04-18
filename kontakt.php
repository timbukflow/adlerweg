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
    <meta property="og:title" content="playstressaway">
    <meta property="og:url" content="http://adlerweg.ch">
    <meta property="business:contact_data:street_address" content="Schaffhauserstrasse 115">
    <meta property="business:contact_data:locality" content="Kloten">
    <meta property="business:contact_data:region" content="8302">
    <meta property="business:contact_data:postal_code" content="8302">
    <meta property="business:contact_data:country_name" content="Switzerland">
    
    <meta name="description" content="folgt">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#005a32">
    <meta name="msapplication-TileColor" content="#fbfbfb">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,700" rel="stylesheet">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
<!--
    <nav id="navcontainer" >  
        <div class="logocontainer">
            <a href="index" target="_top">
                <img class="logo" alt="adlerweg-wittenbach-logo" src="img/adlerweg-wittenbach-logo.svg">
                <h1 class="header">ADLERWEG WITTENBACH</h1>
            </a>
            <div id="navburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>    
            </div>
            <div class="mail">
                <a href="mailto:info@grafag-sg.ch?Subject=Adlerweg%20Wittenbach" target="_top"><img alt="adlerweg-wittenbach-logo" src="img/adlerweg-wittenbach-mail.svg"></a>
            </div>
            
            <a href="mailto:someone@yoursite.com?cc=someoneelse@theirsite.com, another@thatsite.com, me@mysite.com&bcc=lastperson@theirsite.com&subject=Big%20News&body=Body-goes-here">Email Us</a>
            <!--<div class="phone">
                <img alt="adlerweg-wittenbach-logo" src="img/adlerweg-wittenbach-phone.svg">
            </div>-->
    <!--    </div>
        <div class="nav">
            <ul>
                <li><a href="lage">Lage</a></li>
                <li><a href="grundrisse">Grundrisse</a></li>
                <li><a href="download/Adlerweg-Wittenbach-Inlay.pdf" target="_blank">Miete</a></li>
                <li><a href="kontakt">Kontakt</a></li>
                <a class="logo-weiss" href="index" target="_top">
                    <svg version="1.1" id="adlerlogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 303 153.8" style="enable-background:new 0 0 303 153.8;" xml:space="preserve">
                        <path class="a" d="M151.5,98.1c-48.9-0.2-46.8,27-46.8,27S127.1,140.6,151.5,98.1"/>
                        <path class="c" d="M151.5,98.1c24.3,42.5,46.8,27,46.8,27S200.4,98,151.5,98.1"/>
                        <path class="b" d="M151.5,98.1c-24.6,42.3,0,54,0,54S176.1,140.4,151.5,98.1"/>
                        <path class="st0" d="M151.5,98.1c0,0,50.1,0,75,0c37.5,0,37.5-30,37.5-30"/>
                        <path class="st0" d="M151.7,2.1c0,0-40.8,39.8-0.3,63C191.9,41.9,151.7,2.1,151.7,2.1z"/>
                        <path class="st0" d="M151.5,65.1L151.5,65.1c0,0,37.5-27,75-27c24.9,0,75,0,75,0s0,30-37.5,30h-37.5c0,0-12.6,0-37.5,0 c-37.5,0-37.5,30-37.5,30s12.6,0,37.5,0c37.5,0,37.5-30,37.5-30"/>
                        <path class="st0" d="M39,68.1c0,0,0,30,37.5,30c24.9,0,75,0,75,0"/>
                        <path class="st0" d="M76.5,68.1c0,0,0,30,37.5,30c24.9,0,37.5,0,37.5,0s0-30-37.5-30C89.1,68.1,76.5,68.1,76.5,68.1H39 c-37.5,0-37.5-30-37.5-30s50.1,0,75,0c37.5,0,75,27,75,27l0,0"/>
                    </svg>
                </a>
            </ul>
        </div>
    </nav> 
  -->  
    <?php include('form.php'); ?>
    <div class="container">  
        <form id="contact" action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
            <h3>Kontakt</h3>
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
                <textarea placeholder="Schreibe hier deine Mitteilung...." type="text" name="mitteilung" value="<?= $mitteilung ?>" tabindex="5" ></textarea>
                <span class="error"><?= $mitteilung_error ?></span>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Abschicken</button>
            </fieldset>
            <div class="success"><?= $success; ?></div>
        </form>
    </div>
 
    
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <!--<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>
