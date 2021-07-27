<?php	
	if (empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['tel']) && strlen($_POST['tel']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$message = $_POST['message'];
	
	$to = 'antonbalaev@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Baltech Form";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nTel: $tel \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@baltech.us\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>