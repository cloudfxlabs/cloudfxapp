<?php
$to      = 'vishnu405@hotmail.com';
$subject = 'Fake sendmail test';
$message = '!';
$headers = 'From: vvishnu405@gmail.com' . "\r\n" .
           'Reply-To: vvishnu405@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    die('Failure: Email was not sent!');
}
?>
