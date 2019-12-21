<?php
	session_start();
	
	

				
		// Captcha verification is Correct. Final Code Execute here!		

	
	$name=addslashes(strip_tags($_POST['name']));
	$phone=addslashes(strip_tags($_POST['phone']));
	$email=addslashes(strip_tags($_POST['email']));
	$subject=addslashes(strip_tags($_POST['subject']));
	$remarks=addslashes(strip_tags($_POST['remarks']));
	$isfeedback="Enquiry ";
	
	$data="<html><head></head><body>";
	$data.="<div class='panel panel-primary'>";
	$data.="<div class='panel-heading'><h4 class='panel-title'>".$subject."</h4></div>";
	$data.="<table class='table table-stripped table-hover'>";
	$data.="<tr><th>From:</th><td>".$name."</td></tr>";
	$data.="<tr><th>Phone:</th><td>".$phone."</td></tr>";
	$data.="<tr><th>Email:</th><td>".$email."</td></tr>";
	$data.="<tr><th>Subject:</th><td>".$subject."</td></tr>";
	$data.="<tr><td colspan='2'><b>Remarks:</b><br>".$remarks."</td></tr>";
	$data.="</table></div>";
	$data.="</body></html>";
	
	function sendEmail() {
		global $data,$email,$phone,$subject,$name,$isfeedback;
		$to='mahakdhiman23@gmail.com';
		
		$sub="$isfeedback by $name via website";
		$headers = 'From:  mahakdhiman23@gmail.com/'."\r\n".'Reply-To: '.$email.'\r\n';
		// Always set content-type when sending HTML email
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n" .'X-Mailer: PHP/' . phpversion();
		
		$msg=$data;
	
		if(mail($to,$sub,$msg,$headers))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
	if(sendEmail()) {
		$_SESSION['msgs']['msg'] = "Successfully submitted. We will get back to you shortly. Thanks!!";
		$_SESSION['msgs']['type'] = "alert-success";
	} else {
		$_SESSION['msgs']['msg'] = "Oops!! Not Submitted. Please try again.";
		$_SESSION['msgs']['type'] = "alert-danger";
	}
	header("location:contact.php");
	
	
	
	
?>