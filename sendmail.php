<?php
$from="vvishnu405@gmail.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mail($email, $subject, $message,"Form:".$from);

printf "your message sent :<br>$email</br>$subject</br>$message</p>";

?>
