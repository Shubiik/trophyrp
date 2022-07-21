<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailadress'];
$message= $_POST['message'];
$to = "fejagames@gmail.com";
$subject = "TrophyRP - support";
$txt ="Name: ". $name . "\r\n  Email: " . $email . "\r\n Message:" . $message;
$headers = "From: noreply@trophyrp.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Kontakt.html");
?>