<?php include 'validation.php';?>
<!DOCTYPE HTML>
<html>
<head>
<title>PHP Contact Form with Validation</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container">
<div class="main">
<h2>PHP Contact Form with Validation</h2>
<form method="post" action="mail.php">
<label>Name :</label>
<input class="input" type="text" name="name" value="">
<span class="error"><?php echo $nameError;?></span>
<label>Email :</label>
<input class="input" type="text" name="email" value="">
<span class="error"><?php echo $emailError;?></span>
<label>Purpose :</label>
<input class="input" type="text" name="purpose" value="">
<span class="error"><?php echo $purposeError;?></span>
<label>Message :</label>
<textarea name="message" val=""></textarea>
<span class="error"><?php echo $messageError;?></span>
<input class="submit" type="submit" name="submit" value="Submit">
<span class="success"><?php echo $successMessage;?></span>
</form>
</div>
</div>
</body>
</html>
