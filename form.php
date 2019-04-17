<?php

$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $name_error = "only letters and white space allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }
    
    if (empty($_POST["phone"])) {
        $phone_error = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
            $phone_error = "Invalid phone number";
        }
    }
    
    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
    
    if ($name_error == "" and $email_error == "" and $phone_error == "" ){
        $message_body = "";
        unset($_POST["submit"]);
        foreach($_POST as $key => $value){
            $message_body .= "$key: $value\n";
        }
        
        $to = "ivoschwizer@gmail.com";
        $subject = "Contact From Submit";
        if (mail($to, $subject, $message_body)){
            $success = "Message sent, thank you for contacting us!";
            $name = $email = $phone = $message = $url = "";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}