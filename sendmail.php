<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
//$mail->SMTPDebug = 3;
$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'vvishnu405@gmail.com';          // SMTP username
$mail->Password = 'vishnu@123'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$name=$_POST['name'];
$email=$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail->setFrom('admin@cloudfxlabs.io','cloudfxlabs');
$mail->addReplyTo($email);
$mail->addAddress('admin@cloudfxlabs.io','cloudfxlabs');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = "Name:&nbsp;&nbsp;&nbsp;\n$name<br>";
$bodyContent .= "mail_id:&nbsp;&nbsp;&nbsp;\n$email<br>";
$bodyContent .= "message:&nbsp;&nbsp;&nbsp;\n$message<br>";
$mail->Subject = $subject;
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo '<script type="text/javascript">';
  echo 'alert("mail sucessfully sent ");';
  echo 'window.location = "contact.html";';
  echo '</script>';
  exit;
}
?>
