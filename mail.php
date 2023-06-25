<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Email:$email \n Message: $message";
$recipient = "contact@zeolf.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

$mail_status =mail($recipient, $subject, $formcontent, $mailheader);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for reaching out, ZEOLF Team will stay in touch 🔬');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed 👨. Please, send an email to inquiry@zeolf.com');
		window.location = 'contact';
	</script>
<?php
}
?>