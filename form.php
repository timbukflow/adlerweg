<?php

$name_error = $vorname_error = $email_error = $telefon_error = "";
$name = $vorname = $email = $telefon = $mitteilung = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name ist erforderlich";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $name_error = "Es sind nur Buchstaben erlaubt";
        }
    }
    
    if (empty($_POST["vorname"])) {
        $vorname_error = "Vorname ist erforderlich";
    } else {
        $vorname = test_input($_POST["vorname"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$vorname)) {
            $vorname_error = "Es sind nur Buchstaben erlaubt";
        }
    }
    
    if (empty($_POST["email"])) {
        $email_error = "Email ist erforderlich";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Diese Email Adresse ist nicht korrekt";
        }
    }
    
    if (empty($_POST["telefon"])) {
        $telefon_error = "Telefon ist erforderlich";
    } else {
        $telefon = test_input($_POST["telefon"]);
        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$telefon)) {
            $telefon_error = "Diese Telefonnummer ist nicht korrekt";
        }
    }
    
    if (empty($_POST["mitteilung"])) {
        $mitteilung = "";
    } else {
        $mitteilung = test_input($_POST["mitteilung"]);
    }
    
    if ($name_error == "" and $vorname_error == "" and $email_error == "" and $telefon_error == "" ){
        $message_body = "";
        unset($_POST["submit"]);
        foreach($_POST as $key => $value){
            $message_body .= "$key: $value\n";
        }
        
        $to = "ivoschwizer@gmail.com";
        $subject = "Adlerweg Wittenbach Anfrage";
        if (mail($to, $subject, $message_body)){
            $success = "Ihre Anfrage wurde erfolgreich gesendet, danke für Ihr Interesse.";
            $name = $vorname = $email = $telefon = $mitteilung = "";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}