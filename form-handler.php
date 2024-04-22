<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$from = 'info@ade-adeniji.com';
$to = 'moyoadeniji144@gmail.com';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email. \n".
                "User Message: $message. \n";


$headers = "From: $from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_body,$headers);

header("Location: index.html");
?>
