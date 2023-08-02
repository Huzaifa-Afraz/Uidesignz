<?php

// $errorMSG = "";

// // NAME
// if (empty($_POST["name"])) {
//     $errorMSG = "Name is required ";
// } else {
//     $name = $_POST["name"];
// }

// // EMAIL
// if (empty($_POST["email"])) {
//     $errorMSG .= "Email is required ";
// } else {
//     $email = $_POST["email"];
// }

// // MSG SUBJECT
// if (empty($_POST["msg_subject"])) {
//     $errorMSG .= "Subject is required ";
// } else {
//     $msg_subject = $_POST["msg_subject"];
// }

// // Phone Number
// if (empty($_POST["phone_number"])) {
//     $errorMSG .= "Number is required ";
// } else {
//     $phone_number = $_POST["phone_number"];
// }


// // MESSAGE
// if (empty($_POST["message"])) {
//     $errorMSG .= "Message is required ";
// } else {
//     $message = $_POST["message"];
// }


// // $EmailTo = "designermubeen85@gmail.com";
// $EmailTo = "huzaifaafraz90@gmail.com";
// $Subject = "New client Message Received";
// $header="From: $email";
// $msg=// prepare email body text
// $Body = "";
// $Body .= "Name: ";
// $Body .= $name;
// $Body .= "\n";
// $Body .= "Email: ";
// $Body .= $email;
// $Body .= "\n";
// $Body .= "Subject: ";
// $Body .= $msg_subject;
// $Body .= "\n";
// $Body .= "Phone Number: ";
// $Body .= $phone_number;
// $Body .= "\n";
// $Body .= "Message: ";
// $Body .= $message;
// $Body .= "\n";

// if(mail($EmailTo, $Subject, $message, $header)){
//     echo "<script>alert(`email sent`)</script>";
// }
// else{
//     echo "<script>alert(`not sent`)</script>";
// }



$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// Phone Number
if (empty($_POST["phone_number"])) {
    $errorMSG .= "Number is required ";
} else {
    $phone_number = $_POST["phone_number"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

// Prepare email headers and body
// $to = "designermubeen85@gmail.com";
// $subject = "New client Message Received";
// $headers = "From: $email";
// $body = "Name: $name\nEmail: $email\nSubject: $msg_subject\nPhone Number: $phone_number\nMessage: $message";
// if(mail($to,$subject,$body, $headers)) {
//     echo `<script>alert('Email sent')</script>`;
// } else {
//     echo "<script>alert('The email message was not sent. ')</script>";
// }

// Attempt to send email
// if (mail($to, $subject, $body, $headers)) {
//     echo "<script>alert('Email sent')</script>";
// } else {
//     echo "<script>alert('Email not sent')</script>";
// }

// if ($errorMSG !== "") {
//     echo "<script>alert('$errorMSG')</script>";
// }

// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
// $from = "huzaifaafraz75@gmail.com";
// $to = "huzaifaafraz90@gmail.com";
// $subject = "Checking PHP mail";
// $message = "PHP mail works just fine";
// $headers = "From:" . $from;
// if(mail($to,$subject,$message, $headers)) {
//     echo "<script>alert('The email message was sent.')</script>";
// } else {
//     echo "<script>alert('The email message was not sent. ')</script>";
// }
?>