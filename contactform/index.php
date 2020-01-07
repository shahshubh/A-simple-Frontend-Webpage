<?php
/*require 'phpmailer/PHPMailerAutoload.php';


$result="Hi";
if(isset($_POST["submit"])){	
	$mail = new PHPMailer;

	$mail->IsSMTP();
	 $mail->Host='smtp.gmail.com';
	$mail->Port=587;
	 $mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	 $mail->Username='shahshubh251@gmail.com';
	 $mail->Password='chandra#401';

	// $mail->setFrom($_POST['mail'],$_POST['name']);
	// $mail->addAddress('shahshubh1010@gmail.com');
	// $mail->addReplyTo($_POST['mail'],$_POST['name']);.
	$mail->From = "shahshubh251@gmail.com";
	$mail->FromName = "JinaliTraders";
	$mail->addAddress("shahshubh251@gmail.com");
	//$mail->addReplyTo("shahshubh1010@gmail.com");
*/




/*if(isset($_POST["submit"])){

	$to="shubh.as@somaiya.edu";
	$subject='Form Submission: '.$_POST['subject'];
	$message='Name: '.$_POST['name'].'Phone Number: '.$_POST['number'].'Email: '.$_POST['mail'].'Message: '.$_POST['message'];
	$send = mail($to,$subject,$message);

if($send == true){
    echo "Mail sent successfully";
}
else{
    echo "Error sending mail";
}

echo "<br/>yooo";	*/	








require 'phpmailer/PHPMailerAutoload.php';

if(isset($_POST["submit"])){
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = '';                 // SMTP username
//$mail->Password = '';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'shahshubh251@gmail.com';
$mail->FromName = 'Jinali Traders';
$mail->addAddress('shahshubh251@gmail.com');     // Add a recipient
$mail->addAddress('shahshubh1010@gmail.com');               // Name is optional
$mail->addReplyTo('shahshubh251@gmail.com');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

/*
	$mail->isHTML(true);
	$mail->Subject='Form Submission: '.$_POST['subject'];
	$mail->Body='<h1 align=center>Name: '.$_POST['name'].'<br>Phone Number: '.$_POST['number'].'<br>Email: '.$_POST['mail'].'<br>Message: '.$_POST['message'].' </h1>';
	if(!$mail->send()){
		echo "something went wrong. " . $mail->ErrorInfo;
	}
	else{
		header("Location: ../website1.html");

		$result="Thanks".$_POST['name']."for contacting us. We'll get back to you soon!";
	}*/

/*	$mail->ClearAllRecipients();
	$mail->addAddress($_POST['mail']);

	$mail->isHTML(true);
	$mail->Subject='Jinali Traders';
	$mail->Body='Thankyou we will get back to you soon';
	if(!$mail->send()){
		echo "something went wrong. " . $mail->ErrorInfo;
	}
	else{
		header("Location: ../website1.html");
	}*/
}

?>
