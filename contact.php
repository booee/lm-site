<?php

if($_POST["submit"]) {
    $recipient="lennoxmccaskill@gmail.com";
    $subject="Someone Wants to Look Ahead";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

