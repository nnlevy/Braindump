<?php 

$getName = $_REQUEST['name'];
$getName = strip_tags($getName); 

$getEmail = $_REQUEST['email'];
$getEmail = strip_tags($getEmail); 

$getBody = $_REQUEST['body'];
$getBody = strip_tags($getBody);

$recipient = "sales@nightlylabs.com"; //recipient
$name = "$getName";
$email = "$getEmail";

    $header .= "From: $name <$email>\r\n"; 
    $header .= "Content-Type: text/plain\r\n"; 
		mail($recipient, "Contact from Nightly Labs Form", "\n name: " . "$getName" . "\n email address: " . "$getEmail" . "\n \n message: " . "$getBody");

echo "<meta http-equiv=\"REFRESH\" content=\"0;url=http://nightlylabs.com\">";

?>