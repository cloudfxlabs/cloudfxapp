<?php
$from="vishnu405@hotmail.com";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mail($name, $email, $subject, $message,"Form:".$from);

print "your message sent :</br>$name</br>$email</br>$subject</br>$message</p>";

?>
