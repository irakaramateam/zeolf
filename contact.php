<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$recipient = 'sales@zeolf.com';
$subject = 'Message from a site visitor '.$name;

$message = 'From: '.$name."\n";
$message .= 'E-mail: '.$email."\n";
$message .= 'Message: '.$message;

$headers = 'From: '.$email."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

$mail_status =mail($recipient, $subject, $message, $headers, $email, $name);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for reaching out, ZEOLF Team will stay in touch😘.');
		window.location = 'contact.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to inquiry@zeolf.com');
		window.location = 'contact';
	</script>
<?php
}
?>