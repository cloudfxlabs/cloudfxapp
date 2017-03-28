<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6d4b406e18b0590bfe3badfe92f4d92e4acca1ce
>>>>>>> 6864111a6e0bbfd137c8278f1bb216dbfb102dc6
$to = 'InsertYourEmailAddress';
$subject = "Beautiful HTML Email using PHP by CodexWorld";
// Get HTML contents from file
$htmlContent = file_get_contents("email_template.html");
<<<<<<< HEAD

// Set content-type for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: vvishnu405@gmail.com.com>' . "\r\n";
// $headers .= 'Cc: codexworld@gmail.com' . "\r\n";

=======
<<<<<<< HEAD

// Set content-type for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: vvishnu405@gmail.com.com>' . "\r\n";
// $headers .= 'Cc: codexworld@gmail.com' . "\r\n";

>>>>>>> 6864111a6e0bbfd137c8278f1bb216dbfb102dc6
// Send email
if(mail($to,$subject,$htmlContent,$headers)):
	$successMsg = 'Email has sent successfully.';
else:
	$errorMsg = 'Some problem occurred, please try again.';
endif;
<<<<<<< HEAD
=======
=======

// Set content-type for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: vvishnu405@gmail.com.com>' . "\r\n";
// $headers .= 'Cc: codexworld@gmail.com' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
	$successMsg = 'Email has sent successfully.';
else:
	$errorMsg = 'Some problem occurred, please try again.';
endif;
=======
   $to = "abc@example.com";//change receiver address
   $subject = "This is subject";
   $message = "<h1>This is HTML heading</h1>";

   $header = "From:vvishnu405@gamil.com \r\n";
   $header .= "MIME-Version: 1.0 \r\n";
   $header .= "Content-type: text/html;charset=UTF-8 \r\n";

   $result = mail ($to,$subject,$message,$header);

   if( $result == true ){
      echo "Message sent successfully...";
   }else{
      echo "Sorry, unable to send mail...";
   }
>>>>>>> 55b572bf9ffa22983a58fc1cf130b8782e61a0db
>>>>>>> 6d4b406e18b0590bfe3badfe92f4d92e4acca1ce
>>>>>>> 6864111a6e0bbfd137c8278f1bb216dbfb102dc6
?>
