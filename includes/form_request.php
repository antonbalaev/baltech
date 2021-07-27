<?php	
	if (empty($_POST['name2_5780']) && strlen($_POST['name2_5780']) == 0 || empty($_POST['email2_5780']) && strlen($_POST['email2_5780']) == 0 || empty($_POST['email2_5780']) && strlen($_POST['email2_5780']) == 0)
	{
		return false;
	}
	
	$name2_5780 = $_POST['name2_5780'];
	$email2_5780 = $_POST['email2_5780'];
	$email2_5780 = $_POST['email2_5780'];
	
	$to = 'antonbalaev@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Baltech request a test";
	$email_body = "You have received a new message. \n\n".
				  "Name2_5780: $name2_5780 \nEmail2_5780: $email2_5780 \nEmail2_5780: $email2_5780 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@baltech.us\n";
	$headers .= "Reply-To: $email2_5780";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>