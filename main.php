<?php

if (isset($_POST['sendContactEmail']))
{
    $name = $_POST['contact-name'];
    $from = $_POST['contact-email'];
    $subject =  $_POST['contact-subject'];
    $message = $_POST['contact-message'];

    $mailTo = "wayfarergamedev@protonmail.com";
    $text = "You have recievied an e-mail from" .$name.".\n\n".$message;
    $headers = "From: ".$from;

    mail( $mailTo,  $subject, $text,$headers);
    header("Location: index.php");
}