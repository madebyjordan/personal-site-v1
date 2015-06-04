<?php

 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];


$email_from = 'madeby@jordan.co.uk';
$email_subject = "Contact submission";
$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
                            
$to = "justjaaayy@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);

header('Location: contactredirect.php');
 

?>