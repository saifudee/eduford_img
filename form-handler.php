<?php
$name=$_POST['name'];
$visitor_email =$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'sparkop513@gmail.com';

$email_subject = 'New Submission';

$email_body = "User Name: $name.\n".
               "User Email: $vistor_email.\n".
                "Subject:$subject.\n".
                  "User Message: $message.\n";

$to ='saifudeensaifudeen72@gmail.com';
$subject='From my website'

$headers ="From:$email_from \r\n";

$headers .="Reply-To:$vistor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>