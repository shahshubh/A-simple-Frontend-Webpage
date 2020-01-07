
<?php
require 'contactform/phpmailer/PHPMailerAutoload.php';

if(isset($_POST["submit"])){	
	$mail = new PHPMailer;

	$mail->IsSMTP();
	 $mail->Host='smtp.gmail.com';
	// $mail->Port=587;
	 $mail->SMTPAuth=true;
	// $mail->SMTPSecure='tls';
	 $mail->Username='shahshubh251@gmail.com';
	 $mail->Password='chandra#401';

	// $mail->setFrom($_POST['mail'],$_POST['name']);
	// $mail->addAddress('shahshubh1010@gmail.com');
	// $mail->addReplyTo($_POST['mail'],$_POST['name']);.
	$mail->From = "shahshubh251@gmail.com";
	$mail->FromName = "Shubh shah";
	$mail->addAddress("shahshubh1010@gmail.com");
	//$mail->addReplyTo("shahshubh1010@gmail.com");

	$mail->isHTML(true);
	$mail->Subject='Form Submission';
	$mail->Body="here it is "."<br>"
				."PRODUCT"."&nbsp;&nbsp;&nbsp;&nbsp;"."QUANTITY"."<br>"
				.$_POST['product1']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity1']."<br>"
				.$_POST['product2']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity2']."<br>"
				.$_POST['product3']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity3']."<br>"
				.$_POST['product4']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity4']."<br>"
				.$_POST['product5']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity5']."<br>"
				.$_POST['product6']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity6']."<br>"
				.$_POST['product7']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity7']."<br>"
				.$_POST['product8']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity8']."<br>"
				.$_POST['product9']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity9']."<br>"
				.$_POST['product10']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['quantity10']."<br>";


	if(!$mail->send()){
		echo "something went wrong. " . $mail->ErrorInfo;
	}
	else{
		echo "Thanks for contacting us. We'll get back to you soon!";
		header("Location: website1.html");
	}

}

?> 