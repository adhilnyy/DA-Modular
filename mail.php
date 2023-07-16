<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
// $subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "";

mail($recipient, $phone, $message, $mailheader) or die("Error!");

echo "message send ";


?>