<?php require_once('config.php');

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <enquiry@iconiquebydrbkgarg.com>' . "\r\n";

function send_mail($to, $subject, $mail_msg)
{
	$mail_host = 'localhost';
	$mail_username = 'enquiry@ichelon.in';
	$mail_password = '';
	$mail_from_emailid = 'enquiry@ichelon.in';
	$mail_from_name = 'Check mail';
	
	$explode_to = explode('|', $to);
	$dic = dirname(__DIR__);
	require_once($dic.'/online-consultation/smtpmailer/class.phpmailer.php');		
	$mail = new PHPMailer();
	$mail->IsSMTP(); // set mailer to use SMTP
	$mail->Host = $mail_host;  // specify main and backup server
	$mail->SMTPAuth = false;     // turn on SMTP authentication
	$mail->Port = 25;
	$mail->Username = $mail_username;  // SMTP username
	$mail->SMTPSecure = 'none';
	$mail->Password = $mail_password; // SMTP password		
	$mail->From = $mail_from_emailid;
	$mail->FromName = $mail_from_name;
	foreach($explode_to as $key => $val){
		$mail->AddAddress($val);
	}
	$mail->IsHTML(true);  // set email format to HTML
	//$mail->AddAttachment("phpmailer.gif");         // add attachments
	$mail->Subject = $subject;
	$mail->Body = $mail_msg;	
	if(!$mail->Send())
	{
	   //echo "Mailer Error: " . $mail->ErrorInfo;
	   return false;
	}else{
		return true;
	}
}

if(isset($_POST['book'])){
	$fname = !empty($_POST['fname'])?$_POST['fname']:'';
	$lname = !empty($_POST['lname'])?$_POST['lname']:'';
	$phone = !empty($_POST['phone'])?$_POST['phone']:'';
	$email = !empty($_POST['email'])?$_POST['email']:'';
	$date = !empty($_POST['date'])?$_POST['date']:'';	
	$time_slot = !empty($_POST['time_slot'])?$_POST['time_slot']:'';	
	$today_date = date("Y-m-d H:i:s");
	$booking_id = strtotime($today_date);
	
	$sql = "INSERT INTO `consultation`(`fname`, `lname`, `booking_id`, `phone`, `email`, `date`, `time_slot`) VALUES ('$fname','$lname','$booking_id','$phone','$email','$date','$time_slot')";
	$result = $conn->query($sql);
	if($result == true){
		$to = 'talk2drbk@gmail.com';
		$subject = 'Online consultation booking #'.$booking_id;
		$message = '';
		/**$message = '<h4>Booking details :</h4><table style="width: 100%;border:1px solid #000;"><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Booking ID:</th><td style="border:1px solid #000;">'.$booking_id.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Name:</th><td style="border:1px solid #000;">'.$fname.' '.$lname.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Telephone:</th><td style="border:1px solid #000;">'.$phone.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Email:</th><td style="border:1px solid #000;">'.$email.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Date:</th><td style="border:1px solid #000;">'.$date.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Time slot:</th><td style="border:1px solid #000;">'.$time_slot.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Connect via whatsapp:</th><td style="border:1px solid #000;"><a target="_blank" href="https://api.whatsapp.com/send?phone='.$whatappnumber.'&text=Hi&source=&data=">Click here to connect with consultant</></td></tr></table>';**/
		$message = '<h4>Booking details :</h4><table style="width: 100%;border:1px solid #000;"><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Booking ID:</th><td style="border:1px solid #000;">'.$booking_id.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Name:</th><td style="border:1px solid #000;">'.$fname.' '.$lname.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Telephone:</th><td style="border:1px solid #000;">'.$phone.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Email:</th><td style="border:1px solid #000;">'.$email.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Date:</th><td style="border:1px solid #000;">'.$date.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Time slot:</th><td style="border:1px solid #000;">'.$time_slot.'</td></tr><tr style="border:1px solid #000;"><th style="border:1px solid #000;">Connect via whatsapp:</th><td style="border:1px solid #000;"><a target="_blank" href="https://api.whatsapp.com/send?phone='.$whatappnumber.'&text=Hi&source=&data=">Click here to connect with B.K. garg</></td></tr></table><h3 class="fs-subtitle" style="font-size:14px;">Note* :- Consultation with Dr. B.K. garg is confirmed only after payment receipt has been mailed on <a href="mailto:talk2drbk@gmail.com">talk2drbk@gmail.com</a></h3>';
		
		mail($to,$subject,$message,$headers);
		mail($email,$subject,$message,$headers);
		$response = array('status' => 0, 'booking_id' => $booking_id, 'message' => $message);
		echo json_encode($response);
		die;
	}else{
		$response = array('status' => 1);
		echo json_encode($response);
		die;
	}
}
?>