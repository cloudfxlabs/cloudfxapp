<?php
$name=$_POST["name"]."\n";
// Multiple recipients
$to = 'vvishnu405@gmail.com';
$email = $_POST["email"];//'vvishnu405@gmail.com'; // note the comma

// Subject
$subject = $_POST["subject"];//'Birthday Reminders for August';

// Message
$message = $name.$_POST["message"];

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[]= 'From:' .$email. "\r\n";

// Additional headers
//$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
//$headers[] = 'From:<admin@cloudfxlabs.io>';
//$headers[] = 'Cc: birthdayarchive@example.com';
//$headers[] = 'Bcc: birthdaycheck@example.com';

// Mail it
if(mail($to, $subject, $message, implode("\r\n", $headers)))
{
echo 'Mail has sent successfully';}
else {
echo 'Connection Problem email not sent';
  exit;
}
?>
