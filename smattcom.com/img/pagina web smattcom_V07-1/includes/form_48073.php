<?php	
	if (empty($_POST['name_1076_36259_34152_48073']) && strlen($_POST['name_1076_36259_34152_48073']) == 0 || empty($_POST['email_1076_36259_34152_48073']) && strlen($_POST['email_1076_36259_34152_48073']) == 0 || empty($_POST['email_1076_36259_34152_48073']) && strlen($_POST['email_1076_36259_34152_48073']) == 0 || empty($_POST['email_1076_36259_34152_48073']) && strlen($_POST['email_1076_36259_34152_48073']) == 0 || empty($_POST['message_1076_36259_34152_48073']) && strlen($_POST['message_1076_36259_34152_48073']) == 0)
	{
		return false;
	}
	
	$name_1076_36259_34152_48073 = $_POST['name_1076_36259_34152_48073'];
	$email_1076_36259_34152_48073 = $_POST['email_1076_36259_34152_48073'];
	$email_1076_36259_34152_48073 = $_POST['email_1076_36259_34152_48073'];
	$email_1076_36259_34152_48073 = $_POST['email_1076_36259_34152_48073'];
	$message_1076_36259_34152_48073 = $_POST['message_1076_36259_34152_48073'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_1076_36259_34152_48073: $name_1076_36259_34152_48073 \nEmail_1076_36259_34152_48073: $email_1076_36259_34152_48073 \nEmail_1076_36259_34152_48073: $email_1076_36259_34152_48073 \nEmail_1076_36259_34152_48073: $email_1076_36259_34152_48073 \nMessage_1076_36259_34152_48073: $message_1076_36259_34152_48073 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_1076_36259_34152_48073";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>