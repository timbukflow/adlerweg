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
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400" rel="stylesheet">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <div class="plancontainer">
         <div class="logo-container">
            <a href="index" target="_top">
                <img class="logo" alt="adlerweg-wittenbach-logo" src="img/adlerweg-wittenbach-logo.svg">
            </a>
        </div>
    </div>
    
    <div class="form">
        <?php
        if(isset($_POST['submit'])){
            $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
            $vorname = htmlspecialchars(stripslashes(trim($_POST['vorname'])));
            $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
            $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
            $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
            if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
                $name_error = 'Invalid name';
            }
            if(!preg_match("/^[A-Za-z .'-]+$/", $vorname)){
                $vorname_error = 'Invalid name';
            }
            if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
                $subject_error = 'Invalid subject';
            }
            if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
                $email_error = 'Invalid email';
            }
            if(strlen($message) === 0){
                $message_error = 'Your message should not be empty';
            }
        }
        ?>
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" name="name">
            <p><?php if(isset($name_error)) echo $name_error; ?></p>
            
            <label for="vorname">Vorname:</label><br>
            <input type="text" name="vorname">
            <p><?php if(isset($vorname_error)) echo $vorname_error; ?></p>
            
            <label for="subject">Subject:</label><br>
            <input type="text" name="subject">
            <p><?php if(isset($subject_error)) echo $subject_error; ?></p>
            <label for="email">Email:</label><br>
            <input type="text" name="email">
            <p><?php if(isset($email_error)) echo $email_error; ?></p>
            <label for="message">Message:</label><br>
            <textarea name="message"></textarea>
            <p><?php if(isset($message_error)) echo $message_error; ?></p>
            <input type="submit" name="submit" value="Submit">
            <?php 
            if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
                $to = 'ivoschwizer@gmail.com'; // edit here
                $body = " Name: $name\n E-mail: $email\n Message:\n $message";
                if(mail($to, $subject, $body)){
                    echo '<p style="color: green">Message sent</p>';
                }else{
                    echo '<p>Error occurred, please try again later</p>';
                }
            }
            ?>
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
