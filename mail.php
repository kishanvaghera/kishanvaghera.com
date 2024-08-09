<?php
error_reporting(E_ALL);

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$service=$_POST['service'];
$message=$_POST['message'];

$to = 'kishanvaghera8219@gmail.com';
$subject = 'Kishan vaghera website';
$message = "First Name:- $first_name\n"
         . "Last Name:- $last_name\n"
         . "Email:- $email\n"
         . "Phone:- $phone\n"
         . "Service:- $service\n"
         . "Message:- $message";
$headers = 'From: kishanvaghera8219@gmail.com' . "\r\n" .
           'Reply-To: kishanvaghera8219@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo json_encode(array("status"=>200));
} else {
    echo json_encode(array("status"=>412));
}
?>
