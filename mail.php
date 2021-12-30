<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "tovenkateshwaran@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Phone = " . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@turnyourfuture.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>