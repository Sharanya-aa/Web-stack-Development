<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$renovation_area = $_POST['renovation area'];
$message = $_POST['message'];


$email_from = 'designs@homeremodelling.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Renovation area: $renovation_area.\n".
                "Message: $messgae.\n";


$to = 'r.sharanya@mca.christuniversity.in';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>
